@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA KATEGORI</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('kategori.create') }}"> Insert Data</a>
            </div>
            <form class="form-inline" action="{{ route('kategori.index') }}" method="GET">
                <div class="input-group">
                    <input type="search" class="form-control mr-sm-2" name="search"  aria-label="Search" placeholder="Search Kategori...">
	                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
                </div><p>
            </form>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Tanggal Input</th>
            <th>Action</th>
        </tr>
        @foreach ($kategori as $ktg)
        <tr>
            <td>{{ $ktg ->id }}</td>
            <td>{{ $ktg ->nama_kategori }}</td>
            <td>{{ $ktg ->created_at}}</td>
            <td>
            <form action="{{ route('kategori.destroy',['kategori'=>$ktg->id]) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('kategori.edit',$ktg->id) }}">Edit</a>
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
