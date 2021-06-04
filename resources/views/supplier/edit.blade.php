@extends('layouts.all')

@section('content')

<div class="media-body">
        <div class="module">
            <div class="module-head">
            Edit  Data
            </div>
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
            <form method="post" action="{{ route('supplier.update', $supplier->id) }}" encytype="multipart/form-data"id="myForm">
            @method('PUT')
            @csrf
            <div class="module-body">
            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" value="{{ $supplier->nama_perusahaan }}" aria-describedby="nama_perusahaan" >
            </div>
            <div class="form-group">
                <label for="no_phone">Handphone</label>
                <input type="text" name="no_phone" class="form-control" id="no_phone" value="{{ $supplier->no_phone }}" aria-describedby="no_phone" >
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $supplier->alamat }}"aria-describedby="alamat">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" name="kota" class="form-control" id="kota" value="{{ $supplier->kota }}" aria-describedby="kota" >
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" id="provinsi" value="{{ $supplier->provinsi }}" aria-describedby="provinsi" >
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" name="negara" class="form-control" id="negara" value="{{ $supplier->negara }}" aria-describedby="negara" >
            </div>
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="{{ $supplier->kode_pos }}" aria-describedby="kode_pos" >
            </div>
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" name="fax" class="form-control" id="fax" value="{{ $supplier->fax }}" aria-describedby="fax" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ $supplier->email}}" aria-describedby="email" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-default">Cancel</a>
            </form> 
            </div>
        </div>
    </div>
</div>
@endsection