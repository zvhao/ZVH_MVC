<?php

use app\core\forms\Form;

$form = new Form();
?>

<!-- body -->
<div class="container-fluid d-flex justify-content-center p-5 bg-login-regis">
    <div class="container-sm">


        <!-- Login Form -->
        <div class="form login">
            <span class="login-title">Đăng nhập</span>

            <?php $form->begin("", 'post', 'login') ?>
            <!-- <div class="input-field">
                    <input type="email" name="email1" id="email1" placeholder="Nhập email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password1" id="password1" class="password" placeholder="Nhập mật khẩu">
                    <i class="fa-solid fa-lock"></i>
                    <i class="fa-solid fa-eye-slash eye-icon showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Ghi nhớ tôi</label>
                    </div>

                    <a href="#" class="text">Quên mật khẩu?</a>
                </div>

                <div class="input-field button">
                    <button type="submit">Đăng nhập ngay</button>
                </div> -->
                <?php echo $form->field($params['model'], "tel", 'fa-phone') ?>
                <?php echo $form->field($params['model'], "password", 'fa-lock')->passwordField() ?>
                <div class="input-field button">
                    <button type="submit">Đăng nhập</button>
                </div>

            <?php $form->end() ?>

            <div class="login-signup">
                <span class="text">Bạn chưa có tài khoản?
                    <a href="<?= BASE_URL . '/register' ?>" class="text signup-link">Đăng ký ngay</a>
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