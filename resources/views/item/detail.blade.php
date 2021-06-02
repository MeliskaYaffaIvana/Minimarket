@extends('layouts.app')

@section('content')

<div class="media-body">
        <div class="module">
            <div class="module-head">
            Item Detail
            </div>
            <div class="card-body">
            <div class="module-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No : </b>{{$item->id}}</li></p>
                    <li class="list-group-item"><b>Nama item : </b>{{$item->nama_item}}</li></p>
                    <li class="list-group-item"><b>Merk item : </b>{{$item->merk_item}}</li></p>
                    <li class="list-group-item"><b>Kategori : </b>{{$item->kategori['nama_kategori']}}</li></p>
                    <li class="list-group-item"><b>Harga Jual : </b>{{$item->harga_jual}}</li></p>
                    <li class="list-group-item"><b>Satuan : </b>{{$item->satuan}}</li></p>
                    <li class="list-group-item"><b>Stock : </b>{{$item->stock}}</li></p>
                    <li class="list-group-item"><b>Image: </b>{{$item->item_image}}</li></p>
                </ul>
                <a class="btn btn-success mt-3" href="{{ route('item.index') }}">Back</a>
            </div>
            
        </div>
    </div>
</div>
@endsection