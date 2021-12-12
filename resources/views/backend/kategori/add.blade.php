@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
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
                {{-- content table --}}
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Tambah User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('kategori-store')}}" method="POST">
                            @csrf
                          <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Name">
                                <span class="text-danger">{{$errors->first('name')}}</span>
                              </div>
                           
                            {{-- <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
                              <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select id="jk" name="jk" class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--></option>
                                    <option value="L" @if (old('jk') == 'L') selected="selected" @endif>Laki-laki</option>
                                    <option value="P" @if (old('jk') == 'P') selected="selected" @endif>Perempuan</option>
                                </select>
                                <span class="text-danger">{{$errors->first('jk')}}</span>
                              </div>
                              <div class="form-group">
                                <label for="level">Level</label>
                                <select id="level" name="level" class="form-control">
                                    <option value="">--Pilih Level--></option>
                                    <option value="1" @if (old('level') == '1') selected="selected" @endif>Admin</option>
                                    <option value="2" @if (old('level') == '2') selected="selected" @endif>Kasir</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="no_telp">No. HP</label>
                                <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{old('no_telp')}}" placeholder="Enter No. HP">
                              </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Password">
                            </div> --}}
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
            </div>
            </div>
        </div>
        
    </section>

@endsection