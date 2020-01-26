<?php include("conn.php");?>
<?php include("navbar.php");?>
<?php 
    
    
    $nickname = $_POST["nickname"];
    $password = $_POST["password"];
    

    $sql = "SELECT nickname FROM utenti WHERE nickname='$nickname'";
    $result = mysqli_query($conn, $sql);
    //var_dump($result);
    /* fetch object array */
    /*while ($row = $result->fetch_row()) {
        var_dump($row);
    }
    die();*/
    //echo mysqli_num_rows($result);
    if (mysqli_num_rows($result)>0) {
        echo "Nome utente già registrato";
        
    } else {
        $sql = "INSERT INTO utenti (nickname, password, ruolo) VALUES ('$nickname', '$password', '0')";
        mysqli_query($conn, $sql);
        echo "welcome!";
    }
    //mysqli_close($conn);

?>
