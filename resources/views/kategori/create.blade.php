@extends('kategori.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Insert Kategori
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('kategori.store') }}" id="myForm">
        @csrf
            <div class="form-group">
                <label for="nama_kategori">kategori</label>
                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" aria-describedby="nama_kategori" >
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection