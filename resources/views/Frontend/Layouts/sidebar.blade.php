<div class="container-left">
    <div class="nav__category-head">
        <h2 class="nav__category-title">
            <span>DANH MỤC</span>
        </h2>
    </div>

    <div class="nav__category-menu">
        <div class="nav__category-menu-content">
            <ul class="nav__category-menu-list scroll_menuTrangchu">
                @foreach($getCategorys as $row)
                <li class="nav__category-menu-item ">
                    <i class="fa fa-arrow-circle-right nav__category-menu-item-icon "></i>
                    <a href="" class=" nav__category-menu-item-link ">{{$row->nameCate}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>