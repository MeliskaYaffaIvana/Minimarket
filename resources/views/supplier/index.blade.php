@extends('layouts.app')

@section('content')
    <div class="media-body">
        <div class="module">
            <div class="module-head">
                <h3>DATA SUPPLIER</h3>
            </div>
                <div class="module-body">
                    <div class="full-right">
                        <a class="btn btn-primary pull-right" href="{{ route('supplier.create') }}"> Insert Data</a>
                    </div>
                        <form class="form-inline" action="{{ route('supplier.index') }}" method="GET">
                            <div class="input-group">
                            <input type="search" class="form-control mr-sm-2" name="search"  aria-label="Search" placeholder="Search supplier...">
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
            <th>Perusahaan</th>
            <th>Handphone</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Negara</th>
            <th>Kode Pos</th>
            <th>Fax</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($supplier as $supplier)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $supplier ->nama_perusahaan }}</td>
            <td>{{ $supplier ->no_phone }}</td>
            <td>{{ $supplier ->alamat }}</td>
            <td>{{ $supplier ->Kota }}</td>
            <td>{{ $supplier ->provinsi}}</td>
            <td>{{ $supplier ->negara}}</td>
            <td>{{ $supplier ->kode_pos }}</td>
            <td>{{ $supplier ->fax }}</td>
            <td>{{ $supplier ->email }}</td>
            <td>
            <form action="{{ route('supplier.destroy',['supplier'=>$supplier->id]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('supplier.show',$supplier->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('supplier.edit',$supplier->id) }}">Edit</a>
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
