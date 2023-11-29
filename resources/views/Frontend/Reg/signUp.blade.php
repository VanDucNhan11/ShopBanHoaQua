<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/previews/015/132/727/original/3d-rendering-warehouse-isolated-useful-for-ecommerce-shopping-and-business-online-design-png.png" type="image/png" >
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css/>"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    <title>Đăng ký - BuoiXanh</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

.contain{
    background: url('https://phunuvietnam.mediacdn.vn/media/news/f57e9defd1303332611ab2ca1994500d/thuc-pham-huu-co-5.jpg');
    background-size: cover;
    background-position-y: -80px;
    font-size: 16px;
}
#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-signin{
    max-width: 450px;
    background: rgba(56, 54, 54, 0.6);
    flex-grow: 1;
    padding: 30px 30px 40px;
    /* box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8); */
}
.form-heading{
    font-size: 25px;
    color: #ffffff;
    text-align: center;
    margin-bottom: 30px;
}
.form-group{
    border-bottom: 1px solid #ffffff;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #ffffff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: #ffffff;
    flex-grow: 1;
}

.form-input::placeholder{
    color: #ffffff;
}

#eye i{
    padding-right: 0;
    cursor: pointer;
}

.form_link a{
    cursor: pointer;
    font-size: 12px;
    color: #ffffff;
    text-decoration: none; 
    width: 140px;
}
.form_link a:hover{
    color: var(--green-color);
}

.form-submit{
    background: transparent;
    border: 1px solid #ffffff;
    color: #ffffff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
    cursor: pointer;
}
.form-submit:hover{
    border: 1px solid var(--green-color);
}

    </style>
</head>
<body>
    <div class="contain">
        <div id="wrapper">
            <form method="POST" action="{{route('user_store')}}" id="form-signin">
                @csrf
                <h1 class="form-heading">Đăng ký</h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input id="username" type="text" class="form-input" placeholder="Tên đăng ký" name="name" required>
                </div>
                <div class="form-group">
                    <i class="far fa-envelope"></i>
                    <input id="email" type="email" class="form-input" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input id="password" type="password" class="form-input" placeholder="Mật khẩu" name="password" required>
                    <div id="eye">
                        <i id="btnPassword" class="far fa-eye"></i>
                    </div>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input id="ipnConfrimPassword" type="password" class="form-input" placeholder="Nhập lại mật khẩu" name="confirm_password">
                    <p id="message"></p>
                    <div id="eye">
                        <i id="btnConfrimPassword" class="far fa-eye" ></i>
                    </div>
                </div>   
                    <p class="form_link"><a href="{{url('user/login')}}">Bạn muốn đăng nhập?</a></p>
                <button type="submit" class="form-submit">{{ __('Register') }}</button>
            </form>
        </div>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="./js/seepassword.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    
</script>

<script type="text/javascript">
    $('#password, #ipnConfrimPassword').on('keyup', function () {
  if ($('#password').val() == $('#ipnConfrimPassword').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>

<script type="text/javascript">
    
    const ipnElement = document.querySelector('#password')
    const ipnConfirmElement = document.querySelector('#ipnConfrimPassword')

    const btnElement = document.querySelector('#btnPassword')
    const btnConfirmElement = document.querySelector('#btnConfrimPassword')
   
    btnElement.addEventListener('click', function() {
      
      const currentType = ipnElement.getAttribute('type')
      
      ipnElement.setAttribute(
        'type',
        currentType === 'password' ? 'text' : 'password'
      )
    })

    btnConfirmElement.addEventListener('click', function() {
      
      const currentType = ipnConfirmElement.getAttribute('type')
      
      ipnConfirmElement.setAttribute(
        'type',
        currentType === 'password' ? 'text' : 'password'
      )
    })
</script>

</html>