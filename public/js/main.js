// product list
$(document).ready(function () {
    $('.content-list-item-body').slick({
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: false,
        arrows: true,
        prevArrow:
            "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:
            "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
});

// backtop
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.backtop').fadeIn();
        } else {
            $('.backtop').fadeOut();

        }
    });
    $(".backtop").click(function () {
        $('html, body').animate({ scrollTop: 0 },
            500);
    });
});


// footer-contact
// $(document).ready(function () {
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 0) {
//             $('#footer-contact').fadeIn();
//         } else {
//             $('#footer-contact').fadeOut();
//         }
//     });
// });

// chatbox
$(function () {
    var INDEX = 0;
    $("#chat-submit").click(function (e) {
        e.preventDefault();
        var msg = $("#chat-input").val();
        if (msg.trim() == '') {
            return false;
        }
        generate_message(msg, 'self');
        var buttons = [
            {
                name: 'Existing User',
                value: 'existing'
            },
            {
                name: 'New User',
                value: 'new'
            }
        ];
        setTimeout(function () {
            generate_message(msg, 'user');
        }, 1000)

    })

    function generate_message(msg, type) {
        INDEX++;
        var str = "";
        str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg " + type + "\">";
        str += "          <span class=\"msg-avatar\">";
        str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
        str += "          <\/span>";
        str += "          <div class=\"cm-msg-text\">";
        str += msg;
        str += "          <\/div>";
        str += "        <\/div>";
        $(".chat-logs").append(str);
        $("#cm-msg-" + INDEX).hide().fadeIn(300);
        if (type == 'self') {
            $("#chat-input").val('');
        }
        $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight }, 1000);
    }

    function generate_button_message(msg, buttons) {
        /* Buttons should be object array 
          [
            {
              name: 'Existing User',
              value: 'existing'
            },
            {
              name: 'New User',
              value: 'new'
            }
          ]
        */
        INDEX++;
        var btn_obj = buttons.map(function (button) {
            return "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\"" + button.value + "\">" + button.name + "<\/a><\/li>";
        }).join('');
        var str = "";
        str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg user\">";
        str += "          <span class=\"msg-avatar\">";
        str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
        str += "          <\/span>";
        str += "          <div class=\"cm-msg-text\">";
        str += msg;
        str += "          <\/div>";
        str += "          <div class=\"cm-msg-button\">";
        str += "            <ul>";
        str += btn_obj;
        str += "            <\/ul>";
        str += "          <\/div>";
        str += "        <\/div>";
        $(".chat-logs").append(str);
        $("#cm-msg-" + INDEX).hide().fadeIn(300);
        $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight }, 1000);
        $("#chat-input").attr("disabled", true);
    }

    $(document).delegate(".chat-btn", "click", function () {
        var value = $(this).attr("chat-value");
        var name = $(this).html();
        $("#chat-input").attr("disabled", false);
        generate_message(name, 'self');
    })

    $("#chat-circle").click(function () {
        $("#chat-circle").toggle('scale');
        $(".chat-box").toggle('scale');
    })

    $(".chat-box-toggle").click(function () {
        $("#chat-circle").toggle('scale');
        $(".chat-box").toggle('scale');
    })

})


// const eyeIcon = document.querySelector(".eye-icon");
// const pwShowHide = document.querySelector(".input-field");
// const pwField = document.querySelector(".form-control");
// eyeIcon.addEventListener("click", function() {
//     if (pwField.type === "password") {
//         pwField.type = "text";
//         pwShowHide.forEach(icon => {
//             icon.classList.replace("fa-eye-slash", "fa-eye");
//         })
//     } else {
//         pwField.type = "password";

//         pwShowHide.forEach(icon => {
//             icon.classList.replace("fa-eye", "fa-eye-slash");
//         })
//     }
// })

const container = document.querySelector(".container-sm"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password");


//   đổi icon và ẩn hiện mật khẩu
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwField => {
            console.log(pwField)
            if (pwField.type === "password") {
                pwField.type = "text";
                pwShowHide.forEach(icon => {
                    icon.classList.replace("fa-eye-slash", "fa-eye");
                })
            } else {
                pwField.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("fa-eye", "fa-eye-slash");
                })
            }
        })
    })
})

// chọn form để điền thông tin
// signUp?.addEventListener("click", () => {
//     container.classList.add("active");
// });
// login?.addEventListener("click", () => {
//     container.classList.remove("active");
// });



//đưa dữ liệu vài local storage
// const dangky = e => {
//     let email = document.getElementById('email').value,
//         password = document.getElementById('password').value,
//         password2 = document.getElementById("password2").value;

//     let formData = JSON.parse(localStorage.getItem('formData')) || [];

//     let exist = formData.length &&
//         JSON.parse(localStorage.getItem('formData')).some(data =>
//             data.email.toLowerCase() == email.toLowerCase() &&
//             data.password.toLowerCase() == password.toLowerCase()
//         );
//     if (!exist && (password == password2)) {
//         formData.push({ email, password });
//         localStorage.setItem('formData', JSON.stringify(formData));
//         document.querySelector('form').reset();
//         document.getElementById('fullname').focus();
//         alert("Đã tạo thành công bạn có thể đăng nhập");
//     }
//     else {
//         alert("Tạo tài khoản không thành công. Vui lòng kiểm tra thông tin và mật khẩu đã nhập");
//     }
//     e.preventDefault();
// }

// function signIn(e) {
//     let email1 = document.getElementById('email1').value,
//         password1 = document.getElementById('password1').value;

//     let formData = JSON.parse(localStorage.getItem('formData')) || [];

//     let exist = formData.length &&
//         JSON.parse(localStorage.getItem('formData')).some(data => data.email.toLowerCase() == email1 && data.password.toLowerCase() == password1);
//     if (!exist) {
//         alert("Bạn đăng nhập không thành công");
//     }
//     else {
//         alert("Bạn đăng nhập thành công");
//     }
//     e.preventDefault();
// }


// const register = document.querySelector('.heading-regis') 
// console.log(register);
// const registerLink = document.querySelector('.signup-link')
// const modal = document.querySelector('.signup')
// let checkRegis = (localStorage.getItem('regis') ) || 0;
// // console.log(checkRegis)
// if(checkRegis == 1){
//         // console.log(window.location);
//         if(window.location.pathname == '/login-registration.php'){
//         registerLink?.click();
//         localStorage.setItem('regis',0);
//         }
// }
// register.addEventListener('click', function(e){
//     e.preventDefault()
//     if(!registerLink){
//         window.location.href = 'login-registration.php';
//         localStorage.setItem('regis',1);

//     }else{
 
//         registerLink?.click()
//     }
// })




