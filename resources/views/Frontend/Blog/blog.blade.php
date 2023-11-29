@extends('Frontend.Layouts.app')
@section('content')
<!-- trang tin tuc -->
            <div class="content_trangtintuc tab_page action">
                <div class="flex">
                    <div class="content_trangtintuc-left">
                        <div class=" product_indexing">
                            <ul class=" product_indexing_list">
                                <li class=" product_indexing_list-item-home">
                                    <a href="#">
                                        <span>Trang Chủ</span>
                                    </a>
                                </li>
                                <i class="fa-solid fa-angle-right"></i>
                                <li class=" text_greencolor">
                                    <span>Tin tức</span>
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

                        <div class=" boder_nav_left margin_top">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>TAGS</span>
                                </h2>
                            </div>
                            <div class="nav__category-tags">
                                <p>Hiện chưa có tag nào, vui lòng thêm tag cho sản phẩm và thiết lập trong Thiết lập
                                    giao diện -> Trang tin tức</p>
                            </div>

                        </div>
                        <div class=" page_news boder_nav_left margin_top">
                            <div class="nav__category-head">
                                <h2 class="nav__category-title">
                                    <span>TIN MỚI NHẤT</span>
                                </h2>
                            </div>
                            <div class="page_news-list scroll_bar_select">
                            	@foreach($getnewBlogs as $row)
                            	<?php $img = json_decode($row['image'], true); ?>
                                <div class="page_news-list-item flex">
                                    <a href="">
                                        <img src="{{ asset('upload/blog/'.$img[0]) }}"
                                            alt="">
                                    </a>
                                    <div class="page_news-list-item-dicription">
                                        <h3>
                                            <a  href="{{ url('user/blog/'.$row->id) }}">{{$row->title}} </a>
                                        </h3>

                                        <div class="page_news-list-item-post-time">{{substr($row->created_at,0 , 10)}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                    </div>

                    <div class="content_trangtintuc-right">
                        <div class="content_trangtintuc-right-header flex">
                            <p>Tin tức</p>
                            <span>Có tất cả {{count($getBlogs)}} bài viết </span>
                        </div>
                        <div class="content_trangtintuc-contais_list">
                            <!-- ve boder -->
                            @foreach($getBlogs as $row)
                            <?php $img = json_decode($row['image'], true); ?>
                            <div class="contais_news-item">
                                <div class="contais_news-list-item-child flex">
                                    <a href="">
                                        <img src="{{ asset('upload/blog/'.$img[0]) }}"
                                            alt="">
                                    </a>
                                    <div  class="contais_news-list-item-description">
                                        <h3><a href="{{ url('user/blog/'.$row->id) }}">{{$row->title}}</a></h3>
                                        <p>{{substr($row->created_at,0 , 10)}}</p>
                                        <span>{{substr($row->description,0 , 788)}}</span>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                        <!-- <div class=" flex btnnextpage">
                            <button class="btn_page1" id="">
                                1
                            </button>
                            <button class="btn_page2" id="">
                                2
                            </button>
                            <button class="btn_pages" id="">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
@endsection