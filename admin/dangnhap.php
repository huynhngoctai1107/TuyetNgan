<?php
    session_start();
    include("config/config.php");
    if (isset($_POST['dangnhap1'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM khach_hang WHERE email='" . $username . "' AND mat_Khau='" . $password . "' and vai_tro = 1  LIMIT 1   ";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $_SESSION['dangnhap1'] = $username;
            header("Location: index.php?action=trangchu&query=them");
        } else {
            header("Location: dangnhap.php ");
        }
    }
    ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- nav -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <style>
          body {
        margin: 0px auto;
        max-width: 100%;
    }
    
    header {
        width: 100%;
        height: auto;
        display: flex;
        margin-bottom: 20px;
        align-items: center;
        flex-direction: column;
    }
    
    .onnav {
        width: 95%;
        display: flex;
        justify-content: space-around;
        height: 9rem;
        align-items: center;
    }
    
    .logo {
        width: 25rem;
        height: 100%;
    }
    
    .logo img {
        width: 100%;
        height: 100%;
    }
    
    .timkiem {
        width: 35rem;
        height: 4rem;
        display: flex;
        justify-content: center;
    }
    
    .timkiem input {
        padding-left: 2rem;
        width: 90%;
        border: 1.4px solid black;
        border-right: none;
    }
    
    #timkiem {
        border: 1.4px solid black;
    width: 10% !important;
        border-left: none;
    }
    
    .dot {
        align-items: center;
        justify-content: center;
        display: flex;
        width: 30rem;
        height: 4rem;
    }
    
    .accout {
        display: flex;
    }
    
    .accout img {
        height: 4rem;
        margin: 0px 1rem;
    }
    
    .hien:hover ul {
        margin-top: 0rem;
        list-style-type: none;
        width: 10rem;
        display: block !important;
    }
    
    .hien:hover ul a {
        text-decoration: none;
        font-size: 1.1rem;
    }
    /* nav */
    
    .menu {
        background-color: #057A55;
        border-bottom: 1px solid black;
        width: 100%;
        height: 80px;
        text-align: center;
        position: relative;
        position: sticky;
        z-index: 10000;
        top: 0;
    }
    /* giữ thanh menu khi lăng chuột */
    
    .chua {
        width: 95%;
        margin-left: 2.5%;
        display: flex;
        justify-content: left;
    }
    
    .menuall {
        width: 85%;
        height: 100%;
        display: flex;
        margin-top: 0px;
        align-items: center !important;
        justify-content: left;
    }
    
    .menuall>li {
        margin-top: 20px;
        align-items: center;
        width: auto;
        height: auto;
        list-style-type: none;
        margin-left: 3%;
    }
    
    .menuall>li>a {
        font-family: 'Secular One', sans-serif;
        color: white;
        font-weight: 500;
        font-size: 140%;
    }
    
    .menuall>li>a>img {
        width: 110%;
        height: 30px;
    }
    
    .menuall>li>a {
        text-decoration: none;
    }
    
    .menuall>li:hover ul {
        display: block;
    }
    
    .menuall>li>ul {
        margin-top: 1%;
        display: none;
        background-color: white;
        border: 2px solid black;
        width: auto;
        height: auto;
        list-style-type: none;
    }
    
    .menuall>li>ul>li>a {
        text-decoration: none;
    }
    
    marquee {
        font-weight: 600;
        font-family: 'Kanit', sans-serif;
        color: #333333;
    }
    
    .banner {
        width: 100%;
        height: auto;
    }
    
    .banner a {
        width: 100%;
        height: auto;
    }
    
    .banner img {
        width: 100%;
        height: 100%;
    }
    </style>
     


   
<style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        * {
            box-sizing: border-box;
        }
        
   
        
        h1 {
            font-weight: bold;
            margin: 0;
        }
        
        h2 {
            text-align: center;
        }
        
        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }
        
        span {
            font-size: 12px;
        }
        
        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }
        
        #button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }
        
        #button:active {
            transform: scale(0.95);
        }
        
        #button:focus {
            outline: none;
        }
        
        #button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }
        
        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }
        
        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }
        
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }
        
        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }
        
        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }
        
        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }
        
        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }
        
        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }
        
        @keyframes show {
            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }
        
        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }
        
        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }
        
        .overlay {
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, #FF4B2B, #FF416C);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }
        
        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }
        
        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }
        
        .overlay-left {
            transform: translateX(-20%);
        }
        
        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }
        
        .overlay-right {
            right: 0;
            transform: translateX(0);
        }
        
        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }
        
        .social-container {
            margin: 20px 0;
        }
        
        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
        
       
    </style>
     <main style="display: flex; justify-content: center; margin: 100px 0px 50px 0px ;">
   
        <div class="container" id="container">
             
            <div class="form-container sign-in-container">
                <form action="" method="post">
                    <h1>Đăng nhập</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>hoặc sử dụng tài khoản của bạn</span>
                    <input type="text" name="email" placeholder="Tên tài khoản " />
                    <input type="password" name="password" placeholder="Mật khẩu" />
                    <a href="#">Quên mật khẩu?</a>
                    <button id="button" name="dangnhap1">Đăng nhập</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    
                    <div class="overlay-panel overlay-right">
                        <h1>Chào bạn!</h1>
                        <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                     </div>
                </div>
            </div>
        </div>


    </main>
    <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>