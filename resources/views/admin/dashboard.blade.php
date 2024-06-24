@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <x-box caption="New Orders" total="150" bg="bg-info" icon="ion-bag" url="#"/>
                        <x-box caption="Bounce Rate" total="53%" bg="bg-success" icon="ion-stats-bars" url="#"/>
                        <x-box caption="User Registrations" total="44" bg="bg-warning" icon="ion-person-add" url="#"/>
                        <x-box caption="Unique Visitors" total="65" bg="bg-danger" icon="ion-pie-graph" url="#"/>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
@endsection