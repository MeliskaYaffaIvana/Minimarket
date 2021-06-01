@extends('item.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            item Detail
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No : </b>{{$item->id}}</li>
                    <li class="list-group-item"><b>Nama item : </b>{{$item->nama_item}}</li>
                    <li class="list-group-item"><b>Merk item : </b>{{$item->merk_item}}</li>
                    <li class="list-group-item"><b>Kategori : </b>{{$item->kategori['nama_kategori']}}</li>
                    <li class="list-group-item"><b>Harga Jual : </b>{{$item->harga_jual}}</li>
                    <li class="list-group-item"><b>Satuan : </b>{{$item->satuan}}</li>
                    <li class="list-group-item"><b>Stock : </b>{{$item->stock}}</li>
                    <li class="list-group-item"><b>Image: </b>{{$item->item_image}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('item.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection