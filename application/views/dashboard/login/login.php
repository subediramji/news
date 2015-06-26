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
    <?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
    <div class="alert alert-danger" style="color: red;" >
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
<?php echo form_open('login/validate'); ?>
<ul>
<li><?php echo form_error('users'); ?>
    <span class="un"><i class="fa fa-user"></i></span><input name="username" type="text" class="text" placeholder="User Name Or Email"/></li>
<li>
    <span class="un"><i class="fa fa-lock"></i></span><input type="password" name="password" required class="text" placeholder="User Password"/></li>
<li>
<input type="submit" value="LOGIN" class="btn">
</li>
<li><div class="span"><span class="ch"><input type="checkbox" name="rme" id="r"> <label for="r">Remember Me</label> </span> <span class="ch"><a href="#">Forgot Password?</a></span></div></li>
</ul>
<?php echo form_close(); ?>
<div class="social">
<a href="#"><div class="fb"><i class="fa fa-facebook-f"></i> &nbsp; Login With Facebook</div></a>
<a href="#"><div class="tw"><i class="fa fa-twitter"></i> &nbsp;  Login With Twitter</div></a>
</div>
</div><br/>
<div class="sign">
<div class="need">Need new account ?</div>
<div class="up"><a href="#">Register </a></div>
</div>
</div>
    <div class="form" id="registration" style="display: none;">
<div class="header"><h2> Register User</h2></div>
<div class="login">
<?php echo form_open('login/register'); ?>
<ul>
<li><?php echo form_error('user'); ?>
    <span class="un"><i class="fa fa-user"></i></span><input name="user" type="text" required class="text" placeholder="User Name"/></li>
<li><?php echo form_error('fname'); ?>
    <span class="un"><i class="fa fa-info"></i></span><input type="text" name="fname" required class="text" placeholder="First Name"/></li>
<li><?php echo form_error('lname'); ?>
    <span class="un"><i class="fa fa-info-circle"></i></span><input type="text" name="lname" required class="text" placeholder="Last Name"/></li>
<li><?php echo form_error('email'); ?>
    <span class="un"><i class="fa fa-envelope"></i></span><input type="email" name="email" required class="text" placeholder="Email"/></li>
<li><?php echo form_error('password'); ?>
    <span class="un"><i class="fa fa-lock"></i></span><input type="password" name="password" required class="text" placeholder="User Password"/></li>
<li>
<input type="submit" value="REGISTER" class="btn">
</li>
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
        if($(this).attr('id')==="slog")
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
    

    </script>-->
</body>
</html>