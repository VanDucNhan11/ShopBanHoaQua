@extends('Frontend.Layouts.app')
@section('content')	
			<!--Trang giỏ hàng -->
            <div class="content_trangchu  tab_page next_page ">
                <div class=" product_indexing">
                    <ul class=" product_indexing_list">
                        <li class=" product_indexing_list-item-home">
                            <a href="#">
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                        <i class="fa-solid fa-angle-right"></i>
                        <li class=" text_greencolor">
                            <span>Giỏ hàng của bạn - BuoiXanh</span>
                        </li>

                    </ul>
                </div>
                
                    <div class="cart_headerTitle">
                        <h4 style="width: 24%;">Sản phẩm</h4>
                        <h4 style="width: 36%;">Thông tin sản phẩm</h4>
                        <h4 style="width: 17%;">Số lượng</h4>
                        <h4 style="width: 18%;">Đơn giá</h4>
                        <h4 style="width: 5%;">Xóa</h4>
                    </div>

                    <div class="cart-table">
                    @if(session('cart'))
                        @php $total = 0 @endphp
                        @foreach(session('cart') as $id => $details)
                                @php 
                                $price = (int)$details['price'];
                                $total += $price * $details['quantity']; 
                                @endphp
                                <div class="cart_list">
                                    <div class="cart_list_item  cart_list_item-img" style="width: 24%;">
                                        <img src="{{ asset('upload/product/'.$details['image']) }}" alt="">
                                    </div>
                                    <div class="cart_list_item cart_list_item-name" style="width: 36%;">
                                        <p><a class="hover" href="">{{ $details['name'] }}</a></p>
                                    </div>
                                    
                                    <div class="cart_list_item cart_list_item-input giam" style="width: 18%;">
                                        <button class="header__cart-btn-reduce" data-id="{{$id}}">–</button>
                                        <input class="cart_list_item-input" type="number" value="{{ $details['quantity'] }}">
                                        <button class="header__cart-btn-increase tang" data-id="{{$id}}">+</button>
                                    </div>

                                    <div class="cart_list_item  text_bold" style="width: 17%;">
                                        <span class="cart_list_item-price">{{ $details['price'] }}</span>
                                        <span class="header__cart-list-item-text-unit" style="color: #333;"><u>đ</u></span>
                                    </div>
                                    
                                    <div class="cart_list_item" style="width: 5%;">
                                        <i class="delete_cart fa-solid fa-trash" data-id="{{$id}}"></i>
                                    </div>
                                </div>
                            
                        @endforeach
                    </div>

                    <div class="cart_total">
                        @php 
                            $total = (string)$total;
                            
                            if(strlen($total) == 4){
                                $total = $total[0].'.'.substr($total, 1);
                            }
                        @endphp
                        <p>Tổng tiền:</p>
                        <span class="cart_list_item-total">{{$total}}.000</span>
                        <span class="header__cart-list-item-text-unit" style="color: #333;"><u>đ</u></span>
                    </div>
                    @endif

                    <div class="btn_cart_pay">
                        <form action="{{url('user/checkout')}}" method="GET">
                            <button type="submit" >Tiến hành thanh toán</button>
                        </form>
                    </div>
            </div>
            
<script language="JavaScript" type="text/javascript">
        $(document).ready(function(){
        
            // INCREASE

            $("div.cart-table").on("click", ".cart_list button.header__cart-btn-increase",function(){
                
                var id = $(this).data("id");

                var qty = $(this).closest('div.cart_list').find("input").val();
                qty++
                
                $(this).closest('div.cart_list').find("input").attr("value",qty);
                

                var total = $('div#carthere').find("span.totalProduct").text();
                total ++

                $('div#carthere').find("span.totalProduct").text(total);

                var totalprice = $('span.cart_list_item-total').text().trim();

                var price = $(this).closest('div.cart_list').find("span.cart_list_item-price").text().trim()

                price = price.split('.').join('')
                

                totalprice = totalprice.split('.').join('')
                
                totalprice = parseInt(totalprice) + parseInt(price)
                
                totalprice = totalprice.toString()
                
                totalprice = totalprice.slice( 0, -3 ) ;

                if(totalprice.length == 3){
                    totalprice = totalprice + '.000'
                }
                else if(totalprice.length == 4){
                    totalprice = totalprice.slice(0, 1)  + '.' + totalprice.slice(1) + '.000' ;
                    
                }else if(totalprice.length == 5){
                    totalprice = totalprice.slice(0, 2) + '.' + totalprice.slice(2) + '.000';
                }
                
                $('span.cart_list_item-total').text(totalprice)
                

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                $.ajax({
                       type:'POST',
                       url:"{{url('/user/update-cart')}}",
                       data:{
                            id: id,
                            quantity: qty,
                            },

                        success:function(html){
                            $('div#carthere').empty();
                            $('div#carthere').append(html);
                       }
                    }); 
            });

            //DECREASE

            $("div.cart-table").on("click", ".cart_list button.header__cart-btn-reduce",function(){
                var id = $(this).data("id");

                var qty = $(this).closest('div.cart_list').find("input").val();
                qty--
                
                $(this).closest('div.cart_list').find("input").attr("value",qty);
                

                var total = $('div#carthere').find("span.totalProduct").text();
                total--

                $('div#carthere').find("span.totalProduct").text(total);

                var totalprice = $('span.cart_list_item-total').text().trim();

                var price = $(this).closest('div.cart_list').find("span.cart_list_item-price").text().trim()

                price = price.split('.').join('')
                

                totalprice = totalprice.split('.').join('')
                
                totalprice = parseInt(totalprice) - parseInt(price)
                
                totalprice = totalprice.toString()
                
                totalprice = totalprice.slice( 0, -3 ) ;

                if(totalprice.length == 3){
                    totalprice = totalprice + '.000'
                }
                else if(totalprice.length == 4){
                    totalprice = totalprice.slice(0, 1)  + '.' + totalprice.slice(1) + '.000' ;
                    
                }else if(totalprice.length == 5){
                    totalprice = totalprice.slice(0, 2) + '.' + totalprice.slice(2) + '.000';
                }
                
                $('span.cart_list_item-total').text(totalprice)

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                $.ajax({
                       type:'POST',
                       url:"{{url('/user/update-cart')}}",
                       data:{
                            id: id,
                            quantity: qty,
                            },

                        success:function(html){
                       }
                    }); 
            });


            // DELETE

            $("div.cart-table").on("click", ".cart_list_item i.delete_cart",function(){
                var id = $(this).data("id");
                // console.log(id)
                var qty = $(this).closest('div.cart_list').find("input").val();

                var totalqty = $('div#carthere').find("span.totalProduct").text();
                
                totalqty = parseInt(totalqty) - parseInt(qty)

                $('div#carthere').find("span.totalProduct").text(totalqty);

                var totalprice = $('span.cart_list_item-total').text().trim();

                var price = $(this).closest('div.cart_list').find("span.cart_list_item-price").text().trim()

                price = price.split('.').join('')
                
                totalprice = totalprice.split('.').join('')
                
                totalprice = parseInt(totalprice) - parseInt(price)*parseInt(qty)
                
                totalprice = totalprice.toString()
                
                totalprice = totalprice.slice( 0, -3 ) ;

                switch (totalprice.length) {
                  case 3:
                    totalprice = totalprice + '.000'
                    break;
                  case 4:
                    totalprice = totalprice.slice(0, 1)  + '.' + totalprice.slice(1) + '.000' ;
                    break;
                  case 5:
                    totalprice = totalprice.slice(0, 2)  + '.' + totalprice.slice(2) + '.000' ;
                    break;
                  default:
                    console.log("Don't know the answer");
                }
                
                
                $('span.cart_list_item-total').text(totalprice)

                $(this).closest("div.cart_list").remove();

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                

                $.ajax({
                       type:'POST',
                       url:"{{url('/user/remove-cart')}}",
                       data:{
                            id: id,
                            },

                        success:function(html){
                            // $('div#carthere').empty();
                            // $('div#carthere').append(html);
                            alertify.success('Đã xóa sản phẩm');
                       }
                    });  
            });
        });
    </script>               
            
@endsection