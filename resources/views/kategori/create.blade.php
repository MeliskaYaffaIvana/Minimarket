@extends('layouts.app')

@section('content')
<div class="media-body">
        <div class="module">
            <div class="module-head">
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
        <div class="module-body">
            <div class="form-group">
                <label for="nama_kategori">kategori</label>
                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" aria-describedby="nama_kategori" placeholder="Nama">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('kategori.index') }}" class="btn btn-default">Cancel</a>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection