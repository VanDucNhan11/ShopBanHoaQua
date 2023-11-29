@extends('Frontend.Layouts.app')
@section('content')
        <!--Phần mổ tả sản phẩn   -->
            <div class="product_description action">
                <div class=" product_indexing">
                    <ul class=" product_indexing_list">
                        <li class=" product_indexing_list-item-home">
                            <a href="#">
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                        <i class="fa-solid fa-angle-right"></i>
                        <li class=" text_greencolor">
                            <span>Chi tiết sản phẩm</span>
                        </li>
                    </ul>
                </div>

                <div class="product_description_contain">
                    <div class="product_description_contain-left">
                        <div class="description_contain-left-content">
                        @foreach($getProducts as $row)
                            <?php $img = json_decode($row['image'], true); ?>
                            <div class="description_contain-left-content_detail">
                            
                                <div class="description_contain-left-content_img">
                                    <img  src="{{ asset('upload/product/'.$img[0]) }}"
                                        alt="">
                                </div>

                                <!-- <div class="content_detail-img-item">
                                    <img src="https://product.hstatic.net/1000324420/product/upload_963fbe98fc324f47b37e38a3481c22e1_1024x1024.jpg"
                                        alt="">
                                    <img src="https://product.hstatic.net/1000324420/product/upload_b191e9fa359e4fd49b24e591545e7a79_medium.jpg"
                                        alt="">
                                    <img src="https://product.hstatic.net/1000324420/product/upload_4bdb98100d0342bf9f5314f89e71d937_medium.jpg"
                                        alt="">
                                    <img src="https://product.hstatic.net/1000324420/product/upload_35512b5378c84c8a952de1ee4d70634b_medium.jpg"
                                        alt="">
                                </div> -->
                            </div>

                            <div class="description-content-title">
                                <h1>{{$row->name}}</h1>
                                <div class="description-content-title-status">
                                    <p>Trang thái:</p>
                                    @if($row->quantity > 0)
                                    <div class="description-content-status-stocking">
                                        <i class="fa-solid fa-check"></i>
                                        <span> Còn hàng</span>
                                    </div>
                                    @else
                                    <div class="description-content-status-stocking">
                                        
                                        <span> Còn hàng</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="description-content-price">
                                    <p>{{$row->price}}</p>
                                    <span><u>đ</u></spad>
                                </div>
                                <!-- <div class="description-content-price-discount">
                                    <span>Giá gốc:</span>
                                    <span>
                                        <del> 460,000₫</del>
                                    </span>
                                    <span>-(13%)</span>
                                </div> -->
                                <p class="description-product">
                                    Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa. Bên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột…
                                </p>
                                <div class="product_number-of ">
                                    <p>Số lượng:</p>
                                    <div class="product_number-of-select">
                                        <button class="header__cart-btn-reduce">-</button>
                                        <input type="number" name="" id="" value="1" min="1">
                                        <button class="header__cart-btn-increase">+</button>
                                    </div>
                                    <button class="header__cart-list-btn" id="order_product" data-id="{{$row->id}}">Thêm vào giỏ hàng</button>
                                    
                                </div>
                                <div class="social-media">
                                    <p>Chia sẻ:</p>
                                    <a href="">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-brands fa-pinterest"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-brands fa-google-plus-g"></i>
                                    </a>
                                </div>

                            </div>
                        

                        </div>
                        <div class="btn_product_tab">
                            <Button class="btn_tab-link current ">Mô tả</Button>
                            <button class="btn_tab-link">Thông tin</button>
                        </div>

                        <div class=" tab_link-content current">
                            <p class="tab_link-rte">
                                {{$row->description}}
                            </p>
                        </div>

                        

                        <div class="tab_link-content ">
                            <!-- <p class="tab_link-rte">
                                Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức khỏe, tốt cho tim mạch,
                                ngăn ngừa tiến trình bệnh tiểu đường.

                            </p> -->
                        </div>

                        <div class="product_comment">
                            <p class="comment_number">{{count($getComments)}} Bình Luận</p>
                            <!-- <span>Sắp xếp theo
                                <select name="" id="" class="comment_select-option">
                                    <option value="">Mới nhất</option>
                                    <option value="">Cũ nhất</option>
                                </select>
                            </span> -->

                        </div>
                        
                            
                            <div class="user_comment_product">
                                <div class="img_user">
                                    <img src="{{ asset('Admin/imageuser/'.Auth::user()->avatar) }}"
                                        alt="">
                                </div>
                                <div class="input_comment">
                                    <input id="comment_input" name="comment" class="input_comment-text" type="text" data-id="{{$row->id}}" placeholder="Viết bình luận...">
                                </div>
                            </div>
                        
                        @endforeach
                        <div id="comment_here">
                            <div class="comment_item_here">
                                @foreach($getComments as $row3)
                                <div class="user">
                                
                                    <img src="{{ asset('Admin/imageuser/'.$row3->avatar) }}" alt="">
                                    <div class="commented_product">
                                        <p> <a href="">{{$row3->nameUser}}</a></p>
                                        <p>{{$row3->comment}}</p>
                                        <div class="user_status">
                                            <a href="">Thích</a>
                                            <a href="">Phản hổi</a>
                                            <a href="">{{substr($row3->created_at,0 , 10)}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                            


                        
                        
                        <!-- <div class="Plugin">
                            <i class="fa-brands fa-square-facebook"></i>
                            <p>Plugin bình luận trên Facebook</p>
                        </div> -->
                        

                    </div>
                    <div class="product_description_contain-right">
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

                </div>
                <!-- <div>
                    <div class="container__section-title a-center">
                        <h2>
                            <a href="#">Sản phẩm liên quan</a>
                        </h2>
                    </div>
                    <p class="a-center note"><i>Có phải bạn cần tìm những sản phẩm dưới đây</i></p>

                    <div class="container__select-box-list product-select-box-lv1 ">
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="	https://product.hstatic.net/1000324420/product/upload_d07ae86f129b45c7b9828bc048ca9e00_medium.jpg"
                                title="Hồng đỏ Mỹ" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Hồng đỏ Mỹ</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">190.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>

                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>
                            <div class="Promotion">
                                <p>- 20%</p>
                            </div>
                        </div>
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="https://product.hstatic.net/1000324420/product/upload_62fbfcfba7314bd8a8576287ac136211_medium.jpg"
                                title="Nho Đà lạt" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Nho Đà lạt</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">145.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>
                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>
                            <div class="Promotion">
                                <p>- 30%</p>
                            </div>
                        </div>
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="https://product.hstatic.net/1000324420/product/upload_d37733a5b9e64ad0a8a44554b229e5aa_medium.jpg"
                                title="Lê Đông Ti Mo" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Lê Đông Ti Mo</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">100.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>
                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>
                            <div class="Promotion">
                                <p>- 10%</p>
                            </div>
                        </div>
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="https://product.hstatic.net/1000324420/product/v4_388b25fd338c48b2b7545f0f30b678d8_medium.jpg"
                                title="Cà chua Đà lạt" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Cà chua Đà lạt</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">100.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>
                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>
                            <div class="Promotion">
                                <p>- 23%</p>
                            </div>
                        </div>
                    </div>
                    <div class="container__select-box-list product-select-box-lv1 ">
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="https://product.hstatic.net/1000324420/product/upload_134489d506a84b4f93502730bc9fd96d_medium.jpg"
                                title="Ớt chuông Đà lạt" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Ớt chuông Đà lạt</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">90.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>

                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>

                        </div>
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="https://product.hstatic.net/1000324420/product/upload_8ced487476d74ef7bba2ee08396ac8ac_medium.jpg"
                                title="Táo đỏ Mỹ" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Táo đỏ Mỹ</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">265.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>
                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart ">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>
                        </div>
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="	https://product.hstatic.net/1000324420/product/upload_b16e5f51d9b04361a577b638c18ebdbe_medium.jpg"
                                title="Nho đen không hạt Úc" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Nho đen không hạt Úc</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">450.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>
                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>
                        </div>
                        <div class="container__select-box-list-item product-select_lv1">
                            <img src="	https://product.hstatic.net/1000324420/product/upload_823c2135b7aa4bcfade2588fab27c77e_medium.jpg"
                                title="Dâu tây loại 1" class="container__select-box-list-item-img">
                            <p class="container__select-box-list-item-describe">Dâu tây loại 1</p>
                            <div class="flex b-center ">
                                <p class="container__select-box-list-item-prepare">250.000</p>
                                <p class="container__select-box-list-item-init"><u>đ</u></p>
                            </div>
                            <div class="container__select-cart">
                                <button class="btn-container__select-cart-add add_cart">
                                    <i class="fa-solid fa-cart-plus "></i>
                                </button>
                                <button class="btn-container__select-cart-add">
                                    <i class="fa-solid fa-eye "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
<script language="JavaScript" type="text/javascript">
        $(document).ready(function(){

        $("button.header__cart-list-btn").click(function(){
                var id = $(this).data("id");

                var qty = $("div.product_number-of-select").find("input").val()

                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                   type:'POST',
                   url:"{{url('/user/add-to-cart')}}",
                   data:{
                        id: id,
                        quantity: qty
                        },

                    success:function(html){
                        $('div#carthere').empty();
                        $('div#carthere').append(html);
                        alertify.success('Đã thêm mới sản phẩm');
                        $("div.product_number-of-select").find("input").attr('value',1)  
                   }
                });       
        });

        // INCREASE

        $("button.header__cart-btn-increase").click(function(){
            var qty = $("div.product_number-of-select").find("input").val()
            console.log(qty)
            qty++
            $("div.product_number-of-select").find("input").attr('value',qty)         
        });

        $("button.header__cart-btn-reduce").click(function(){
            var qty = $("div.product_number-of-select").find("input").val()
            qty--
            $("div.product_number-of-select").find("input").attr('value',qty)         
        });

        });

        //COMMENT
        $('input#comment_input').keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                var idPr = $('input#comment_input').data("id");
                // console.log(idPr)
                var comment = $('input#comment_input').val()
                // console.log(comment)

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                   type:'POST',
                   url:"{{url('/user/comment')}}",
                   data:{
                        idPr: idPr,
                        comment: comment
                        },

                    success:function(html){
                        $('div#comment_here').empty();
                        $('div#comment_here').append(html);
                        alertify.success('Bình luận thành công');
                   }
                }); 
            }
        });
    </script> 
@endsection