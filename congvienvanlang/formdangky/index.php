<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Đăng ký - Nguyễn Trọng Tuệ</title>
</head>
<style>
body {
  background-image: url('../images/18_  Công viên văn lang.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
    <form action="" class="form" id="form">
        <div class="title">
            <i class="fa-solid fa-user"></i>
            <h1>đăng ký</h1>
        </div>
        <div class="enter-information">
            <label for="fullname" class="label">Tên đăng nhập<sup>*</sup></label>
            <input id="fullname" name="fullname" type="text" placeholder="Tên đăng nhập">
            <span class="message"></span>
        </div>
        <div class="enter-information">
            <label for="email" class="label">Email<sup>*</sup></label>
            <input id="email" name="email" type="text" placeholder="Email của bạn">
            <span class="message"></span>
        </div>
        <div class="enter-information">
            <label for="password" class="label">Nhập mật khẩu<sup>*</sup></label>
            <input id="password" name="password" type="password" placeholder="Tên đăng nhập">
            <span class="message"></span>
        </div>
        <div class="enter-information">
            <label for="phone" class="label">Số điện thoại<sup>*</sup></label>
            <input id="phone" name="phone" type="text" placeholder="Tên đăng nhập">
            <span class="message"></span>
        </div>
        <div class="enter-information">
            <label for="username" class="label">Họ và tên<sup>*</sup></label>
            <input id="username" name="username" type="text" placeholder="Tên đăng nhập">
            <span class="message"></span>
        </div>
        <button  type="submit">đăng ký</button>
        <hr>
        <p>Khi click nút đăng ký, bạn đã đồng ý với <b>thỏa thuận sử dụng</b> của chúng tôi</p>
        <hr>
        <div class="dangnhapkhac">           
            <p>Bạn đã có tài khoản</p>
            <a href="../formdangnhap/index.php">Đăng nhập</a> 
             <a href="../layouts/main.php" >Trang Chủ</a>
           
        </div>
    </form>
</body>
<script src="app.js"></script>
<script>
    checkForm({
        form: '#form',
        rules: [
            checkForm.isResquired('#fullname'),
            checkForm.isEmail('#email'),
            checkForm.isPassword('#password', 6),
            checkForm.isPhone('#phone'),
            checkForm.isUsername('#username'),
        ]
    });
</script>
</html>