<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/indexcss.css">

<body class="w3-light-grey">
  <!-- Navigation Bar -->
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
  <!-- Header -->
  <div class="hero-image">
    <div class="hero-text">
      <h1>Chase the vision, not the money, the money will end up following you.</h1>
      <p>Tony Hsieh, Zappos CEO</p>
    </div>
  </div>

  <div class="w3-bar w3-dark-grey w3-border-bottom w3-xlarge navbar">
    <a href="#home">Home</a>
    <div class="subnav">
      <button class="subnavbtn">Category <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="#company">Technology</a>
        <a href="#team">Automotive</a>
        <a href="#careers">Business</a>
        <a href="#careers">Food</a>
        <a href="#careers">Games</a>
      </div>
    </div> 
    <a href="#contact">Post Your Campaign</a>
    <?php 
    if($this->session->userdata('login?')==TRUE && $this->session->userdata('role')=="user"){ ?>
      <a href="<?php echo base_url('index.php/user/get_profile'); ?>">Profile</a>
    <?php }elseif ($this->session->userdata('login?')==TRUE && $this->session->userdata('role')=="admin"){?>
    <a href="#contact">Halaman Admin</a>
    <?php } ?>
  </div>

  <!-- Page content -->
  <div class="w3-content" style="max-width:1100px;">

    <!-- Good offers -->
    <div class="w3-container w3-margin-top">
      <h3>Good Stuff Right Now</h3>
      <h6>Help Your Local Product</h6>
    </div>
    <div class="w3-row-padding w3-text-white w3-large">
      <div class="w3-third w3-margin-bottom w3-white w3-border-dark-grey w3-panel w3-border w3-round-xlarge">
        <img src="<?php echo base_url();?>assets/img/example1.jpg" alt="Norway" style="height: 200px ;max-height:200px; max-width:300px; margin-left: auto; margin-right: auto; display: block;">
        <div class="w3-container w3-white w3-round-xlarge">
          <h3>Cool Backpack</h3>
          <h6 class="w3-opacity">Target : Rp. 20.000.000,00 </h6>
          <p>Terkumpul : Rp. 5.000.000,00 </p>
          <div class="w3-light-grey">
            <div class="w3-container w3-dark-grey w3-center" style="width:25%">25%</div>
          </div>
          <p></p>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-left w3-margin-bottom">Detail</button>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-right w3-margin-bottom">Donate</button>
        </div>
      </div>
      <div class="w3-third w3-margin-bottom w3-white w3-border-dark-grey w3-panel w3-border w3-round-xlarge">
        <img src="<?php echo base_url();?>assets/img/example2.jpg" alt="Norway" style="height: 200px ;max-height:200px; max-width:300px; margin-left: auto; margin-right: auto; display: block;">
        <div class="w3-container w3-white w3-round-xlarge">
          <h3>PoweBank Backpack</h3>
          <h6 class="w3-opacity">Target : Rp. 20.000.000,00 </h6>
          <p>Terkumpul : Rp. 10.000.000,00 </p>
          <div class="w3-light-grey">
            <div class="w3-container w3-dark-grey w3-center" style="width:50%">50%</div>
          </div>
          <p></p>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-left w3-margin-bottom">Detail</button>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-right w3-margin-bottom">Donate</button>
        </div>
      </div>
      <div class="w3-third w3-margin-bottom w3-white w3-border-dark-grey w3-panel w3-border w3-round-xlarge">
        <img src="<?php echo base_url();?>assets/img/example3.jpg" alt="Norway" style="height: 200px ;max-height:200px; max-width:300px; margin-left: auto; margin-right: auto; display: block;">
        <div class="w3-container w3-white w3-round-xlarge">
          <h3>Electronic Bicycle</h3>
          <h6 class="w3-opacity">Target : Rp. 50.000.000,00 </h6>
          <p>Terkumpul : Rp. 20.000.000,00 </p>
          <div class="w3-light-grey">
            <div class="w3-container w3-dark-grey w3-center" style="width:40%">40%</div>
          </div>
          <p></p>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-left w3-margin-bottom">Detail</button>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-right w3-margin-bottom">Donate</button>
        </div>
      </div>
      <div class="w3-third w3-margin-bottom w3-white w3-border-dark-grey w3-panel w3-border w3-round-xlarge">
        <img src="<?php echo base_url();?>assets/img/example4.jpg" alt="Norway" style="height: 200px ;max-height:200px; max-width:300px; margin-left: auto; margin-right: auto; display: block;">
        <div class="w3-container w3-white w3-round-xlarge">
          <h3>Cool Key</h3>
          <h6 class="w3-opacity">Target : Rp. 100.000.000,00 </h6>
          <p>Terkumpul : Rp. 75.000.000,00 </p>
          <div class="w3-light-grey">
            <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
          </div>
          <p></p>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-left w3-margin-bottom">Detail</button>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-right w3-margin-bottom">Donate</button>
        </div>
      </div>
      <div class="w3-third w3-margin-bottom w3-white w3-border-dark-grey w3-panel w3-border w3-round-xlarge">
        <img src="<?php echo base_url();?>assets/img/example5.jpg" alt="Norway" style="height: 200px ;max-height:200px; max-width:300px; margin-left: auto; margin-right: auto; display: block;">
        <div class="w3-container w3-white w3-round-xlarge">
          <h3>Unicorn Robot</h3>
          <h6 class="w3-opacity">Target : Rp. 30.000.000,00 </h6>
          <p>Terkumpul : Rp. 35.000.000,00 </p>
          <div class="w3-light-grey">
            <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
          </div>
          <p></p>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-left w3-margin-bottom">Detail</button>
          <button class="w3-button w3-round-xxlarge w3-dark-grey w3-right w3-margin-bottom">Donate</button>
        </div>
      </div>
    </div>

    <!-- Explore Nature -->
    <h3 style="text-align: center;">How To Donate</h3>
    <div class="timeline">
      <div class="container left">
        <div class="content">
          <h2>1. Choose The Campaign</h2>
          <p>Pilihlah Kampanye yang anda ingin donasi</p>
        </div>
      </div>
      <div class="container right">
        <div class="content">
          <h2>2. Choose How Much You Want to Donate</h2>
          <p>Setelah anda telah memasukan jumlah donasi, anda harus mentransfer dengan jumlah yang sama</p>
        </div>
      </div>
      <div class="container left">
        <div class="content">
          <h2>3. The Inventor Verified</h2>
          <p>Sang inventor memverifikasi di sistem bahwa donasi telah masuk</p>
        </div>
      </div>
    </div>

    <!-- Contact -->
    <div class="w3-container">
      <h2>Contact</h2>
      <p>Let us book your next trip!</p>
      <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
      <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
      <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>

    <!-- End page content -->
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-center w3-opacity w3-margin-bottom">
    <h5>Find Us On</h5>
    <div class="w3-xlarge w3-padding-16">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>

  <script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
