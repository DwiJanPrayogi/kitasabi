<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/logincss.css">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="<?php echo base_url();?>assets/js/login.js"></script>

</head>
<body>
  <div class="w3-bar w3-white w3-border-bottom w3-xlarge">
    <a href="<?php echo base_url();?>index.php" class="w3-bar-item w3-button w3-dark-grey w3-hover-dark-grey w3-text-white"><b><i class="fa fa-handshake-o w3-margin-right"></i>KitaSabi.id</b></a>
    <?php 
    if($this->session->userdata('login?')==TRUE){ ?>
 <a href="<?php echo base_url('index.php/user/do_logout'); ?>" class="w3-bar-item w3-button w3-right w3-dark-grey w3-hover-dark-grey w3-text-white"><i class="fa fa-check-square-o"></i> Logout</a>
    <?php 
    } else {
    ?>
    <a href="<?php echo base_url();?>index.php/user" class="w3-bar-item w3-button w3-right w3-dark-grey w3-hover-dark-grey w3-text-white"><i class="fa fa-check-square-o"></i> Login</a>
  <?php }?>
  </div>

  <div class="login-reg-panel">
    <div class="login-info-box">
      <h2>Cancel ?</h2>
      <label id="label-register" for="log-reg-show">CANCEL</label>
      <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
    </div>
    
    <div class="register-info-box">
      <h2>Edit Your Profil</h2>
      <label id="label-login" for="log-login-show">EDIT</label>
      <input type="radio" name="active-log-panel" id="log-login-show">
      <font color="green"><?php echo $this->session->flashdata('update');?></font>
    </div>
    
    <div class="white-panel">
      <div class="login-show">

        <h3 style="text-align: center;">Your Account Info</h3>
        <img style="max-width: 100px; max-height: 100px; margin-left: auto; margin-right: auto; display: block;" src="<?php echo base_url();?>assets/img/image.png">
        <h4><?php echo $this->session->userdata('nama') ?></h4>
        <h4><?php echo $this->session->userdata('email') ?></h4>
        <h4><?php echo $this->session->userdata('rekening') ?></h4>
        <h4><?php echo $this->session->userdata('alamat') ?></h4>
      </div>
      <div class="register-show">
        <h3 style="text-align: center;">Edit Your Profil</h3>
        <form role='form' action="<?php echo base_url('index.php/user/edit_profil');?>" method="post" >
        <input type="text" placeholder="Nama Lengkap" value="<?php echo $this->session->userdata('nama') ?>" name="nama" >
        <input type="email" placeholder="Email" value="<?php echo $this->session->userdata('email') ?>" name="email">
        <input type="password" placeholder="Password" value="<?php echo $this->session->userdata('password') ?>" name="password">
        <input type="text" placeholder="No Rekening" value="<?php echo $this->session->userdata('rekening') ?>" name="rekening">
        <input type="text" placeholder="Alamat" value="<?php echo $this->session->userdata('alamat') ?>" name="alamat">
        <button class="w3-button w3-round-xxlarge w3-dark-grey">Confirm</button>
      </form>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('.login-info-box').fadeOut();
      $('.login-show').addClass('show-log-panel');
    });


    $('.login-reg-panel input[type="radio"]').on('change', function() {
      if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
      }
      else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
      }
    });

  </script>
</body>

</html>