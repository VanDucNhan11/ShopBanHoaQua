@extends('Frontend.Layouts.app')
@section('content')

            <!-- next_page -->
            <!-- trang chu -->


            <div class="content_trangchu  tab_page next_page ">
                <div class="container">

                    @include('Frontend.Layouts.sidebar')

                    <div class="container-right">
                        <div class="slider-wrapper">
                            <div class="slider">
                                <div class="slider-item-img">
                                    <a href=""><img class="nav__category-img"
                                            src="https://phunuvietnam.mediacdn.vn/media/news/f57e9defd1303332611ab2ca1994500d/thuc-pham-huu-co-5.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="slider-item-img">
                                    <a href=""><img class="nav__category-img"
                                            src=" https://nhansamviethan.com/wp-content/uploads/2021/08/nhansamviethan.com-san-pham-huu-co-co-that-su-tot-cho-suc-khoe-khong.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="slider-item-img">
                                    <a href=""><img class="nav__category-img"
                                            src="https://cdn.tgdd.vn/2020/08/CookProduct/58-1200x676-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="slider-item-img">
                                    <a href=""><img class="nav__category-img"
                                            src="https://nld.mediacdn.vn/2019/2/24/organic-uc-15510161214051173240099.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="slider-item-img">
                                    <a href=""><img class="nav__category-img"
                                            src="https://suckhoedoisong.qltns.mediacdn.vn/Images/nguyenkhanh/2016/08/01/Univadis_31.7.2016_Loi_ich_cua_viec_su_dung_thuc_pham_huu_co.jpg"
                                            alt="">
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="container-right-back-slide">
                            <button class="container-right-slide-btn btn-slider-left">
                                <i class="fa-solid fa-angle-left"></i>
                            </button>

                            <button class="container-right-slide-btn btn-slider-right">
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="container__img">
                    <div class="container__img-item">
                        <a href="#">

                            <img src="https://theme.hstatic.net/1000324420/1000664192/14/banner1.jpg?v=52" alt="">
                        </a>
                    </div>
                    <div class="container__img-item">
                        <a href="">

                            <img src="https://theme.hstatic.net/1000324420/1000664192/14/banner2.jpg?v=52" alt="">
                        </a>
                    </div>
                    <div class="container__img-item">
                        <a href="">

                            <img src="https://theme.hstatic.net/1000324420/1000664192/14/banner3.jpg?v=52" alt="">
                        </a>
                    </div>
                </div>

                <div class="select_one">
                    <div class="container__select-title margin_top">
                        <div class="container__select-title-haeder">
                            <h2>Sản Phẩm Mới Nhất</h2>
                        </div>
                        <!-- <ul class="container__select-title-list">
                            <li class="container__select-title-list-item2 item-tab-left active2">Hải sản tươi sống</li>
                            <li class="container__select-title-list-item2 ">Hải sản đông lạnh</li>
                            <li class="container__select-title-list-item2">Hải sản nhập khẩu</li>
                            
                            <li class="container__select-title-list-item2 item-tab-right">Thủy sản </li>
                        </ul> -->

                    </div>

                    <div class="tab_content ">

                        <div class="tab_pane2 active2">
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
                            <div class="container__select-box-list  ">

                                @foreach($getProducts as $row)
                                    
                                        <!-- <a href="product/{{$row->id}}" style="text-decoration: none;color:black;"> -->
                                            <div id="{{$row->id}}" class="container__select-box-list-item" >
                                            <?php $img = json_decode($row['image'], true); ?>
                                            <img src="  {{ asset('upload/product/'.$img[0]) }}"
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
                </div>
            </div>

            
            <a href="">
                <img src="https://theme.hstatic.net/1000324420/1000664192/14/banner_coltab2_1.png?v=52" alt=""
                    class="Pane_content-img">
            </a>

            <div class="container__section-title a-center">
                <h2>
                    <a href="#">Tin cập nhật</a>
                </h2>
            </div>

            <p class="a-center container__section-title-describe ">
                Tin tức vệ sinh an toàn thực phẩm cấp nhât mới nhất
                <br>
                mỗi ngày cho bạn
            </p>

            <div class="container__section-blog">

                <div class="container__section-blog-list">
                    <div class="container__section-blog-list-item">
                        <a href="">
                            <img src="https://file.hstatic.net/1000324420/article/blog-img-2_large.jpg" alt="">
                        </a>
                    </div>
                    <div class="container__section-blog-list-info a-center">
                        <h3>
                            <a class="hover" href="">Tự chế móm thạch sữa chua thanh long lung linh màu sác </a>
                        </h3>

                        <p>Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn
                            trẻ.
                            Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa.
                            Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì
                            nữa, cùng bắt tay vào thực hiện thui nào các mẹ. </p>
                        <div class="container__section-blog-list-info-btn">
                            <a href="">Chi tiết</a>

                        </div>
                    </div>
                </div>
                <div class="container__section-blog-list">
                    <div class="container__section-blog-list-item">
                        <a href="">
                            <img src="https://file.hstatic.net/1000324420/article/blog-img-5_large.jpg" alt="">
                        </a>
                    </div>
                    <div class="container__section-blog-list-info a-center">
                        <h3>
                            <a class="hover" href="">kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản </a>
                        </h3>

                        <p>Rau củ quả Việt Nam đang dần khẳng định tên tuổi của mình trên thị trường quốc tế khi
                            nhiều mặt hàng đã có “visa” vào các thị trường khó tính như Mỹ,
                            Nhật Bản, Australia… Nhưng hiện có một nghịch lý đau lòng là trong khi các doanh nghiệp
                            trong nước nỗ lực xuất khẩu trái cây, thì trái cây ngoại vẫn ùn ùn tràn vào Việt Nam.
                            Người tiêu dùng Việt lại sẵn sàng “dốc hầu bao” mua trái cây ngoại dù trong nước cũng có
                            sản phẩm cùng loại bảo đảm chất lượng, giá cả phải chăng.</p>
                        <div class="container__section-blog-list-info-btn">
                            <a href="">Chi tiết</a>

                        </div>
                    </div>
                </div>
                <div class="container__section-blog-list">
                    <div class="container__section-blog-list-item">
                        <a href="">
                            <img src="https://file.hstatic.net/1000324420/article/blog-img-2_large.jpg" alt="">
                        </a>
                    </div>
                    <div class="container__section-blog-list-info a-center">
                        <h3>
                            <a class="hover" href="">Vì sao trái cây Việt Nam lại thất thế trước "Cơn Lốc" hàng nhập
                                ngoài ?</a>
                        </h3>

                        <p>Rau củ quả Việt Nam đang dần khẳng định tên tuổi của mình trên thị trường
                            quốc tế khi nhiều mặt hàng đã có “visa” vào các thị trường khó tính như Mỹ, Nhật Bản,
                            Australia…...</p>
                        <div class="container__section-blog-list-info-btn">
                            <a href="">Chi tiết</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container__section-title a-center">
                <h2>
                    <a href="#">Phản hồi của khách</a>
                </h2>
            </div>

            <p class="a-center container__section-title-describe ">
                Phản hồi của những khách hàng đã và đang sử dụng sản

                <br>
                phẩm trong suốt những năm qua
            </p>

            <div class="container__section-testimonials">
                <div class="container__section-testimonials-item a-center">
                    <div class="container__section-testimonials-item-img">

                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/testimonial_1.jpg?v=52" alt="">


                    </div>

                    <div class="container__section-testimonials-info">
                        <h4>
                            Người mẫu - Ngọc Trinh
                        </h4>
                        <p class="container__section-testimonials-info-designation">
                            Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là
                            nơi tôi đặt trọng niềm tin
                        </p>

                    </div>

                </div>

                <div class="container__section-testimonials-item a-center">
                    <div class="container__section-testimonials-item-img">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/testimonial_2.jpg?v=52" alt="">
                    </div>

                    <div class="container__section-testimonials-info">
                        <h4>
                            Diễn viên - Phương Trinh
                        </h4>
                        <p class="container__section-testimonials-info-designation">
                            Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là
                            nơi tôi đặt trọng niềm tin
                        </p>
                    </div>
                </div>

                <div class="container__section-testimonials-item a-center">
                    <div class="container__section-testimonials-item-img">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/testimonial_3.jpg?v=52" alt="">
                    </div>

                    <div class="container__section-testimonials-info">
                        <h4>
                            Ca sỹ - Hoàng Yến
                        </h4>
                        <p class="container__section-testimonials-info-designation">
                            Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là
                            nơi tôi đặt trọng niềm tin
                        </p>
                    </div>
                </div>
            </div>

            <div class="container__section-understand">
                <div class="container__section-understand-item">
                    <a href="">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/brand1.png?v=52" alt="">
                    </a>
                </div>
                <div class="container__section-understand-item">
                    <a href="">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/brand2.png?v=52" alt="">
                    </a>
                </div>
                <div class="container__section-understand-item">
                    <a href="">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/brand3.png?v=52" alt="">
                    </a>
                </div>
                <div class="container__section-understand-item">
                    <a href="">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/brand4.png?v=52" alt="">
                    </a>
                </div>
                <div class="container__section-understand-item">
                    <a href="">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/brand5.png?v=52" alt="">
                    </a>
                </div>
                <div class="container__section-understand-item">
                    <a href="">
                        <img src="https://theme.hstatic.net/1000324420/1000664192/14/brand6.png?v=52" alt="">
                    </a>
                </div>
            </div>


            <!-- trang he thong cua hang -->
            <!-- <div class="content_hethongcuahang tab_page ">
                <div class="flex">
                    <div class="content_cuahang-left">
                        <div class=" product_indexing">
                            <ul class=" product_indexing_list ">
                                <li class=" product_indexing_list-item-home">
                                    <a href="#">
                                        <span>Trang Chủ</span>
                                    </a>
                                </li>
                                <i class="fa-solid fa-angle-right"></i>
                                <li class=" text_greencolor">
                                    <span>Hệ thống cửa hàng</span>
                                </li>
                            </ul>
                        </div>
                        <div class="form_select">
                            <h3>CHỌN CỬA HÀNG THEO TỈNH/ THÀNH PHỐ</h3>
                            <div class="form_select_cuahang">
                                <select class="form_select_one" id="form_select_one">
                                    <option class="form_select-option" value="">Chọn tỉnh/ Thành phố</option>
                                    <option value="Thành phố Đà Nẵng">Thành phố Đà Nẵng</option>
                                </select>
                                <div class="icon_form_select">
                                    <i class="fa-sharp fa-solid fa-caret-down"></i>
                                </div>

                            </div>
                            <div class="form_select_cuahang">
                                <select class="form_select_two" id="form_select_two">
                                    <option class="form_select-option" value="">Chon quận/ huyện</option>
                                </select>
                                <div class="icon_form_select">
                                    <i class="fa-sharp fa-solid fa-caret-down"></i>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="content_cuahang-right">
                        <div class="cuahang-right-list">
                            <div class="cuahang-right-list-item">
                                <div class="list_cuahang">

                                    <div class="cuahang-name">
                                        <b>QUẢ BƯỞI - 12A THANH SƠN </b>
                                    </div>
                                    <div class="cuahang-address">
                                        <b>Địa chỉ:</b>
                                        <p>Số 12A Thanh sơn, Thanh bình, Hải châu, Đà Nẵng</p>

                                    </div>
                                    <div class="cuahang_bottom_element">
                                        <div class="cuahang-info">
                                            <p><b>Điện thoại:</b> 0365228025</p>
                                            <p><b>Giờ mở cửa:</b> 6h30 - 11h00</p>

                                        </div>
                                        <div class=" btn_map_toggle">
                                            <button>Tìm Đường</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="cuahang-right-list-item">
                                <div class="list_cuahang">

                                    <div class="cuahang-name">
                                        <b>QUẢ BƯỞI 2 - 54A THANH LONG </b>
                                    </div>
                                    <div class="cuahang-address">
                                        <b>Địa chỉ:</b>
                                        <p>Số 54A Thanh long, Thanh bình, Hải châu, Đà Nẵng</p>

                                    </div>
                                    <div class="cuahang_bottom_element">
                                        <div class="cuahang-info">
                                            <p><b>Điện thoại:</b> 0365228025</p>
                                            <p><b>Giờ mở cửa:</b> 6h30 - 11h00</p>

                                        </div>
                                        <div class=" btn_map_toggle">
                                            <button>Tìm Đường</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="cuahang-right-list-item">
                                <div class="list_cuahang">

                                    <div class="cuahang-name">
                                        <b>QUẢ BƯỞI 3 - 7A QUỲNH VINH </b>
                                    </div>
                                    <div class="cuahang-address">
                                        <b>Địa chỉ:</b>
                                        <p>Số 7A Quỳnh vinh, TX Hoàng mai, Nghệ An</p>

                                    </div>
                                    <div class="cuahang_bottom_element">
                                        <div class="cuahang-info">
                                            <p><b>Điện thoại:</b> 0365228025</p>
                                            <p><b>Giờ mở cửa:</b> 6h30 - 11h00</p>

                                        </div>
                                        <div class=" btn_map_toggle">
                                            <button>Tìm Đường</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="cuahang-right-list-item">
                                <div class="list_cuahang">

                                    <div class="cuahang-name">
                                        <b>QUẢ BƯỞI 4 - 8A QUỲNH VINH </b>
                                    </div>
                                    <div class="cuahang-address">
                                        <b>Địa chỉ:</b>
                                        <p>Số 8A Quỳnh vinh, TX Hoàng mai, Nghệ An</p>

                                    </div>
                                    <div class="cuahang_bottom_element">
                                        <div class="cuahang-info">
                                            <p><b>Điện thoại:</b> 0365228025</p>
                                            <p><b>Giờ mở cửa:</b> 6h30 - 11h00</p>

                                        </div>
                                        <div class=" btn_map_toggle">
                                            <button>Tìm Đường</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="cuahang-right-list-item">
                                <div class="list_cuahang">

                                    <div class="cuahang-name">
                                        <b>QUẢ BƯỞI 5 - 9A QUỲNH VINH </b>
                                    </div>
                                    <div class="cuahang-address">
                                        <b>Địa chỉ:</b>
                                        <p>Số 9A Quỳnh vinh, TX Hoàng mai, Nghệ An</p>

                                    </div>
                                    <div class="cuahang_bottom_element">
                                        <div class="cuahang-info">
                                            <p><b>Điện thoại:</b> 0365228025</p>
                                            <p><b>Giờ mở cửa:</b> 6h30 - 11h00</p>

                                        </div>
                                        <div class=" btn_map_toggle">
                                            <button>Tìm Đường</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="cuahang-right-list-item">

                                <div class="cuahang-name">
                                    <b>QUẢ BƯỞI 6 - 10A THANH SƠN </b>
                                </div>
                                <div class="cuahang-address">
                                    <b>Địa chỉ:</b>
                                    <p>Số 10A Thanh sơn, TX Hoàng mai, Nghệ An</p>

                                </div>
                                <div class="cuahang_bottom_element">
                                    <div class="cuahang-info">
                                        <p><b>Điện thoại:</b> 0365228025</p>
                                        <p><b>Giờ mở cửa:</b> 6h30 - 11h00</p>

                                    </div>
                                    <div class=" btn_map_toggle">
                                        <button>Tìm Đường</button>
                                    </div>

                                </div>

                            </div>
                            <div class="cuahang-right-list-item">

                                <div class="cuahang-name">
                                    <b>QUẢ BƯỞI 7 - 11A QUỲNH VINH </b>
                                </div>
                                <div class="cuahang-address">
                                    <b>Địa chỉ:</b>
                                    <p>Số 11A Quỳnh vinh, TX Hoàng mai, Nghệ An</p>

                                </div>
                                <div class="cuahang_bottom_element">
                                    <div class="cuahang-info">
                                        <p><b>Điện thoại:</b> 0365228025</p>
                                        <p><b>Giờ mở cửa:</b> 6h30 - 11h00</p>

                                    </div>
                                    <div class=" btn_map_toggle">
                                        <button>Tìm Đường</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- trang chinh sach giao hang -->
            <!-- <div class="content_chinhsachgiaohang tab_page">
                <div class=" product_indexing">
                    <ul class=" product_indexing_list ">
                        <li class=" product_indexing_list-item-home">
                            <a href="#">
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                        <i class="fa-solid fa-angle-right"></i>
                        <li class=" text_greencolor">
                            <span>Chính sách giao hàng</span>
                        </li>
                    </ul>
                </div>
                <div class="chinhsachgiaohang_header_title">
                    <h2>CHÍNH SÁCH GIAO HÀNG</h2>
                </div>
                <div class="chinhsachgiaohang_title_table">
                    <h3>Chính sách giao hàng của BƯỞI XANH</h3>
                    <div class="chinhsachgiaohang_table_chinhsach">
                        <table>
                            <tr>
                                <th>Khoảng cách</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Phí giao hàng</th>
                            </tr>
                            <tr>
                                <td>Dưới 3km</td>
                                <td>Trên 300.000 VND</td>
                                <td>Miễn phí</td>

                            </tr>
                            <tr>
                                <td>Dưới 5km</td>
                                <td>Trên 500.000 VND</td>
                                <td>Miễn phí</td>
                            </tr>
                            <tr>
                                <td>Dưới 10km</td>

                                <td>trên 100.000.000 VND</td>
                                <td>Miễn phí</td>
                            </tr>

                        </table>
                        <p><I>* Áp dụng từ ngày 17/3/2023</I></p>
                    </div>
                </div>
                <div class="chinhsachgiaohang_list">
                    <ul class="chinhsachgiaohang_list-item">
                        <li><U><I>Ví dụ:</I></U></li>
                        <li>
                            <p>Đơn hàng 600.000 VNĐ trong bán kính 8km. Đơn hàng sẽ được miễn phí ship trong bán kính
                                5km đầu tiên, 3km tiếp theo khách chịu phí ship với số tiền: 3*5.000 VNĐ = 15.000 VNĐ.
                            </p>
                        </li>
                        <li><U><I>Lưu ý:</I></U></li>
                        <li>
                            <p> - Đơn hàng < 300.000 VNĐ: Trong khoảng cách 3km, khách hàng thanh toán phí ship theo báo
                                    giá của đơn vị vận chuyển thứ 3.</p>
                        </li>
                        <li>
                            <p> - Đơn hàng ≥ 300.000 VNĐ: Phí ship tính theo bảng chính sách phí ship. Các km phát sinh
                                tiếp theo tính thêm 5.000 VNĐ/km.</p>
                        </li>
                        <li>
                            <p> - Chính sách áp dụng đồng thời cùng các chương trình khuyến mại (nếu có).</p>
                        </li>
                        <li>
                            <p> - Chính sách trên không áp dụng cho thời gian giao hàng lễ tết, khung giờ cao điểm từ
                                17h00 đến 19h30, biến động thời tiết, dịch bệnh.</p>
                        </li>

                    </ul>
                </div>
            </div> -->

            <!-- trang chinh sach doi tra-->
            <!-- <div class="content_chinhsachdoitra  tab_page">
                <div class=" product_indexing">
                    <ul class=" product_indexing_list ">
                        <li class=" product_indexing_list-item-home">
                            <a href="#">
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                        <i class="fa-solid fa-angle-right"></i>
                        <li class=" text_greencolor">
                            <span>Chính sách đổi trả</span>
                        </li>
                    </ul>
                </div>
                <div class="chinhsachdoitra_header_title">
                    <h2>CHÍNH SÁCH ĐỔI TRẢ</h2>
                </div>
                <div class="chinhsachdoitra_preamble">
                    <p>Quả bưởi luôn trân trọng sự tin yêu mà các Quý Khách hàng dành cho mình. Chính vì vậy, Quả bưởi
                        luôn cố gắng để mang đến cho Quý Khách hàng những sản phẩm chất lượng và dịch vụ tốt nhất.</p>
                    <p>Thay cho cam kết về chất lượng sản phẩm, Quả bưởi cam kết thực hiện tốt chính sách về đổi trả
                        hàng hóa.</p>
                </div>

                <div class="chinhsachdoitra_list">
                    <ul class="chinhsachdoitra_list-item">
                        <li><b><i>Theo đó:</i></b></li>
                        <li>
                            <p> 1. Tất cả các sản phẩm của Bưởi Xanh được áp dụng đổi trả trong 72h tính từ thời điểm
                                mua hàng.</p>
                        </li>
                        <li>
                            <p> 2. Khi khách hàng đến cửa hàng đổi trả hoặc yêu cầu nhân sự Bưởi Xanh nhận lại hàng cần
                                có đầy đủ:</p>
                        </li>
                        <li>
                            <p> - Hóa đơn mua hàng.</p>
                        </li>
                        <li>
                            <p> - Sản phẩm lỗi hỏng (chỉ chấp nhận hình ảnh sản phẩm lỗi đối với mặt hàng là trái cây).
                            </p>
                        </li>
                        <li>
                            <p>
                                3. Chính sách đổi trả sẽ không áp dụng trong các trường hợp sau:
                            </p>
                        </li>
                        <li>
                            <p>
                                - Quý khách muốn thay đổi chủng loại sản phẩm sau khi đã xuất hóa đơn bán lẻ, không có
                                bất kỳ lỗi gì về sản phẩm.
                            </p>
                        </li>
                        <li>
                            <p>
                                - Quý khách tự làm ảnh hưởng đến tình trạng bên ngoài như rách bao bì, bong tróc, bể vỡ,
                                rơi rụng…
                            </p>
                        </li>
                        <li>
                            <p>
                                - Quý khách không thực hiện đúng theo cách thức bảo quản dẫn tới việc hư hỏng sản phẩm.
                            </p>
                        </li>
                        <li>
                            <p>
                                Quý khách vui lòng kiểm tra trình trạng của sản phẩm trước khi mua/ nhận hàng. Khi phát
                                hiện sản phẩm bị lỗi,
                                hư hỏng, chất lượng không đảm bảo…, quý khách vui lòng phản hồi trực tiếp với nhân viên
                                tại cửa hàng hoặc phản hồi tới số hotline 1900 63 63 26.
                            </p>
                        </li>
                        <li>
                            <p>
                                Hi vọng Sói Biển sẽ mang lại trải nghiệm sản phẩm và dịch vụ tốt nhất tới Quý Khách
                                hàng.
                            </p>
                        </li>
                    </ul>
                </div>
            </div> -->




@endsection