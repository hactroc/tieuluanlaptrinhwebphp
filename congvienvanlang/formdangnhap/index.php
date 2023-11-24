<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Đăng nhập 
    </title>
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
            <h1>đăng nhập Tài Khoản</h1>
        </div>
        <div class="enter-information">
            <label for="username" class="label">Tên Đăng Nhập<sup>*</sup></label>
            <input id="username" name="username" type="text" placeholder="Tên đăng nhập">
            <span class="message"></span>
        </div>
        <div class="enter-information">
            <label for="password" class="label">Nhập mật khẩu<sup>*</sup></label>
            <input id="password" name="password" type="password" placeholder="Tên đăng nhập">
            <span class="message"></span>
        </div>
     
        </div>
        <button >đăng Nhập</button>
            <p> Bạn Chưa có tài khoản</p>
            <a href="../formdangky/index.php">Đăng Ký</a>
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
            checkForm.isPassword('#password', 6),
            checkForm.isUsername('#username'),
        ]
    });
</script>
</html>