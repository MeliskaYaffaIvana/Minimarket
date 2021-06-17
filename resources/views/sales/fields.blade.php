<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Branch Store:') !!}
    {!! Form::select('customer_id', $customer, null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::text('total', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', \Carbon\Carbon::now(), ['class' => 'form-control','readonly']) !!}
</div>
<div class="form-group col-md-12">
    <h4>Item</h4>
    <div class="row">
        <div class="col-md-3">
            {!! Form::select('item_id', $items, null, ['class' => 'form-control select-item', 'placeholder'=>'Select Item'])!!}
        </div>
        <div class="col-md-3">
            {!! Form::text('price', null, ['class'=> 'form-control', 'id'=> 'price', 'placeholder' => 'Harga']) !!}
            {!! Form::text('stock', null, ['class'=> 'form-control', 'id'=> 'stock', 'placeholder' => 'Stock', 'readonly']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::text('qty', null, ['class'=> 'form-control', 'id'=> 'qty', 'placeholder' => 'Jumlah']) !!}
            {!! Form::text('sub_total', null, ['class'=> 'form-control', 'id'=> 'sub_total', 'placeholder' => 'Sub Total', 'readonly']) !!}
        </div>
        <div class="col-md-3">
            <button class="btn btn-sm btn-primary" id="btn-tambah">Tambah</button>
        </div>
    </div>
    <div class="form-group col-md-12">
   <h4>Daftar Pembelian</h4>
   <div class="row" style="border-bottom: 1px solid #eeeeee;margin-bottom: 15px;padding-bottom: 5px;">
       <div class="col-md-1">No</div>
       <div class="col-md-3">Nama</div>
       <div class="col-md-3">Harga</div>
       <div class="col-md-2">Qty</div>
       <div class="col-md-3">Subtotal</div>
   </div>
   <div id="daftar-penjualan">

   </div>
</div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sales.index') !!}" class="btn btn-default">Cancel</a>
</div>
