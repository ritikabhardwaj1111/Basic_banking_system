<html>
<head>
  <title> Users Details </title>
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
.users{
  margin: 30px 270px auto;
}
table{
  background-color: black;
  color:   #f0f3f4 ;
  height: 400px;
  width: 700px;
  text-align: center;
  border-spacing: 0px;
  border-color: black;
  box-shadow:   4px 4px 5px 6px #888888;
}
button{
  background-color: green;
  width: 80px;
  height: 20px;
  border-radius: 20px;
  outline: none;
  border: green;
}
th{
  color: #2874a6;
}
tr:hover{
  background-color: #002147 ;
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
    <font color="white">  <h1 style="text-align: center;"> User account list </h1> </font>

<div class="users">
<?php
include_once('connectbank.php');
$qry = "SELECT * FROM tbuser";
$result = mysqli_query($conn,$qry);
?>
<table>
  <?php
echo"<tr>";
echo"<th>"."ID"."</th>";
echo"<th>"."Name"."</th>";
echo"<th>"."Email"."</th>";
echo"<th>"."Balance"."</th>";
echo"<th>"."Select"."</th>";
echo"</tr>";
while($row = mysqli_fetch_array($result))
{
  ?>
 <tr>
 <td><?php echo $row["ID"]?></td>
 <td><?php echo $row["Name"]?></td>
 <td><?php echo $row["Email"]?></td>
 <td><?php echo $row["Balance"]?></td>
 <td><a href="view.php?ID= <?php echo $row['ID'] ;?>"> <button type="submit">View</button></a></td>
 </tr>
 <?php
}
?>
</table>
<?php
mysqli_free_result($result);
mysqli_close($conn);
?>
</div>
</body>
</html>
