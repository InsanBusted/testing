@extends('admin.layout.app')

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
                                <form action="{{ route('employees.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama Karyawan</label>
                                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Karyawan" required value="{{ old('nama') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Domisili Alamat" required value="{{ old('alamat') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">No Handpohone</label>
                                        <input type="text" name="nohp" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Handphone/Whatsapp" required value="{{ old('nohp') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Jabatan</label>
                                        <select class="custom-select" name="position_id">
                                            @foreach ($positions as $position)
                                            <option value="" hidden>Pilih Jabatan</option>
                                            <option value="{{ $position->id }}" required>{{ $position->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a type="button" href="{{ url('/admin/karyawan') }}" class="btn btn-info">Kembali</a>
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
