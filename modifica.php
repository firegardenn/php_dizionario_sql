<?php include("conn.php");?>

<?php 
    
    session_start();
    $modifica = $_POST["modifica"];
    $nuovoSignificato = $_POST["nuovoSignificato"];
    include("navbar.php");
    $sql = "SELECT parola  FROM indice WHERE parola='$modifica'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) > 0) {
        $sql = "UPDATE indice SET significato='$nuovoSignificato' WHERE parola='$modifica'";
        mysqli_query($conn, $sql);
        echo "Modifica effettuata";
    } else {
        echo "Non è stato possibile effettuare la modifica." . mysqli_error($conn);
    }

?>