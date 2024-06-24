@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Karyawan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Karyawan</li>
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
                                <a href="{{ route('employees.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('employees.store') }}" method="post">
                                    @csrf
                                        <label for="nama" class="col-md-4">Nama</label>
                                        <input type="hidden" name="id" value="{{ $employees->id }}">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Karyawan</label>
                                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Karyawan" required value="{{ old('nama', $employees->nama) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Domisili Alamat" required value="{{ old('alamat', $employees->alamat) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">No Handpohone</label>
                                            <input type="text" name="nohp" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Handphone/Whatsapp" required value="{{ old('nohp', $employees->nohp) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required value="{{ old('email', $employees->email) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jabatan</label>
                                            <select class="custom-select" name="position_id">
                                                <option value="" hidden selected>Pilih Jabatan</option>
                                                @foreach ($positions as $position)
                                                <option value="{{ $position->id }}" {{ $position->id == $employees->position_id ? 'selected' : '' }}>
                                                    {{ $position->nama }}
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