
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

li.dropdown {
  display: inline-block;
}




</style>
</head>
  <body>
    <div>
      <ul>
        <li ><a href="index.php">Home</a></li>
        <li><a href="form_signin.php">Sign in</a></li>
        <li><a href="form_signup.php">Sign up</a></li>
        <li><a href="form_dizionario.php">Dizionario</a></li>
        <div style='float:right;'>
          <li ><a href="logout.php" style='float: right;'>Logout</a></li>
      </ul>
        </div>
    </div>
  </body>
</html>


