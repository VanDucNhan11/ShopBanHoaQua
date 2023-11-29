<div class="comment_item_here">
    @foreach($getComments as $row)
        <div class="user">
            <img src="{{ asset('Admin/imageuser/'.$row->avatar) }}" alt="">
            <div class="commented_product">
                <p> <a href="">{{$row->nameUser}}</a></p>
                <p>{{$row->comment}}</p>
                <div class="user_status">
                    <a href="">Thích</a>
                    <a href="">Phản hổi</a>
                    <a href="">{{substr($row->created_at,0 , 10)}}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>