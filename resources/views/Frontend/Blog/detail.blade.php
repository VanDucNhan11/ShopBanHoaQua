@extends('Frontend.Layouts.app')
@section('content')

  <!-- Phan header -->
  
  <div class="content_detailnews ">
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
        <i class="fa-solid fa-angle-right"></i>
        <li class=" text_greencolor">
          <span>Chi tiết sản phẩm</span>
        </li>
      </ul>
    </div>
    <div class="flex">
      <div class="content_trangtintuc-left">
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
              <span>TIN NỔI BẬT</span>
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
      @foreach($getBlogs as $row)
        <?php $img = json_decode($row['image'], true); ?>
      <div class="detailnews_right">
        <div class="detailnews_right-title">
          <p>{{$row->title}}</p>
          <span>{{substr($row->created_at,0 , 10)}}</span>
        </div>
        <div class="detailnews_right-img">
          <img src="{{ asset('upload/blog/'.$img[0]) }}" alt="">
        </div>
        <div class="detailnews_right-content">
          <p>{{$row->description}}</p>
        </div>
        <div class="detailnews_right-img">
          <img src="{{ asset('upload/blog/'.$img[1]) }}" alt="">
        </div>
        <div class="detailnews_right-tag">
          <div class="detailnews_right-tag-left">
            <i class="fa-solid fa-tags"></i>
            <span>dualeo, quả, rau củ, thực spanhẩm</span>
          </div>
          <div class="detailnews_right-tag-right">
            <span>Chia sẻ:</span>
            <div class="social-media">
              <i class="fa-brands fa-facebook"></i>
            </div>
            <div class="social-media">
              <i class="fa-brands fa-twitter"></i>
            </div>
            <div class="social-media">
              <i class="fa-brands fa-github"></i>
            </div>
            <div class="social-media">
              <i class="fa-brands fa-youtube"></i>
            </div>
          </div>
        </div>
        <!-- <div class="detailnews_righ-comment">
          <p class="title">3 <span>Bình luận</span></p>

          <div class="detailnews_righ-comment-user">
            <img src="https://cdn.pixabay.com/photo/2018/06/24/23/21/daylily-3495722_1280.jpg" alt="">
            <div class="detailnews_righ-comment-user-info">
              <p class="name">Nguyễn Bá Khoa</p>
              <p class="date">26/11/2023</p>
              <p class="comment">Bài viết cảm động rớt nước mắt</p>
            </div>
          </div>
          

        </div> -->
        <!-- <div class="form_comment">
          <div class="title">Viết bình luận của bạn</div>
          <div class="form_comment-group">
            <div>
              <input type="text" placeholder="Họ tên*">
            </div>
            <div>
              <input type="text" placeholder="Email*">
            </div>
            <textarea placeholder="Nội dung*" name="" id="" cols="30" rows="10"></textarea>
            <button>Gửi bình luận</button>
          </div>
        </div> -->
        
      </div>
      @endforeach
    </div>
  </div>


@endsection

