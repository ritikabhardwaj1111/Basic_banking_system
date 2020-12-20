<html>
<head>
  <title> Home</title>
<style>
body{
  background-image:url("bg.jpg");
}
.header{
  padding: 20px 10px;
  text-align: left;
  height: 70px;
  width: 100%;
  position: fixed;
  font-family: Arial;
  left: 0px;
  top: 0px;
  padding-top: 0px;
  background-color:  black;
  display: grid;
  grid-template-columns: repeat(2,auto);
}
.footer {
position: fixed;
left: 0;
bottom: 0;
width: 100%;
color: white;
}

.header-right{
width: 60%;
float: right;
height: 27px;
display: block;
padding-top: 10px;
margin-left: 800px;
}
.header a:hover{
background-color: #f2f3f4;
}
.header a {
float: left;
color: blue;
padding: 12px;
text-decoration: none;
font-size: 18px;
line-height: 25px;
border-radius: 4px;
}
.header-link{
font-weight: bold;
}
.info{
  width: 350px;
  text-align: center;
  background-color: white;
  margin: 2px 870px auto;
  height: 450px;
  border-radius: 20px;
  background-color: black;
  box-shadow:   4px 4px 5px 6px #ffffff;
}
button{
  border-radius: 19px;
  height: 40px;
  width: 130px;
  background-image: linear-gradient(#00bfff , #9400d3);
}
.logo{
  border-radius: 50%;
  float: left;
  height: 55px;
  margin: 6 auto;
}
.logodiv{
  height: 70px;
  width: 70px;
}
* {box-sizing: border-box;}

.mySlides {display: none;}



.slideshow-container {
  max-width: 800px;
  margin: 100px auto;
  float: left;
  background-color: black;
  box-shadow:   4px 4px 5px 6px black;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  float: left;
}

.active {
  background-color: #717171;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

.slideImg{
  margin-right: 10px;
  border-radius: 30px;
}
</style>
</head>
<body>
  <div class="header">
    <div class="logodiv">
    <img src="logo2.jpg" class="logo" align="right"></img>
  </div>
      <div class="header-right">
    <nav>
      <a class="header-link" href="Home.php"> HOME </a>
      <a class="header-link" href="users.php"> ACCOUNTS </a>
      <a class="header-link" href="contactus.php"> CONTACT US </a>
    </nav>
  </div>
</div>
<br><br><br>
    <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="img0.jpg" class="slideImg" height="300px" width="800px">
    </div>
    <div class="mySlides fade">
      <img src="img000.jpg" class="slideImg" height="300px" width="800px">
    </div>
    <div class="mySlides fade">
      <img src="img0000.jpg" class="slideImg" height="300px" width="800px">
    </div><br><br>
    <div style="text-align:center; margin-left: 350px;">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000);
    }
    </script>
    </div>
    <br><br><div class="info">
      <br>
      <img src="money.jpg" height="200px" width="350px"><img>
     <font color="white" style="font-size:20px;"> <br><br><br> Send money instantly with EasyMoney<br>
      Simple & secure </font>
          <br><br><br>
          <button> Get Started </button>
    </div>
  </body>
  </html>
