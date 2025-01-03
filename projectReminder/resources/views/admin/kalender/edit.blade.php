@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Kalender</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kalender</li>
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
                                <a href="{{ route('kalenders.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('kalenders.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $kalenders->id }}">
                                    <div class="form-group row">
                                        <label for="title" class="col-md-4">Title</label>
                                        <input type="text" value="{{ $kalenders->title }}" name="title" id="title" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="start_date" class="col-md-4">Start Date</label>
                                        <input type="date" value="{{ $kalenders->start_date }}" name="start_date" id="start_date" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="end_date" class="col-md-4">End Date</label>
                                        <input type="date" value="{{ $kalenders->end_date }}" name="end_date" id="end_date" class="form-control col-md-8" required>
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