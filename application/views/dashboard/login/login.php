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
<li><div class="span"><span class="ch"><input type="checkbox" name="rme" id="r"> <label for="r">Remember Me</label> </span> <span class="ch"><!--<a href="#">Forgot Password?</a>--></span></div></li>
</ul>
<?php echo form_close(); ?>
<div class="social">
<a href="#"><div class="fb"><i class="fa fa-facebook-f"></i> &nbsp; Login With Facebook</div></a>
<a href="#"><div class="tw"><i class="fa fa-twitter"></i> &nbsp;  Login With Twitter</div></a>
</div>
</div> <br/>
</div>
</body>
</html>