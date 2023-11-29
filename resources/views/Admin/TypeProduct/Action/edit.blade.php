@extends('Admin.Layouts.Dcontent')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Edit Type Product</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Type Product</li>
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
                <!-- Row -->
                <div class="row">
                    
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <form class="form-horizontal form-material" method="POST" action ="#" >
                                    <div class="form-group">
                                        
                                        @csrf
                                        @foreach($data as $row)
                                        <label class="col-md-12">Edit Name Type</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{$row->nameType}}" class="form-control form-control-line"  name="nameType">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        
                                            <label class="col-md-12">Edit Unit Calculation</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{$row->unitCal}}" class="form-control form-control-line"  name="unitCal">
                                            </div>
                                        </div>

                                        @endforeach
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
@endsection