@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Task</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Task</li>
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
                                <a href="{{ route('tasks.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $tasks->id }}">
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4">Nama</label>
                                        <input type="text" value="{{ $tasks->name }}" name="name" id="name" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4">Email</label>
                                        <input type="email" value="{{ $tasks->email }}" name="email" id="email" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nim" class="col-md-4">NIM</label>
                                        <input type="number" value="{{ $tasks->nim }}" name="nim" id="nim" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rombel" class="col-md-4">Class</label>
                                        <input type="text" value="{{ $tasks->rombel }}" name="rombel" id="rombel" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dokumen" class="col-md-4">Dokumen</label>
                                        <input type="file" class="col-md-4" name="dokumen">
                                        <small class="mt-1">Current Document: <a href="{{ asset('dokumen/' . $tasks->dokumen) }}">{{ $tasks->dokumen }}</a></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-md-4">Keterangan</label>
                                        <input type="text" value="{{ $tasks->keterangan }}" name="keterangan" id="keterangan" class="form-control col-md-8" required>
                                    </div>
                                    <div class="d-flex" style="margin-left: 345px;">
                                        <input type="submit" value="Edit" class="btn btn-primary pl-3 pr-3">
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