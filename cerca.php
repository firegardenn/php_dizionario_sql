<?php include("conn.php");?>

<?php 
    
    session_start();
    $cerca = $_POST["cerca"];
    $sql = "SELECT parola, significato  FROM indice WHERE parola='$cerca'";
    $result = mysqli_query($conn, $sql);
    //var_dump($result);
    /* fetch object array */
    /*while ($row = $result->fetch_row()) {
        var_dump($row);
    }
    die();*/
    //echo mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    include("navbar.php");
        while($row = mysqli_fetch_assoc($result)) {
            
            echo $row["parola"]. " : " . $row["significato"]."<br>";
        }
    }
    else {
        echo "0 results";
    }

    //include("crea_parola.php");
    //mysqli_close($conn);

?>
