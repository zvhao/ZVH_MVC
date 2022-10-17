<?php

use app\core\forms\Form;

$form = new Form();
?>

<!-- body -->
<div class="container-fluid d-flex justify-content-center p-5 bg-login-regis">
    <div class="container-sm">


        <!-- Registration Form -->
        <div class="form signup">
            <span class="login-title">Đăng ký</span>

            <?php $form->begin(BASE_URL . "/register", 'post', 'register') ?>
            <!-- <div class="input-field">
                                <input type="text" name="fullname" id="fullname" placeholder="Nhập tên của bạn" >
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" placeholder="Nhập email của bạn" >
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="input-field">
                                <input type="text" name="tel" id="tel" placeholder="Nhập số điện thoại" >
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" id="password" class="password" placeholder="Tạo mật khẩu"
                                    >
                                <i class="fa-solid fa-lock"></i>
                                <i class="fa-solid fa-eye-slash eye-icon showHidePw"></i>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password2" id="password2" class="password"
                                    placeholder="Nhập lại mật khẩu" >
                                <i class="fa-solid fa-lock"></i>
                                <i class="fa-solid fa-eye-slash eye-icon showHidePw"></i>
                                
                            </div>

                            <div class="input-field button">
                                <input type="submit" value="Đăng ký ngay">
                            </div> -->
            <?php echo $form->field($params['model'], "fullName", 'fa-user') ?>
            <?php echo $form->field($params['model'], "email", 'fa-envelope') ?>
            <?php echo $form->field($params['model'], "tel", 'fa-phone') ?>
            <?php echo $form->field($params['model'], "password", 'fa-lock')->passwordField() ?>
            <?php echo $form->field($params['model'], "password2", 'fa-lock')->passwordField() ?>

            <div class="input-field button">
                <button type="submit">Đăng ký</button>
            </div>
            <?php $form->end() ?>

            <div class="login-signup">
                <span class="text">Đã có tài khoản?
                    <a href="<?= BASE_URL . '/login' ?>" class="text login-link">Đăng nhập ngay
                </span>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="facebook">
                    <i class="fa-brands fa-facebook"></i>
                    <span>Đăng nhập với Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="google">
                    <img src="http:\\localhost\nlcs_mvc/public/img/icon/Google__G__Logo.svg.png" alt="">
                    <span>Đăng nhập với Google</span>
                </a>
            </div>
        </div>
    </div>

</div>

</div>