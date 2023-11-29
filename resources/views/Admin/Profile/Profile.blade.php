@extends('Admin.Layouts.Dcontent')
@section('content')

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Profile</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin_index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">

                                <center class="m-t-30">
                                    @if (Auth::user()->avatar != null)
                                        <img src="../Admin/imageuser/{{ Auth::user()->avatar }}" class="rounded-circle" width="150" />
                                    @else
                                        <img src="{{ asset('Admin/assets/images/users/default_icon.jpg') }}" class="rounded-circle" width="150" />
                                    @endif
                                    

                                    <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                                    <h6 class="card-subtitle">DAI HOC SU PHAM KY THUAT</h6>
                                    <!-- <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div> -->
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>{{ Auth::user()->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{ Auth::user()->phone }}</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>{{ Auth::user()->address }}</h6>
                                <!-- <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/> -->
                                <button class="btn btn-circle btn-secondary"><i class="mdi mdi-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="mdi mdi-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="mdi mdi-youtube-play"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
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

                                @if (session('status') == 'verification-link-sent')
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label class="col-md-12">Verification Email</label>
                                        <form method="POST" action="{{ route('verification.send') }}">
                                            @csrf
                                            <div class="col-md-12">
                                                @if(Auth::user()->email_verified_at == null)
                                                <x-button class="btn btn-danger">
                                                    {{ __('Your email not verified yet') }}
                                                </x-button>
                                                @else
                                                <x-button class="btn btn-success">
                                                    {{ __('Your email is verified') }}
                                                </x-button>    
                                                @endif
                                            </div>
                                        </form>
                                </div>
                                
                                <form class="form-horizontal form-material" method="POST" action ="{{ route('upload.handle') }}" enctype="multipart/form-data">
                                    <div class="form-group">
                                        
                                        @csrf
                                        <p style="display: none;">{{ Auth::user()->id }}</p>
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ Auth::user()->name }}" class="form-control form-control-line"  name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value ="{{ Auth::user()->email }}" class="form-control form-control-line" name="email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="" class="form-control form-control-line" name="pass">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" value ="{{ Auth::user()->phone }}" class="form-control form-control-line" name="phone">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Avatar</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" name="filesTest" enctype="multipart/form-data">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text-are" value ="{{ Auth::user()->address }}" class="form-control form-control-line" name="address">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>

                                
                        </div>
                    </div>
                </div>       
        </div>
@endsection