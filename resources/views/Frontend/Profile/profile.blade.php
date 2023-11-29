@extends('Frontend.Layouts.app')
@section('content')	

            <div class="product_pay action">
                <div class=" product_indexing">
                    <ul class=" product_indexing_list">
                        <li class=" product_indexing_list-item-home">
                            <a href="#">
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                        <i class="fa-solid fa-angle-right"></i>
                        <li class=" text_greencolor">
                            <span>Thông tin cá nhân</span>
                        </li>

                    </ul>
                </div>
                <div>
                    <div class="product_pay_wrapper_2">
                        <div class="product_pay_wrapper_list-input3">
                            <div class="form-control">
                                	@if (Auth::user()->avatar != null)
                                        <img src="../Admin/imageuser/{{ Auth::user()->avatar }}" class="rounded-circle" width="90%" />
                                    @else
                                        <img src="{{ asset('Admin/assets/images/users/default_icon.jpg') }}" class="rounded-circle" width="100%" />
                                    @endif
                            </div>
                        </div>

                        <div class="product_pay_wrapper_list-input2">
                            <div class="pay_wrapper-title">
                                <p>Thông tin cá nhân</p>
                            </div>
                            	
                            	<div class="pay_wrapper-input_group">
		                                <!-- <input class="input_group input_name" style="width: 100%;" type="text"   placeholder="Họ và tên"> -->
		                                
		                                <div class="form-control">
	                                        <form method="POST" action="{{ route('user.verification.send') }}">
	                                            @csrf
	                                            	
	                                                @if(Auth::user()->email_verified_at == null)
	                                                <div class="btn_continue2">
		                                                <button >
		                                                    {{ __('Your email not verified yet') }}
		                                                </button>
	                                                </div>
	                                                @else
	                                                <div class="btn_continue3">
		                                                <button>
		                                                    {{ __('Your email is verified') }}
		                                                </button>
		                                            </div>    
	                                                @endif
	                                        </form>
                               	 		</div>
	                            	</div>

                           		<form  method="POST" action ="{{ route('user.update') }}" enctype="multipart/form-data">
                           			@csrf
		                            <div class="pay_wrapper-input_group">
		                                <!-- <input class="input_group input_name" style="width: 100%;" type="text"   placeholder="Họ và tên"> -->
		                                <div class="form-control">
		                                    <input class="input input-alt" placeholder="Tên" required type="text" value="{{ Auth::user()->name }}" name="name">
		                                    <span class="input-border input-border-alt"></span>
		                                </div>

		                                <div class="flex">
		                                    <div class="form-control " style="width:70%; margin-right: 10px;">
		                                        <input class="input input-alt" placeholder="Email" required type="email" value ="{{ Auth::user()->email }}" name="email">
		                                        <span class="input-border input-border-alt"></span>
		                                    </div>
		                                    <div class="form-control" style="width:70%">
		                                        <input class="input input-alt" placeholder="Số diện thoại"
		                                             value ="{{ Auth::user()->phone }}" name="phone">
		                                        <span class="input-border input-border-alt"></span>
		                                    </div>
		                                </div>

		                                <div class="form-control">
		                                    <input class="input input-alt" placeholder="Mật khẩu" type="password" name="pass" value="">
		                                    <span class="input-border input-border-alt"></span>
		                                </div>

		                                <div class="form-control">
		                                    <input class="input input-alt" placeholder="Địa chỉ" type="text" name="address" value="{{ Auth::user()->address }}">
		                                    <span class="input-border input-border-alt"></span>
		                                </div>

		                                <div class="form-control">
		                                    <input class="input input-alt" placeholder=""  type="file" name="filesTest">
		                                    <span class="input-border input-border-alt"></span>
		                                </div>

	                            	</div>

		                            <div class="btn_continue">
		                                <button class="btn_continue" type="submit">Cập nhật</button>
		                            </div>
	                          </form>
                        </div>
                    </div>
                </div>
            </div>

<!-- <script type="text/javascript">

	$("button.btn_continue").click(function(){

         	var success = {{session('success')}}

         	var errors = {{$errors->any()}}

         	if(success){
         		alertify.success('Cập nhật thành công');
         	}

         	if(errors){
         		alertify.error('Cập nhật thất bại');
         	}           
        });
</script> -->
@endsection