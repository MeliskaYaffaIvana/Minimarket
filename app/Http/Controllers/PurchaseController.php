<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Repositories\PurchaseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use PDF;
class PurchaseController extends AppBaseController
{
    /** @var  PurchaseRepository */
    private $purchaseRepository;

    public function __construct(PurchaseRepository $purchaseRepo)
    {
        $this->purchaseRepository = $purchaseRepo;
    }

    /**
     * Display a listing of the Purchase.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $purchases = $this->purchaseRepository->all();

        return view('purchases.index')
            ->with('purchases', $purchases);
    }

    /**
     * Show the form for creating a new Purchase.
     *
     * @return Response
     */
    public function create()
    {
        $supplier = \App\Models\Supplier::pluck('company_name','id');
        $items = \App\Models\Item::pluck('name','id');
        return view('purchases.create')->with(compact('supplier'))->with(compact('items'));
    }

    /**
     * Store a newly created Purchase in storage.
     *
     * @param CreatePurchaseRequest $request
     *
     * @return Response
     */
    public function store(CreatePurchaseRequest $request)
    {
        DB::beginTransaction();
       try {
           $input = $request->all();
           $input['user_id']=\Auth::user()->id;
           $purchase = $this->purchaseRepository->create($input);
           foreach ($input['item_id'] as $key => $row) {
               $purchase_detail = new \App\Models\PurchaseDetail();
               $item = \App\Models\Item::find($input['item_id'][$key]);
               $purchase_detail->item_id = $item->id;
               $purchase_detail->qty = $input['qty'][$key];
               $purchase_detail->sub_total = $input['sub_total'][$key];
               $purchase_detail->purchase_id = $purchase->id;
               $purchase_detail->save();

               $new_stok = (int)$item->stock + (int)$input['qty'][$key];
               $item->stock = $new_stok;
               $item->save();
            //setiap pembelian barang akan menambah stok barang
           }
           $result = $purchase->id;
           DB::commit();
           Flash::success('Purchase saved successfully.');
       } catch (Exception $e) {
           DB::rollBack();
       }
           return redirect(route('purchases.show', $result));
    }

    /**
     * Display the specified Purchase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        return view('purchases.show')->with('purchase', $purchase);
    }

    /**
     * Show the form for editing the specified Purchase.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $purchase = $this->purchaseRepository->find($id);
        // $purchase = \App\Models\Supplier::pluck('company_name','id');

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        return view('purchases.edit')->with('supplier', $purchase);
    }

    /**
     * Update the specified Purchase in storage.
     *
     * @param int $id
     * @param UpdatePurchaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePurchaseRequest $request)
    {
        
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        $input = $request->all();
        $input['user_id'] = \Auth::user()->id;

        $purchase = $this->purchaseRepository->update($input, $id);

        Flash::success('Purchase updated successfully.');

        return redirect(route('purchases.index'));
    }

    /**
     * Remove the specified Purchase from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        $this->purchaseRepository->delete($id);

        Flash::success('Purchase deleted successfully.');

        return redirect(route('purchases.index'));
    }

    public function print($id)
    {
        $purchase = $this->purchaseRepository->find($id);


 
        $pdf = PDF::loadview('purchases.pdf',['purchase'=>$purchase]);
        return $pdf->stream();
    }
}
