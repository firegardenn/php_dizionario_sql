
<html>
<?php include("navbar.php");?>
<?php include("conn.php");?>
<?php
session_start();
if ($_SESSION['check']=='1'){ ?>
<head>
<title>Form_dizio|Dizionario</title>
<h1></h1>
</head>
<?php echo $_SESSION['check'];?>
<body bgcolor="#f5f5f5";>

<table width=10% align="center" style="background-color: white; border:1px solid; border-radius: 5px;";>
<form id=form action="crea_parola.php" method="post">
    <tr >
        <td >Inserisci una nuova parola</td>  
    </tr>
    <tr>
        <td><input type='text' size='50' name="creaParola"></td>  
    </tr>
    <tr>
        <td >Inserisci il significato della nuova parola</td>   
    </tr>
    <tr> 
        <td ><input type='text'size='50' name="creaSignificato"></td>
    </tr>
    <tr>
        <td align="center"> <input type="submit"></button> </td>
    </tr>
    <tr>
        <td >Inserisci il significato della nuova parola</td>   
    </tr>
    <tr>
    </form>
    <form id=form action="cerca.php" method="post">
    <tr>
    <td ><input type='text'size='50' name="cerca"></td>
    </tr>
    <tr>
        <td align="center"> <input type="submit"></button> </td>
    </tr>
    </form>
    </form>
    <form id=form action="lista.php" method="post">
    <tr>
        <td >Visualizza tutte le parole nella lista</td>   
    </tr>
    <tr>
        <td align="center"> <input type="submit"></button> </td>
    </tr>
    </form>
    </table>

</form>
</table>
</form>

</body>
</html>
<?php }
else{
    echo "non sei loggato";
}
?>