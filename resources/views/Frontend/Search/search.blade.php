@extends('Frontend.Layouts.app')
@section('content')
<!-- trang san pham -->
<div class="content_trangsanpham  tab_page action">
                <div class="flex">
                    <div class="content_trangsanpham-left">
                        <div class=" product_indexing">
                            <ul class=" product_indexing_list">
                                <li class=" product_indexing_list-item-home">
                                    <a href="#">
                                        <span>Trang Chủ</span>
                                    </a>
                                </li>
                                <i class="fa-solid fa-angle-right"></i>
                                <li class=" text_greencolor">
                                    <span>Tìm Kiếm</span>
                                </li>
                            </ul>
                        </div>
                        <div class="danhMuc boder_nav_left">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>DANH MỤC</span>
                                </h2>
                            </div>
                            <div class="nav__category-menu">
                                <div class="nav__category-menu-content">
                                    <ul class="nav__category-menu-list">
                                    	@foreach($getCategorys as $row)
                                        <li class="nav__category-menu-item  ">
                                            <i class="fa fa-arrow-circle-right nav__category-menu-item-icon "></i>
                                            <a href="" class=" nav__category-menu-item-link ">{{$row->nameCate}}</a>
                                            
                                        </li>
                                        @endforeach
                                        

                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="product_price boder_nav_left margin_top">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>GIÁ SẢN PHẨM</span>
                                </h2>
                            </div>
                            <div class="product_price-slideValue">
                                <div class="product_price-slideValue-input">
                                    <input class="range" type="range" min="10000" max="1000000" value="10000"
                                        onmousemove="rangeSlider(this.value)">
                                </div>

                            </div>
                            <div class="product_price_slider">
                                <div class="product_price_slider_star flex">
                                    <p class="product_price_slide
                                        r_min">100.000</p>
                                    <p class="product_price_slider-unit"><u>đ</u></p>
                                </div>
                                <div class="product_price_slider_stop flex">
                                    <p class="product_price_slider_max">500.000</p>
                                    <p class="product_price_slider-unit"><u>đ</u></p>
                                </div>

                            </div>
                            <div class="product_price_slider-button">
                                <button>Lọc giá</button>
                            </div>
                        </div>

                        <div class="product_color boder_nav_left margin_top">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>MÀU SẮC</span>
                                </h2>
                            </div>
                            <div class="product_color-checkbox">
                                <div class="product_color-checkboxItem product_color-yellow">
                                    <input type="checkbox" name="" class="checkbox_list">
                                </div>
                                <div class="product_color-checkboxItem product_color-red">
                                    <input type="checkbox" name="" class="checkbox_list">
                                </div>
                                <div class="product_color-checkboxItem product_color-white">
                                    <input type="checkbox" name="" class="checkbox_list">
                                </div>
                                <div class="product_color-checkboxItem product_color-orange">
                                    <input type="checkbox" name="" class="checkbox_list">
                                </div>
                                <div class="product_color-checkboxItem product_color-brown">
                                    <input type="checkbox" name="" class="checkbox_list">
                                </div>
                                <div class="product_color-checkboxItem product_color-pink">
                                    <input type="checkbox" name="" class="checkbox_list">
                                </div>
                            </div>
                        </div>
                        <div class="  boder_nav_left margin_top">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>LOẠI</span>
                                </h2>
                            </div>
                            <div class="product_choose_type-select">
                                <form class="product_choose_type-select-form">
                                    <button>
                                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            role="img" aria-labelledby="search">
                                            <path
                                                d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                                stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <input class="product_choose_type-select-input" placeholder="Type your text"
                                        required="" type="text">
                                    <button class="reset" type="reset">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                            <div class="product_choose_type-checkbox">
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox1" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox1">Hoa quả
                                        tươi</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox2" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox2">Thực phẩm
                                        sạch</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox3" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox3">Thịt nhập
                                        khẩu</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox4" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox4">Thịt heo
                                        sạch</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox4" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox4">Thủy - Hải
                                        sản</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox4" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox4">Hải sản tươi
                                        sống</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox4" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox4">Hải sản đông
                                        lạnh</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox4" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox4">Rau sạch</label>
                                </div>
                            </div>
                        </div>
                        <div class=" boder_nav_left margin_top ">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>THƯƠNG HIỆU</span>
                                </h2>
                            </div>
                            <div class="product_choose_type-select">
                                <form class="product_choose_type-select-form">
                                    <button>
                                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            role="img" aria-labelledby="search">
                                            <path
                                                d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                                stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <input class="product_choose_type-select-input" placeholder="Type your text"
                                        required="" type="text">
                                    <button class="reset" type="reset">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                            <div class="product_choose_type-checkbox scroll_bar_select">
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox1" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox1">BNAFOODS Việt Nam
                                    </label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox2" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark"
                                        for="checkbox2">CleverFood</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox3" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox3">Công ty TNHH Thực
                                        Phẩm Hoàng Đông</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox4" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox4">Sói Biển - Hải
                                        sản cao cấp</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox5" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox5"> Trái cây nhập
                                        khẩu VinFruits</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox6" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox6">Klever
                                        Fruits</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox7" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox7">GreenSpace
                                        Store</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox8" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox8">Tập đoàn thủy sản
                                        Minh Phú</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox8" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox8">Công ty TNHH Uni
                                        – President Việt Nam</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox8" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox8">Công ty TNHH
                                        Grobest Industrial Việt Nam</label>
                                </div>

                            </div>
                        </div>
                        <div class="  boder_nav_left margin_top">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>KÍCH THƯỚC</span>
                                </h2>
                            </div>
                            <div class="product_choose_type-select">
                                <form class="product_choose_type-select-form">
                                    <button>
                                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            role="img" aria-labelledby="search">
                                            <path
                                                d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                                stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <input class="product_choose_type-select-input" placeholder="Type your text"
                                        required="" type="text">
                                    <button class="reset" type="reset">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                            <div class="product_choose_type-checkbox">
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox9" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox9">Lớn</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox10" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox10">Nhỏ</label>
                                </div>
                                <div class="product_choose_type_value">
                                    <input type="checkbox" name="" id="checkbox11" class="product_choose_type_input">
                                    <label class="product_choose_type_value_checkmark" for="checkbox11">Vừa</label>
                                </div>


                            </div>
                        </div>
                        <div class="  boder_nav_left margin_top">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>SẢN PHẨM MỚI NHẤT</span>
                                </h2>
                            </div>
                            <div class="products_featured_list scroll_bar_select">
                            	@foreach($getnewProducts as $row2)
                            	<?php $img = json_decode($row2['image'], true); ?>
                                <div class="products_featured_list_item ">
                                    <div class="products_featured_list_item_children flex">
                                        <a href="" class="products_featured_list_item_img">
                                            <img src="{{ asset('upload/product/'.$img[0]) }}"
                                                alt="">
                                        </a>
                                        <div class="products_featured_list_item-text ">
                                            <div class="products_featured_list_item-name ">
                                                <a href="{{ url('user/product/'.$row2->id) }}">
                                                    <p>{{$row2->name}}</p>
                                                </a>

                                            </div>
                                            <div class="flex ">
                                                <span class="products_featured_list_item-prepare">{{$row2->price}}</span>
                                                <span class="products_featured_list_item-init"><u>đ</u></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="content_trangsanpham-right">
                        <div class="content_trangsanpham-header">
                            <div class="content_trangsanpham-header-text">

                                <div class="content_trangsanpham-header-title">
                                    <p>Tìm kiếm Sản Phẩm</p>
                                </div>
                                <div class="flex content_trangsanpham-header-select-arrange">
                                    <p>Sắp xếp:</p>
                                    <div class="flex content_trangsanpham-header-select-list">
                                        <p>Mặc định</p>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                    <!-- <div class="content_trangsanpham-select_menu"> -->
                                    <ul class="content_trangsanpham-select_menu-list">
                                        <li class="content_trangsanpham-select_menu-list-item">
                                            Mặc định
                                        </li>
                                        <li class="content_trangsanpham-select_menu-list-item">
                                            A
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                            Z
                                        </li>
                                        <li class="content_trangsanpham-select_menu-list-item">
                                            Z
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                            A
                                        </li>
                                        <li class="content_trangsanpham-select_menu-list-item">
                                            Giá tăng dần
                                        </li>
                                        <li class="content_trangsanpham-select_menu-list-item">
                                            Giá giảm dần
                                        </li>

                                    </ul>
                                    
                                </div>

                            </div>


                        </div>
                        <!-- trang con cua trang san pham -->
                        <div class="next_page_child_sanpham action">
                            <div class="content_trangsanpham-product  " id="search_here">
                                <div  class="container__select-box-list2">
                                    @foreach($getProducts as $row)
                                    
                                        <!-- <a href="product/{{$row->id}}" style="text-decoration: none;color:black;"> -->
                                            <div id="{{$row->id}}" class="container__select-box-list-item" >
                                            <?php $img = json_decode($row['image'], true); ?>
                                            <img src="  {{ asset('upload/blog/'.$img[0]) }}"
                                                title="{{$row->name}}" class="container__select-box-list-item-img">
                                            <p class="container__select-box-list-item-describe" >{{$row->name}}</p>
                                            <div class="flex b-center ">
                                                <p class="container__select-box-list-item-prepare">{{$row->price}}</p>
                                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                                            </div>
                                            <!-- <div class="Promotion">
                                                <p>- 13%</p>
                                            </div> -->
                                            <div class="container__select-cart">
                                                <button class="btn-container__select-cart-add add_cart">
                                                    <i class="fa-solid fa-cart-plus "></i>
                                                </button>
                                    
                                                
                                                <button class="btn-container__select-cart-add detail_product">
                                                    <a href="product/{{$row->id}}"><i class="fa-solid fa-eye "></i></a>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- </a> -->
                                        

                                	@endforeach
                                </div>
                                
                                
                                

                            </div>
                        </div>
                       

                        <!-- <div class=" flex btnnextpage">
                            <button class="btn_page_sanpham action " id="btn_page1">
                                1
                            </button>
                            <button class="btn_page_sanpham" id="btn_page2">
                                2
                            </button>
                            <button class="btn_page_sanpham" id="btn_pages">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
@endsection