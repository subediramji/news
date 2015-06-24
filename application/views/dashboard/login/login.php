<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url();?>assets/view/css/loginn.css">
</head>
<body>
<div class="form" id="login">
<div class="header"><h2>Sign In</h2></div>
<div class="login">
<?php echo form_open('dashboard/login'); ?>
<ul>
<li>
<span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="User Name Or Email"/></li>
<li>
<span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text" placeholder="User Password"/></li>
<li>
<input type="submit" value="LOGIN" class="btn">
</li>
<li><div class="span"><span class="ch"><input type="checkbox" id="r"> <label for="r">Remember Me</label> </span> <span class="ch"><a href="#">Forgot Password?</a></span></div></li>
</ul>
<?php echo form_close(); ?>
<div class="social">
<a href="#"><div class="fb"><i class="fa fa-facebook-f"></i> &nbsp; Login With Facebook</div></a>
<a href="#"><div class="tw"><i class="fa fa-twitter"></i> &nbsp;  Login With Twitter</div></a>
</div>
</div><br/>
<div class="sign">
<div class="need">Need new account ?</div>
<div class="up"><a href="#">Create </a></div>
</div>
</div>
    <div class="form" id="registration" style="display: none;">
<div class="header"><h2> Register User</h2></div>
<div class="login">
<?php echo form_open('dashboard/register'); ?>
<ul>
<li>
<span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="User Name Or Email"/></li>
<li>
<span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text" placeholder="User Password"/></li>
<li>
<input type="submit" value="LOGIN" class="btn">
</li>
<li><div class="span"><span class="ch"><input type="checkbox" id="r"> <label for="r">Remember Me</label> </span> <span class="ch"><a href="#">Forgot Password?</a></span></div></li>
</ul>
<?php echo form_close(); ?>
<div class="social">
<a href="#"><div class="fb"><i class="fa fa-facebook-f"></i> &nbsp; Login With Facebook</div></a>
<a href="#"><div class="tw"><i class="fa fa-twitter"></i> &nbsp;  Login With Twitter</div></a>
</div>
</div><br/>
<div class="sign">
<div class="need">Already have a account ?</div>
<div class="up"><a href="#" id="slog">Sign Up</a></div>
</div>
</div>
    <script src="<?php echo base_url(); ?>assets/view/js/jquery.js"></script>
    <script>
  $(document).ready(function(){
      
      
    $(".up a").click(function(){
        if($(this).attr('id')=="slog")
        {$('#login').show();
        $('#registration').hide();
            
        }else{
            $('#login').hide();
        $('#registration').show();
        }
        //alert("The paragraph was clicked.");
        
    });
});

   // email=$(this).attr('id');
    

    </script>
</body>
</html>