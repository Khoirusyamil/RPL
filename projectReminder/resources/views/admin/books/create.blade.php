@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Jabatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Jabatan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <a href="{{ route('book.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('book.store') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4">Title</label>
                                        <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="isbn" class="col-md-4">ISBN</label>
                                        <input type="text" name="isbn" value="{{ old('isbn') }}" id="isbn" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-md-4">Deskripsi</label>
                                        <input type="text" name="deskripsi" value="{{ old('deskripsi') }}" id="deskripsi" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="penulis" class="col-md-4">Penulis</label>
                                        <input type="text" name="penulis" value="{{ old('penulis') }}" id="penulis" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="penerbit" class="col-md-4">Penerbit</label>
                                        <input type="text" name="penerbit" value="{{ old('penerbit') }}" id="penerbit" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="cover_img" class="col-md-4">Cover</label>
                                        <input type="text" name="cover_img" value="{{ old('cover_img') }}" id="cover_img" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="genres" class="col-md-4">Genre id</label>
                                        <select name="genres_id" class="form-control col-md-8">
                                            <option>--Pilih--</option>
                                            @foreach($list_genres as $genres)
                                            <option value="{{ $genres->id }}" {{ $books->genres_id==$genres->id ? 'selected': ''}}>
                                                {{ $genres->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="Tambah" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
