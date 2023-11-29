<!-- HEADER -->
        <div class="header">
            <!-- ITEM 1 - CÓ ĐĂNG NHẬP ĐĂNG KÝ -->
            <div class="header_item1 ">
                <div class="grid">
                    <nav class="header__navbar">
                        <ul class="header__navbar--list">
                            <li class="header__navbar--item">
                                <i class="fa fa-phone "></i>
                                Hotline:
                            </li>
                            <li class="header__navbar--item text_bold distance">
                                <a href="callto:0365228025" class="header__navbar--item-link"> 0365228025</a>
                            </li>
                            <li class="header__navbar--item text_bold">
                                <i class="fa-solid fa-location-dot"></i>
                                Địa chỉ:
                            </li>
                            <li class="header__navbar--item">02 Thanh Sơn, Thanh Bình, Hải Châu, Đà Nẵng</li>
                        </ul>
                        <ul class="header__navbar--list">
                            @if(Auth::check())
                                <li class="header__navbar--item text_bold gesture">
                                    <i class="fa-solid fa-user"></i>
                                    <a href="{{ url('user/profile') }}" class="header__navbar--item-link">{{ Auth::user()->name }}</a>
                                </li>
                                <li class="header__navbar--item"></li>
                                <li class="header__navbar--item text_bold gesture" >
                                    <a style="text-decoration: none; color: white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('user_logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @else
                                <li class="header__navbar--item text_bold gesture">
                                <i class="fa-solid fa-user"></i>
                                <a href="{{url('user/login')}}" class="header__navbar--item-link">Đăng nhập</a>
                                </li>

                                <li class="header__navbar--item">hoặc</li>
                                <li class="header__navbar--item text_bold gesture" >
                                    <a href="{{url('user/register')}}" class="header__navbar--item-link">Đăng ký</a>
                                </li>
                            @endif
                        </ul>
                    </nav>

                </div>

            </div>

            <!-- ITEM 2 - CÓ GIỎ HÀNG -->
            <div class="header_item2">
                <div class="header_item2-content">

                    <div class="row">

                        <!-- LOGO -->
                        <div class="header__content-logo">
                            <img src="{{ asset('Frontend/assets/img/logo.png') }}">
                        </div>

                        <!-- LOGO 2  -->
                        <div class="header__content-center">
                            <div class="header__content-center-item">
                                <div class="header__content-img">
                                    <a href="#">
                                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/policy1.png?v=52"
                                            alt="">
                                    </a>
                                </div>
                                <div class="header__content-text">
                                    <h4>Miễn phí vận chuyển</h4>
                                    <p>Bán kính 100 km</p>
                                </div>
                            </div>
                            <div class="header__content-center-item">
                                <div class="header__content-img">
                                    <a href="#">
                                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/policy2.png?v=52"
                                            alt="">

                                    </a>
                                </div>
                                <div class="header__content-text">
                                    <h4>Hỗ trợ 24/7</h4>
                                    <p>Hotline:<b> 0365228025</b></p>
                                </div>
                            </div>
                            <div class="header__content-center-item">
                                <div class="header__content-img">
                                    <a href="#">

                                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/policy3.png?v=52"
                                            alt="">
                                    </a>
                                </div>
                                <div class="header__content-text">
                                    <h4>Giờ làm việc</h4>
                                    <p>T2 - T7 giờ hành chính</p>
                                </div>
                            </div>
                        </div>
                        

                        <!-- GIỎ HÀNG Ở ĐÂY -->
                        <div id="carthere" class="header__cart gesture ">
                            <i class="fa-solid fa-cart-shopping"></i>
                            @if(session('cart'))
                                <?php  
                                    $count = 0;
                                    foreach (session('cart') as $id => $details) {
                                        $count += $details['quantity'];
                                    }
                                ?>
                                <span class="label"> Giỏ hàng </span>
                                <span class="totalProduct">{{ $count }}</span>
                            @else
                                <span class="label"> Giỏ hàng </span>
                                <span class="totalProduct">0</span>
                            @endif

                            <div class="header__cart-list">

                                    <div>
                                        @if(session('cart'))
                                            <div  class="scroll_bar">
                                                @php $total = 0 @endphp
                                                
                                                @foreach(session('cart') as $id => $details)
                                                    @php 
                                                    $price = (int)$details['price'];
                                                    $total += $price * $details['quantity']; 
                                                    @endphp

                                                        <div class="header__cart-list-item">

                                                                <a href="#" class="header__cart-list-item-img">
                                                                    <img src="{{ asset('upload/product/'.$details['image']) }}">
                                                                </a>
                                                                
                                                                <div class="header__cart-list-item-text">
                                                                    <p class="header__cart-list-item-text-details hover">{{ $details['name'] }}</p>
                                                                    <div class="flex">
                                                                        <span class="header__cart-list-item-text-price">{{ $details['price'] }}</span>
                                                                        <span class="header__cart-list-item-text-unit"><u>đ</u></span>
                                                                    </div>
                                                                    <div class ="header__cart-list-select">
                                                                        <button class="header__cart-btn-reduce" data-id="{{$id}}">–</button>
                                                                        <input class="header__cart-list-select-input" type="number" value="{{ $details['quantity'] }}">
                                                                        <button class="header__cart-btn-increase" data-id="{{$id}}">+</button>
                                                                    </div>
                                                                </div>
                                                                <div class="header__cart-list-item-iconremove">
                                                                    <i class="deleteProduct fa-regular fa-trash-can " data-id="{{$id}}"></i>
                                                                </div>
                                                        </div>
                                                    @endforeach
                                                    
                                                    
                                            </div>

                                            <!-- TINH TIEN -->
                                            <div class="header__cart-list-prepare">
                                                <p class="header__cart-list-prepare-left">Tổng cộng:</p>
                                                <div class="flex">
                                                    @php 
                                                        $total = (string)$total;
                                                        echo substr($total, 1);
                                                        if(strlen($total) == 4){
                                                            $total = $total[0].'.'.substr($total, 1);
                                                        }

                                                    @endphp
                                                    <span  class="header__cart-list-prepare-right"><p>{{$total}}.000</p> </span>
                                                    <span class="header__cart-list-prepare-unit"><u>đ</u></span>
                                                </div>
                                            </div>
                                            @endif
                                    </div>
                                                                
                                <div class=" header__cart-list-price_btn">

                                    <form action="{{url('user/cart')}}" method="GET">
                                        <button type="submit" class="header__cart-list-btn page_cart">Giỏ hàng</button>
                                    </form>

                                    <form action="{{url('user/checkout')}}" method="GET">
                                        <button type="submit" class="header__cart-list-btn page_pay">Thanh toán</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!-- ITEM 3 - MENU -->
            <div class="header__menu " id="my_header">
                <div class="header__menu-hiddent">
                    <div class="header__hidden-list">
                        <ul class="menu_left">

                            <!-- HREF = ROUTE//HOME -->
                            <li class="menu__left-item menu_ngang ">
                                <a href="{{route('user_index')}}" class="menu__link">Trang chủ
                                    
                                </a>
                                
                            </li>

                            
                            <li class="menu__left-item menu_ngang">
                                <a href="{{route('user_product')}}" class="menu__link">Sản phẩm
                                    <i class="fa-solid fa-chevron-right menu__left-item-icon"></i>
                                </a>


                                <!-- <div class="mega__content">
                                    <ul class="menu__left-item-lv2">
                                        <li class="menu__left-item-lv3">
                                            <h2 class="menu__left-item-lv3-dad">
                                                <a href="#" class="menu__left-item-lv3-child">Rau củ</a>
                                            </h2>
                                            <ul class="menu__left-item-lv4">
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Rau củ sách</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Rau củ Đà Lạt</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Rau củ nhập khẩu</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Rau củ theo mùa</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu__left-item-lv3">

                                            <h2 class="menu__left-item-lv3-dad ">
                                                <a href="#" class="menu__left-item-lv3-child ">Hoa quả</a>
                                            </h2>

                                            <ul class="menu__left-item-lv4">
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Hoa quả Úc</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Hoa quả theo mùa</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Hoa quả Miền Nam</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Hoa quả nhập khẩu</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu__left-item-lv3">

                                            <h2 class="menu__left-item-lv3-dad ">
                                                <a href="#" class="menu__left-item-lv3-child ">Thịt</a>
                                            </h2>
                                            <ul class="menu__left-item-lv4">
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Thịt bò Mỹ</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Thịt bồ Việt</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Thịt heo sạch</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Thịt nhập khẩu</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu__left-item-lv3">
                                            <h2 class="menu__left-item-lv3-dad ">
                                                <a href="#" class="menu__left-item-lv3-child ">Hải sản</a>
                                            </h2>
                                            <ul class="menu__left-item-lv4">
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Tồm hùm Alaska</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Tồm hùm Canada</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">KingCrad</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Hải sản trong nước</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu__left-item-lv3">
                                            <h2 class="menu__left-item-lv3-dad ">
                                                <a href="#" class="menu__left-item-lv3-child ">Thủy sản</a>
                                            </h2>
                                            <ul class="menu__left-item-lv4">
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Cá trăm đen sông Đà</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Cá quả</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Tôm sông</a></li>
                                                <li class="menu__left-item-lv5"><a href="#"
                                                        class="menu__left-item-lv6">Tôm sú Nghệ an</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div> -->

                            </li>
                            <li class="menu__left-item menu_ngang">
                                <a href="{{route('user_blog')}}" class="menu__link">Tin tức</a>

                            </li>
                            <li class="menu__left-item menu_ngang">
                                <a href="#" class="menu__link">Hệ thống cửa hàng</a>
                            </li>
                            <li class="menu__left-item menu_ngang">
                                <a href="#" class="menu__link">Chính sách giao hàng</a>
                            </li>
                            <li class="menu__left-item menu_ngang">
                                <a href="#" class="menu__link">Chính sách đổi trả</a>
                            </li>

                        </ul>
                        <div class="menu__seach">
                            <form class="menu__seach-form">
                                <label class="label_search" for="search">
                                        
                                        
                                            <input oninput="findPr()" class="search_input" type="text"  placeholder="Tìm sản phẩm"
                                            id="search">
                                        
                                        


                                        <!-- SEARCH -->
                                        <script type="text/javascript">
                                            function findPr() {
                                                var input = document.getElementById('search').value

                                                console.log(input)
                                                $.ajaxSetup({
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    }
                                                });

                                                $.ajax({
                                                   type:'POST',
                                                   url:"{{url('/user/live_search')}}",
                                                   data:{
                                                        search: input,
                                                        },

                                                    success:function(html){
                                                        $('div#search_here').empty();
                                                        $('div#search_here').append(html);
                                                        // alertify.success('Đã thêm mới sản phẩm');
                                                   }
                                                }); 
                                            }

                                        </script>
                                    


                                    <div class="fancy-bg"></div>
                                    <div class="search">
                                        <svg viewBox="0 0 24 24" aria-hidden="true"
                                            class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                                            <g>
                                                <path
                                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                    
                                    <button class="close-btn" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

