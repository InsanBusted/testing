@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Books</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Books</li>
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
                                <form action="{{ route('books.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Title</label>
                                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title" required value="{{ old('title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">isbn</label>
                                        <input type="text" name="isbn" class="form-control" id="exampleFormControlInput1" placeholder="isbn" required value="{{ old('isbn') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Deskripsi</label>
                                        <input type="textarea" name="deskripsi" class="form-control" id="exampleFormControlInput1" placeholder="Deskripsi Buku" required value="{{ old('deskripsi') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Penulis</label>
                                        <input type="text" name="penulis" class="form-control" id="exampleFormControlInput1" placeholder="nama penulis" required value="{{ old('penulis') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Penerbit</label>
                                        <input type="text" name="penerbit" class="form-control" id="exampleFormControlInput1" placeholder="nama penerbit" required value="{{ old('penerbit') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">cover_img</label>
                                        <input type="textarea" name="cover_img" class="form-control" id="exampleFormControlInput1"  required value="{{ old('cover_img') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Genre</label>
                                        <select class="custom-select" name="genres_id">
                                            @foreach ($genres as $genre)
                                            <option value="" hidden>Pilih Genre</option>
                                            <option value="{{ $genre->id }}" required>{{ $genre->name }}</option>
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
