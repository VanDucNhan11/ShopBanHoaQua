<div class="container__select-box-list2">
    @foreach($getSearch as $row)
    
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