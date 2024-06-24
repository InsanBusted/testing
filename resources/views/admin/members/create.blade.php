@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Member</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Member</li>
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
                                <a href="{{ route('members.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
                                <form action="{{ route('members.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama</label>
                                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Member" required value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email Member" required value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Status Member</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status_aktif" value="A">
                                                <label class="form-check-label" for="status_aktif">Aktif</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status_tidak_aktif" value="N">
                                                <label class="form-check-label" for="status_tidak_aktif">Tidak Aktif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="alamat Member" required value="{{ old('alamat') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Member</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="L">
                                                <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="perempuan" value="P">
                                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                            </div>
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
