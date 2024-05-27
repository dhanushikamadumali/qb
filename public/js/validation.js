// Admin Log in
// $(document).on("submit","#LoginFrm", function(){
//     $.post("", $(this).serialize(), function(data){
//        if(data.res == "invalid")
//        {
//          Swal.fire(
//            'Invalid',
//            'Please input valid email / password',
//            'error'
//          )
//        }
//        else if(data.res == "success")
//        {
//          $('body').fadeOut();
//          window.location.href='home.php';
//        }
//     },'json');
 
//     return false;
//  });
 
 $(document).ready(function(){///when the document is load
    $("#LoginFrm").submit(function (){/////when the submit the form
        
        let username=$("#username").val();///get the uname value
        let password=$("#pass").val();//// get the password value

        let patUname=/^([a-zA-z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,6})+$/;////valid uname pattern
        
        if((username=="")&&(password=="")){/// if username password empty
            $('#username,#pass').removeClass('is-valid').addClass('is-invalid');
            $('#username').focus();
            return false;
            // $("#alertmsg").html("Username and Password Cannot be Empty!!!");
            // $("#alertmsg").addClass("alert alert-danger");
            // return false;
        }
       
        if(username==""){/////if uname is empty
            $("#alertmsg").html("Username Cannot be Empty!!!");
            $("#alertmsg").addClass("alert alert-danger");
            $("#username").focus();
            return false;
        }
        if(username !==""){/////if uname is not entered
            if(!username.match(patUname)){/////if check valid username
                $("#alertmsg").html("Invalid Username Please enter email");
                $("#alertmsg").addClass("alert alert-danger");
                $("#username").focus();
                return false;
            }
        }
        if(password==""){////if password empty
                $("#alertmsg").html("Password Cannot be Empty!!!");
                $("#alertmsg").addClass("alert alert-danger");
                $("#pass").focus();
                return false;
        }
       
        
    });

});
