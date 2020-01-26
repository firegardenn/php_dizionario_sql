
<html>
<?php include("navbar.php");?>
<?php include("conn.php");?>
<head>
<title>SignIn|Dizionario</title>
<h1 align="center" >Inserisci i tuoi dati per accedere</h1>
</head>
<body background="image\wallpaper.jpg">
<form id=form action="signin.php" method="post">
<table cellpadding="20" height= 100px width=300px align="center"style="background-color: white; border:1px solid; border-radius: 5px;" >
    <tr height= 20px>
        <td >Nickname</td> 
    </tr>
    <tr height= 20px>
        <td ><input type='text' name="nickname"></td>
    </tr>
        
    <tr height= 20px>
        <td width=20%>password</td>   
    </tr>
    <tr height= 20px">
        <td><input type='password'name="password">
    </tr>
    <tr height= 20px>
        <td width=20%></td>
        
    </tr>
    <tr height= 20px>
        <td> <input type="submit"></button> </td>
    </tr>
</form>
</table>
</form>

</body>
</html>