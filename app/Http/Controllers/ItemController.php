<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Storage;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');
        if($search){
            $item = Item::with('kategori')->where('nama_item', "like", "%{$search}%")
                ->orWhere('merk_item', "like", "%{$search}%")
            ->paginate(3);
        }else {
            $item = Item::with('kategori')->get();
        }
        return view('item.index', ['item' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('item.create', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name = new Item;
        if($request->file('image')){
            $image_name = $request->file('image')->store('images', 'public');

        }
        $item = new Item;
        $item->nama_item = $request->get('nama_item');
        $item->merk_item = $request->get('merk_item');
        $item->harga_jual = $request->get('harga_jual');
        $item->satuan = $request->get('satuan');
        $item->stock = $request->get('stock');
        $item->item_image = $image_name;

        $kategori = new Kategori;
        $kategori->id =$request->get('kategori');

        $item->kategori()->associate($kategori);
        $item->save();
        
        return redirect()->route('item.index')
        ->with('success', 'item Succesfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('item.detail', compact('item'));
    }

    /**
     * Show the form for editing the spe
     * cified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::with('kategori')->where('id', $id)->first();
        $kategori = Kategori::all();
        return view('item.edit', compact('item', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->id = $request->id;
        $item->nama_item = $request->nama_item;
        $item->merk_item = $request->merk_item;
        $item->harga_jual = $request->harga_jual;
        $item->satuan = $request->satuan;
        $item->stock = $request->stock;

        if($item->item_image && file_exist(storage_path('app/public/' . $item->item_image))){
            Storage::delete('public/' . $item->item_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $student->item_image = $image_name;
        $student->save(); 

        $kategori = new Kategori;
        $kategori->id =$request->get('kategori');

        $item->kategori()->associate($kategori);
        $item->save();

        return redirect()->route('item.index')
        ->with('success', 'item Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        item::find($id)->delete();
        return redirect()->route('item.index')
        ->with('success', 'item Successfully Deleted');
    }
}
