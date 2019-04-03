<link rel = "stylesheet" type = "text/css" href ="<?php echo base_url('assets/css/user.css');?>">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <br>
      <h4> Indtagram - Sebuah Website Mirip Instagram </h4>
      <br>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="konfirmasi password">
      <input type="submit" class="fadeIn fourth" value="Register">

    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo site_url('user/login'); ?>">Sudah Punya Akun? Login</a>
    </div>

  </div>
</div>
