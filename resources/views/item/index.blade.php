@extends('kategori.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA ITEM</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('item.create') }}"> Insert Data</a>
            </div>
        </div>
    </div>
    <form class="form-inline" action="{{ route('item.index') }}" method="GET">
        <div class="input-group">
            <input type="search" class="form-control mr-sm-2" name="search"  aria-label="Search" placeholder="Search Kategori...">
	        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
        </div><p>
    </form>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
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
        @foreach ($item as $itm)
        <tr>
            <td>{{ $itm ->id}}</td>
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