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
            DreaMarket 
        </h2>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                 
                <div class="row" style="padding-left: 20px">

                    <!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $sale->id !!}</p>
</div>

<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{!! $sale->customer_id !!}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{!! $sale->total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $sale->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $sale->updated_at !!}</p>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <h4>{{ config('app.name') }}</h4>
        <address>
            <p>Jl. Soekarno Hatta </p>
            <p>MALANG</p>
            <p>65141</p>
        </address>
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Sale</h4>
        <p>{{\Carbon\Carbon::parse($sale->created_at)->format('d-M-Y')}}</p>
        <p>ID : {{$sale->id}} </p>
        
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Customer</h4>
        <p>{{$sale->customer->name}}</p>
        <p>Alamat : {{$sale->customer->address}}</p>
        <p>Telp : {{$sale->customer->phone}}</p>
        <p>Email :{{$sale->customer->email}}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-sm-10">
        <h3>Detail sale</h3>
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Nama</th>
                <th class="col-md-2">Qty</th>
                <th class="col-md-2">Sub Total</th>
            </tr>
            @foreach ($sale->sale_detail as $row=>$item)
            <tr>
                <td>{{$row + 1 }}</td>
                <td>{{ $item->item->name}}</td>
                <td class="text-right">{{$item->qty}}</td>
                <td class="text-right">{{$item->sub_total}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" class="text-right">Total</td>
                <td class="text-right">{{$sale->total}}</td>
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
