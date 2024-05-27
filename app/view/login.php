<!DOCTYPE html>
<html lang="en">
<head>
    <title>Questions Bank LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include_once 'includes/logincss.php' ?>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(<?php echo BASEURL ?>/public/assets/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                        
                    </span>
                </div>

                <form method="POST" action="<?php echo BASEURL ?>/LoginController/userLogin" class="login100-form validate-form" enctype="multipart/form-data">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="username" placeholder="Enter email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn" align="right">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php  include_once 'includes/loginscript.php'?>
</body>
<script>
     
//      $("#addbtn").on("click", function(e){
 
//  e.preventDefault();
//      var formData = new FormData($("#Frm")[0]);
//      alert();

//      $.ajax({
//        type:"post",
//        dataType:"json",
//        url: "../../app/controller/LoginController.php",
//        data:formData,
//        processData: false,
//        contentType: false,
//        async: true,
//        cache: false,
//        success:function(data){
//          console.log(data);
//        }

//      });

//    });
   </script>
</html>