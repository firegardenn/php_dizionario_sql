<?php include("conn.php");?>

<?php 
    
    session_start();
    $creaParola = $_POST["creaParola"];
    $creaSignificato = $_POST["creaSignificato"];
    

    $sql = "SELECT parola FROM indice WHERE parola='$creaParola'";
    $result = mysqli_query($conn, $sql);
    //var_dump($result);
    /* fetch object array */
    /*while ($row = $result->fetch_row()) {
        var_dump($row);
    }
    die();*/
    //echo mysqli_num_rows($result);
    if (mysqli_num_rows($result)>0) {
        echo "Parola già presente";
        
    } else {
        $utente=$_SESSION[id];
        
        $sql = "INSERT INTO indice (parola, significato, utente) VALUES ('$creaParola', '$creaSignificato', '$utente')";
        mysqli_query($conn, $sql);
        include("form_dizionario.php");
        echo "parola creata";
    }
    //include("crea_parola.php");
    //mysqli_close($conn);

?>
