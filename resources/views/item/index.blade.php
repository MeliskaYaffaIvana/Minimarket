@extends('layouts.app')

@section('content')
<div class="media-body">
        <div class="module">
            <div class="module-head">
                <h3>DATA ITEM</h3>
            </div>
            <div class="module-body">
            <div class="float-right my-2">
                <a class="btn btn-success pull-right" href="{{ route('item.create') }}"> Insert Data</a>
            </div>
    <form class="form-inline" action="{{ route('item.index') }}" method="GET">
        <div class="input-group">
            <input type="search" class="form-control mr-sm-2" name="search"  aria-label="Search" placeholder="Search Kategori...">
	        <button class="btn " type="btn" ><i class="icon-search"></i></button>
        </div><p>
</div>
<div class="module-body">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
        <tr>
            <th>No</th>
            <th>Nama item</th>
            <th>Merk item</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Satuan</th>
            <th>Stock</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($item as $itm)
        <tr>
            <td>{{ $no++}}</td>
            <td>{{ $itm ->nama_item}}</td>
            <td>{{ $itm ->merk_item }}</td>
            <td>{{ $itm ->kategori['nama_kategori'] }}</td>
            <td>{{ $itm ->harga_jual }}</td>
            <td>{{ $itm ->satuan }}</td>
            <td>{{ $itm ->stock }}</td>
            <td><img width="50px" src="{{asset('storage/'.$itm->item_image)}}"></td>
            <td>
            <form action="{{ route('item.destroy',['item'=>$itm->id]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('item.show',$itm->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('item.edit',$itm->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> 
            </td>
        </tr>
        @endforeach
    </table>
    <div class = "d-flex">
    </div>
@endsection
