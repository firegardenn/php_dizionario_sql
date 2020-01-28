<?php include("conn.php");?>

<?php 
    
    session_start();
    $cancella = $_POST["cancella"];
    include("navbar.php");
    $sql = "SELECT parola  FROM indice WHERE parola='$cancella'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) > 0) {
        $sql = "DELETE FROM indice WHERE parola='$cancella'";
        mysqli_query($conn, $sql);
        echo "Parola cancellata";
    } else {
        echo "Non è possibile cancellare questa parola " . mysqli_error($conn);
    }

?>