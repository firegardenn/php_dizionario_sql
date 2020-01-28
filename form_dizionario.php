
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
                <td align="center"> <input type="submit" value="crea"></button> </td>
            </tr>
            <tr>
                <td >Cerca una parola</td>   
            </tr>

        </form>
        <form id=form action="cerca.php" method="post">
            <tr>
                <td ><input type='text'size='50' name="cerca"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="cerca"></button> </td>
            </tr>
        </form>
        <form id=form action="cancella.php" method="post">
            <tr>
                <td >Cancella una parola nella lista</td>   
            </tr>
            <tr>
                <td ><input type='text'size='50' name="cancella"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="cancella"></button> </td>
            </tr>
        </form>
        <form id=form action="modifica.php" method="post">
            <tr>
                <td >Modifica una parola nella lista</td>   
            </tr>
            <tr>
                <td ><input type='text'size='50' name="modifica"></td>
            </tr>

            <tr>
                <td >Inserisci il nuovo significato</td>   
            </tr>
            <tr> 
                <td ><input type='text'size='50' name="nuovoSignificato"></td>
            </tr>
            <tr>
                <td align="center"><input type="submit" value="modifica"></button> </td>
            </tr>
        </form>
        <form id=form action="lista.php" method="post">

            <tr>
                <td align="center"><input type="submit" value="lista"></button> </td>
            </tr>
        </form>
        
    </table>
</body>
</html>
<?php }
else{
    echo "non sei loggato";
}
?>