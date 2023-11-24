
<?php
    // Check if the session variable 's_user' is set and not empty
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)) {
      // Extract the session variable 's_user' into individual variables
      extract($_SESSION['s_user']);
    }
?>

<div class="containerfull">
    <div class="bgbanner">ĐĂNG KÝ THÀNH VIÊN</div>
</div>

<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h1>DÀNH CHO BẠN</h1><br><br>
   
        </div>
        <div class="boxright">
            <h1>ĐĂNG KÝ</h1><br>
            <div class="containerfull mr30">
            <form action="index.php?pg=updateuser" method="post">
                 <div class="row">
                    <div class="col-25">
                       <label for="username">Tên đăng nhập</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="username" value="<?=$username?>" name="username" placeholder="Nhập tên đi">
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-25">
                       <label for="password">Mật khẩu</label>
                    </div>
                    <div class="col-75">
                       <input type="password" id="password" value="<?=$password?>" name="password" placeholder="Nhập mật khẩu..">
                    </div>
                 </div>
                
                