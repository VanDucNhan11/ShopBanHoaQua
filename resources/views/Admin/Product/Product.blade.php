@extends('Admin.Layouts.Dcontent')
@section('content')


<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Product</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                <h4><i class="icon fa fa-check"></i>Thông báo</h4>
                                {{session('success')}}
                                </div>
                                @endif

                                @if($errors->any())
                                <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                <h4><i class="icon fa fa-check"></i> Thông báo!<in4>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li> {{$error}}</i>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Id Type</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Unit Calculation</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        

                                        @foreach($data as $row)
                                        <tr>
                                            <th scope="row">{{$row->id}}</th>
                                            <td>{{$row->name}}</td>
                                            <?php $img = json_decode($row['image'], true); ?>
                                            <td> <img src="{{ asset('upload/product/'.$img[0]) }}" width="150" /> </td>
                                            <td>{{$row->idType}}</td>
                                            <td>{{$row->quantity}}</td>
                                            <td>{{$row->unitCal}}</td>
                                            <td>{{$row->price}} vnd</td>
                                            <td>{{$row->description}}</td>

                                            <td>
                                                <a href="{{ url('admin/product/edit/'.$row->id) }}">Edit</a>
                                                <a href="{{ url('admin/product/delete/'.$row->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <form action="product/add">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Add Product</button>
                        </div>
                    </form>          
                </div>
            </div>
            
            
@endsection