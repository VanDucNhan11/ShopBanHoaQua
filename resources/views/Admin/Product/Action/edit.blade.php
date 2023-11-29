@extends('Admin.Layouts.Dcontent')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Edit Product</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                                
                                <form class="form-horizontal form-material" method="POST" action ="" enctype="multipart/form-data">
                                    @csrf
                                    @foreach($data as $row)
                                    <div class="form-group">  
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$row->name}}" class="form-control form-control-line"  name="name">
                                        </div>
                                    </div>

                                    <div class="form-group">  
                                        <label class="col-md-12">Quantity</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$row->quantity}}" class="form-control form-control-line"  name="quantity">
                                        </div>
                                    </div>

                                    <div class="form-group">  
                                        <label class="col-md-12">Price</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$row->price}}" class="form-control form-control-line"  name="price">
                                        </div>
                                    </div>
                                        
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea rows="7" value="" name="description" class="form-control form-control-line" >{{$row->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Select Type Product</label>
                                        <div class="col-sm-12">

                                            <select class="form-control form-control-line" name="type">
                                                @foreach($dataType as $row2)
                                                    @if($row2->id == $row->idType)
                                                    <option value="{{$row2->id}}" selected="selected">{{$row2->nameType}}</option>
                                                    @else
                                                    <option value="{{$row2->id}}">{{$row2->nameType}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Image</label>
                                        <div class="col-md-12">
                                            <input type="file" value ="" multiple class="form-control form-control-line" name="filename[]" id="example-email">
                                        </div>


                                    </div>
                                    
                                        <?php $img = json_decode($row['image'], true); ?>
                                    
                                        @foreach($img as $row3)
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="custom-control custom-checkbox"> 
                                                        <input type="checkbox" id="vehicle1" name="checkimg[]" value="<?php echo $row3 ?>">
                                                        <img for="checkimg" src="{{ asset('upload/product/'.'3'.$row3) }}"> 
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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

                   

 

                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
        </div>
@endsection
