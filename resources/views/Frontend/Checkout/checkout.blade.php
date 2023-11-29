@extends('Frontend.Layouts.app')
@section('content')	
<!-- Phần thanh toán -->
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
                            <span>Thanh toán</span>
                        </li>

                    </ul>
                </div>
                <div>
                    <div class="product_pay_wrapper">
                        <!-- thong tin thanh toan -->
                        <div class="product_pay_wrapper_list-input">
                            <div class="pay_wrapper-title">
                                <p>Thông tin cá nhân</p>
                            </div>
                            <div class="pay_wrapper-input_group">
                                <!-- <input class="input_group input_name" style="width: 100%;" type="text"   placeholder="Họ và tên"> -->
                                <div class="form-control">
                                    <input class="input input-alt" placeholder="Họ và tên" value="{{Auth::user()->name}}" type="text">
                                    <span class="input-border input-border-alt"></span>
                                </div>

                                <div class="flex">
                                    <div class="form-control " style="width:70%; margin-right: 10px;">
                                        <input class="input input-alt" placeholder="Email" value="{{Auth::user()->email}}" type="text">
                                        <span class="input-border input-border-alt"></span>
                                    </div>
                                    <div class="form-control" style="width:70%">
                                        <input class="input input-alt" placeholder="Số diện thoại" 
                                            type="text" value="{{Auth::user()->phone}}">
                                        <span class="input-border input-border-alt"></span>
                                    </div>
                                </div>
                                <div class="form-control">
                                    <input class="input input-alt" placeholder="Địa chỉ" value="{{Auth::user()->address}}"  type="text">
                                    <span class="input-border input-border-alt"></span>
                                </div>

                                <!-- <div class="flex">
                                    <div class="form_select_address" style="margin-right: 10px;">
                                        <select class="form_select_one" id="form_select_one">
                                            <option class="form_select-option" value="">Chọn tỉnh/ Thành phố</option>
                                            <option value="Thành phố Đà Nẵng">Thành phố Đà Nẵng</option>
                                        </select>
                                        <div class="address_form_dow">
                                            <i class="fa-sharp fa-solid fa-caret-down"></i>
                                        </div>

                                    </div>
                                    <div class="form_select_address">
                                        <select class="form_select_two" id="form_select_two">
                                            <option class="form_select-option" value="">Chon quận/ huyện</option>
                                            <option class="form_select-option" value="">Quận Hải Châu</option>
                                            <option class="form_select-option" value="">Quận Cảm Lệ</option>
                                            <option class="form_select-option" value="">Quận Thanh Khê</option>
                                            <option class="form_select-option" value="">Quận Liên chiều</option>
                                            <option class="form_select-option" value="">Quận Sơn trà</option>
                                        </select>
                                        <div class="address_form_dow">
                                            <i class="fa-sharp fa-solid fa-caret-down"></i>
                                        </div>

                                    </div>
                                </div> -->

                            </div>

                            <div class="pay_section_title">
                                <p>Phương thức thanh toán</p>
                            </div>

                            <!-- <div class="pay_section_radio">
                                <input type="radio" checked>
                                <img src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=4"
                                    alt="">
                                <p>Thanh toán khi nhận hàng (COD)</p>
                            </div> -->

                            <div class="pay_section_radio">
                                <input type="radio" checked>
                                <img src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=4"
                                    alt="">
                                <p>Thanh toán bằng VNPAY</p>
                            </div>

                            

                        </div>


                        <!-- san pham da dat -->
                        <div class="product_pay_wrapper-product">
                            @if(session('cart'))
                                <div class="pay_wrapper-product-content">
                                    
                                    @php $total = 0 @endphp
                                    @foreach(session('cart') as $id => $details)
                                        @php 
                                        $price = (int)$details['price'];
                                        $total += $price * $details['quantity']; 
                                        @endphp
                                    <div class="pay_wrapper-product_list">

                                        <div class="pay_wrapper-product_item">
                                            <img src="{{ asset('upload/product/'.$details['image']) }}"
                                                alt="">
                                            <p>{{ $details['name'] }}</p>
                                        </div>
                                        <div class="pay_wrapper-product_price">
                                            <input type="number" min="1" value="{{ $details['quantity'] }}">
                                            <p>{{ $details['price'] }}</p>
                                            <span class="header__cart-list-item-text-unit" style="color: #333;"><u>đ</u>
                                                </sapn>
                                        </div>
                                    </div>

                                    @endforeach
                                    

                                </div>

                                <!-- <div class=" product_pay_wrapper-code-free ">
                                    <div class="form-control ">
                                        <input class="input input-alt" placeholder="Mã giảm giá" required="" type="text">
                                        <span class="input-border input-border-alt"></span>
                                    </div>
                                    <div class="btn_continue">
                                        <button>Sử dụng</button>
                                    </div>
                                </div> -->

                                <div class="total-line-border-bottom">
                                    <div class="total-line total-line-subtotal">
                                        <p class="total-line-subtotal-name">Tạm tinh</p>
                                        <div class="total-line-subtotal-price">
                                            @php 
                                                $total2 = (string)$total;
                                                
                                                if(strlen($total2) == 4){
                                                    $total2 = $total2[0].'.'.substr($total2, 1);
                                                }
                                            @endphp
                                            <p>{{$total2}}.000</p>
                                            <span class="header__cart-list-item-text-unit" style="color: #333;"><u>đ</u>
                                                </sapn>
                                        </div>
                                    </div>
                                    <div class="total-line total-line-shipping">
                                        <p>Phí vẫn chuyển</p>
                                        <p>Miển phí</p>
                                    </div>
                                </div>
                                <div class="total-line-footer">
                                    <p>Tổng cộng</p>
                                    
                                    <div class="total-line-footer-pay">
                                        <p class="total-line-footer-unit">VND</p>
                                        <p class="total-line-footer-price">{{$total2}}.000</p>
                                        <span class="header__cart-list-item-text-unit" style="color: #333;"><u>đ</u></sapn>
                                    </div>
                                </div>
                            @endif
                                <form action="{{url('/user/vnpay_payment')}}" method="POST">
                                    @csrf
                                    <div class="btn_continue">
                                        <input hidden type="text" name="total" value="{{$total}}">
                                        <button type="submit" name="redirect">Thanh toán</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection