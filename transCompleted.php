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
  .transaction{
    background-color: black;
    height: 200px;
    width: 700px;
    margin: 50px 250px auto;
    box-shadow:   4px 4px 6px 6px black;
    text-align: center;
  }
  input[type=text],[type=number]{
    width:20%;
    border-radius: 30px;
  }
  button{
    border-radius: 19px;
    height: 40px;
    width: 130px;
    background-image: linear-gradient(#00bfff , blue);
  }
  .message{
    height: 300px;
    width: 600px;
    background-color: #002147;
    margin: 70px 350px auto;
    box-shadow:   4px 4px 6px 6px white;
    color: white;
    text-align: center;
    font-size: 18px;
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
    <br>
    </div>
    <br><br><br>
    <div class="message">
      <br><br><br><br>

        <b>   Transaction successful !
            <br>
            Send to another user <br><br>
</b>
            <button><a href="users.php"> Send </a> </button>
      <div>
  </head>
</body>
