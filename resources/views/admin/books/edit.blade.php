@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Buku</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Buku</li>
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
                                <a href="{{ route('books.index') }}" class="btn btn-success btn-sm">Kembali</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('books.store') }}" method="post">
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $books->id }}">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">title</label>
                                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title" required value="{{ old('title', $books->title) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">isbn</label>
                                            <input type="text" name="isbn" class="form-control" id="exampleFormControlInput1" placeholder="nomor isbn" required value="{{ old('isbn', $books->isbn) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Deskripsi</label>
                                            <input type="text" name="deskripsi" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Deskripsi" required value="{{ old('deskripsi', $books->deskripsi) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">penulis</label>
                                            <input type="text" name="penulis" class="form-control" id="exampleFormControlInput1" placeholder="penulis" required value="{{ old('penulis', $books->penulis) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">penerbit</label>
                                            <input type="text" name="penerbit" class="form-control" id="exampleFormControlInput1" placeholder="penerbit" required value="{{ old('penerbit', $books->penerbit) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">cover_img</label>
                                            <input type="text" name="cover_img" class="form-control" id="exampleFormControlInput1" placeholder="cover_img" required value="{{ old('cover_img', $books->cover_img) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Genre</label>
                                            <select class="custom-select" name="genres_id">
                                                <option value="" disabled selected>Pilih Genre</option>
                                                @foreach ($genres as $genre)
                                                <option value="{{ $genre->id }}" {{ $genre->id == $books->genres_id ? 'selected' : '' }}>
                                                    {{ $genre->name }}
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