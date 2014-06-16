 <div class="container">

  <?php $attributes= array('class'=>'form-signin');?>
  <?php echo form_open("auth/login",$attributes);?>
  <h2 class="form-signin-heading">Please sign in</h2>
  <?php if(!empty($message)): ?>
  <div class="text-danger fade in"><?php echo $message;?></div>
<?php else: ?>
  <p class="text-info fade in">Please login with your username/email and password</p>
<?php endif; ?>
<div class="form-group">
  <input required="required" type="text" id="identity" name="identity" class="form-control" placeholder="Username or Email" autofocus>
  
  <input required="required" type="password" id="password" name="password" class="form-control" placeholder="Password">
</div>
<label class="checkbox">
  <input type="checkbox" name="remember" value="1" id="remember"> Remember me
</label>
<div class="form-group">
  <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Sign in</button>
</div>


<?php echo form_close();?>
</div> <!-- /container -->
</body>
</html>


