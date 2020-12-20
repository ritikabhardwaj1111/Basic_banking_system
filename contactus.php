<html>
<head>
  <style>
  body{
    background-image:url("bg.jpg");
  }
  .header{
    padding: 20px 10px;
    text-align: left;
    height: 50px;
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
  table{
    background-color: black;
    color:   #f0f3f4 ;
    height: 90px;
    width: 700px;
    text-align: center;
    border-spacing: 0px;
    border-color: black;
    box-shadow:   4px 4px 6px 6px black;
    margin: 50px 250px auto;
  }
  th{
    color: #2874a6;
  }

  input[type=text]{
    width:50%;
    border-radius: 30px;
    background-color:  #2874a6;
    color: white;
  }
  textarea{
    background-color:  #2874a6;
    color: white;
  }
  button{
    border-radius: 19px;
    height: 40px;
    width: 130px;
    background-image: linear-gradient(#00bfff , blue);
  }
  .contact{
    background-color:  	black;
    height: 400px;
    width: 400px;
    border-radius: 19px;
    margin:5px auto;
    text-align: center;
      box-shadow:   4px 4px 6px 6px white;
  }
  button:hover{
      background-image: linear-gradient(#00bfff , #9400d3);
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
    <br><br><br><br><br>
    <div class="contact"><br>
    <h1><font color="white">  Leave a message</h1><br>
    <form>
      Name <input type="text"><br><br>
      Email <input type="text"><br><br>
      Message <br>
         <textarea> </textarea><br><br><br>
         <button type="sumbit" onclick="alert('Message Sent. We will get back to you within 24 hours')"> Send </button>
    </div>

    </body>
    </html>
