<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <section class="content-header">
        <h2>
            Laporan Pembelian
        </h2>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                 
                <div class="row" style="padding-left: 20px">
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $purchase->id !!}</p>
</div>

<!-- Supplier Id Field -->
<div class="form-group">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    <p>{!! $purchase->supplier->company_name !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $purchase->user->name !!}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{!! $purchase->total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $purchase->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $purchase->updated_at !!}</p>
</div>

<div class="row">
    <div class="col-md-4 col-sm-4">
        <h4>{{ config('app.name') }}</h4>
        <address>
            <p>Jalan Raya Tlogowaru no 3</p>
            <p>Kedungkandan Malang</p>
            <p>65132</p>
        </address>
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Purchase</h4>
        <p>{{\Carbon\Carbon::parse($purchase->created_at)->format('d-M-Y')}}</p>
        <p>ID : {{$purchase->id}} </p>
        <p>Pegawai : {{$purchase->user->name}} </p>
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Supplier</h4>
        <p>{{$purchase->supplier->nama}}</p>
        <p>Alamat : {{$purchase->supplier->address}}</p>
        <p>Telp : {{$purchase->supplier->phone}}</p>
        <p>Email :{{$purchase->supplier->email}}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-sm-10">
        <h3>Detail Purchase</h3>
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Nama</th>
                <th class="col-md-2">Qty</th>
                <th class="col-md-2">Sub Total</th>
            </tr>
            @foreach ($purchase->purchase_detail as $row=>$item)
            <tr>
                <td>{{$row + 1 }}</td>
                <td>{{ $item->item->name}}</td>
                <td class="text-right">{{$item->qty}}</td>
                <td class="text-right">{{$item->sub_total}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" class="text-right">Total</td>
                <td class="text-right">{{$purchase->total}}</td>
            </tr>
        </table>
    </div>
</div>


                    
                   
                    
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
