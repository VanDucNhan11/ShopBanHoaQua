<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('Frontend/assets/fonts/fontawesome-free-6.3.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/detailNew.css') }}">
    <link rel="shortcut icon" href="./assets/img/quabuoi.jpg" type="image/png" sizes="80x80">

    

    

    <!-- <link rel="stylesheet" href="./assets/css/grid.css"> -->

    <!-- SweetAlert2 -->
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css/>" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>BuoiXanh</title>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function(){
        $("button.add_cart").click(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var id =  $(this).closest("div.container__select-box-list-item").attr('id');

                $.ajax({
                   type:'POST',
                   url:"{{url('/user/add-to-cart')}}",
                   data:{
                        id: id,
                        quantity: 1
                        },

                    success:function(html){
                        $('div#carthere').empty();
                        $('div#carthere').append(html);
                        alertify.success('Đã thêm mới sản phẩm');
                   }
                });       
        });

        // INCREASE

        $("div#carthere").on("click", ".header__cart-list-select button.header__cart-btn-increase",function(){
            // console.log($(this).data("id"));
            var id = $(this).data("id");

            var qty = $(this).closest('div.header__cart-list-select').find("input").val();
            // console.log(qty);
            qty++
            
            $(this).closest('div.header__cart-list-select').find("input").attr("value",qty);
            // console.log(qty);

            var total = $(this).closest('div#carthere').find("span.totalProduct").text();
            total ++

            $(this).closest('div#carthere').find("span.totalProduct").text(total);

            var totalprice = $('span.header__cart-list-prepare-right').text().trim();

            var price = $(this).closest('div.header__cart-list-item-text').find("span.header__cart-list-item-text-price").text().trim()

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
            
            $('span.header__cart-list-prepare-right').text(totalprice)

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

        //DECREASE

        $("div#carthere").on("click", ".header__cart-list-select button.header__cart-btn-reduce",function(){
            // console.log($(this).data("id"));
            var id = $(this).data("id");

            var qty = $(this).closest('div.header__cart-list-select').find("input").val();
            // console.log(qty);
            qty--
            
            $(this).closest('div.header__cart-list-select').find("input").attr("value",qty);

            var totalqty = $(this).closest('div#carthere').find("span.totalProduct").text();
            totalqty --

            $(this).closest('div#carthere').find("span.totalProduct").text(totalqty);

            var totalprice = $('span.header__cart-list-prepare-right').text().trim();

            var price = $(this).closest('div.header__cart-list-item-text').find("span.header__cart-list-item-text-price").text().trim()

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
                totalprice = totalprice.slice(0, 2)  + '.' + totalprice.slice(2) + '.000' ;
            }
            
            
            $('span.header__cart-list-prepare-right').text(totalprice)

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

        $("div#carthere").on("click", ".header__cart-list-item-iconremove i",function(){
            var id = $(this).data("id");

            var qty = $(this).closest('div.header__cart-list-item').find("input").val();

            var totalqty = $(this).closest('div#carthere').find("span.totalProduct").text();
            
            totalqty = parseInt(totalqty) - parseInt(qty)

            $(this).closest('div#carthere').find("span.totalProduct").text(totalqty);

            var totalprice = $('span.header__cart-list-prepare-right').text().trim();

            var price = $(this).closest('div.header__cart-list-item').find("span.header__cart-list-item-text-price").text().trim()

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
            
            
            $('span.header__cart-list-prepare-right').text(totalprice)

            $(this).closest("div.header__cart-list-item").remove();

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

</head>

<body>
    <div class="app">

        <!-- HEADER -->
        @include('Frontend.Layouts.header')
        
        <!-- BODY CONTENT -->
        <div class="content">
            @yield('content') 
        </div>
        <!-- FOOTER-->
        @include('Frontend.Layouts.footer')
    </div>
    <!-- <script src="{{ asset('Frontend/js/main.js') }}"></script> -->
    <script src="{{ asset('Frontend/js/cart.js') }}"></script>
    <script src="{{ asset('Frontend/js/detail.js') }}"></script>
</body>

</html>