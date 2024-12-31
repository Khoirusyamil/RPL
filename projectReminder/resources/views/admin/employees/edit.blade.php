@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Employees</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Employees</li>
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
                                <a href="{{ route('employee.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('employee.store') }}" method="post">
                                    @csrf
                                    
                                    <div class="form-group row">
                                        <input type="hidden" name="id" value="{{ $employees->id }}">
                                        <label for="nama" class="col-md-4">Nama</label>
                                        <input type="text" value="{{ $employees->nama }}" name="nama" id="nama" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4">Email</label>
                                        <input type="email" name="email" value="{{ $employees->email }}" id="email" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nohp" class="col-md-4">No HP</label>
                                        <input type="number" name="nohp" value="{{ $employees->nohp }}" id="nohp" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-4">Alamat</label>
                                        <input type="text" name="alamat" value="{{ $employees->alamat }}" id="alamat" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="positions" class="col-md-4">Position id</label>
                                        <select name="positions_id" class="form-control col-md-8" required>
                                            <option>--Pilih--</option>
                                            @foreach($list_positions as $positions)
                                            <option value="{{ $positions->id }}" {{ $employees->positions_id==$positions->id ? 'selected': ''}}>
                                                {{ $positions->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="Edit" class="btn btn-primary">
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