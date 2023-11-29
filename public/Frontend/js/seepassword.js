
//-------------------xem mat khua-----------------

$(document).ready(function(){
    $('#eye').click(function(){
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('open')){
            $(this).prev().attr('type', 'text');
        }else{
            $(this).prev().attr('type', 'password');
        }
    });
});



//---------------đăng ký -------------------

function signup(e){
    event.preventDefault();
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    //tao object de luu tai khoan len localStorage
    const user={
        username: username,
        email: email,
        password: password
    }
        // chuyen doi object user thanh kieu json
        const json = JSON.stringify(user);
        //lưu lên localStorage 
        // username là khóa
        // json là giá trị
        localStorage.setItem(username, json);
        swal("","Đăng ký thành công!","success")

}


//--------------Đăng nhập---------------------

function login(e){
    event.preventDefault();
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    //lay ra 
    const user = localStorage.getItem(username);
    //chuyen đổi kiểu json sang kiểu js là object
    const data = JSON.parse(user);

    if (user == null){
        swal("","Bạn chưa đăng ký đúng không","error")
    }else if(data.username == username && data.password == password && data.email == email){
        alert("Đăng nhập thành công!")
            window.location.href="index.html"
        }else{
            swal("","Email hoặc mật khẩu không đúng","error")

        }
}
