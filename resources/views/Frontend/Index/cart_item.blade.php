@php $total = 0 @endphp
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

    <div class="header__cart-list ">

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
                                            <i class="deleteProduct fa-regular fa-trash-can" data-id="{{$id}}"></i>
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
