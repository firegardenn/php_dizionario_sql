<?php include("conn.php");?>
<?php 
    
    session_start();
    
    $nickname = $_POST["nickname"];
    $password = $_POST["password"];
    $_SESSION['check'] = '0';
    

    $sql = "SELECT nickname, password FROM utenti WHERE nickname='$nickname' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    //var_dump($result);
    /* fetch object array */
    /*while ($row = $result->fetch_row()) {
        var_dump($row);
    }
    die();*/
    //echo mysqli_num_rows($result);
    if (mysqli_num_rows($result)>0) {
        $_SESSION['nickname']=$nickname;
        $_SESSION['password']=$password;
        
        $sql = "SELECT id, password FROM utenti WHERE nickname='$nickname' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id']=$row['id'];
        //echo $_SESSION['id'];
        //echo $row['id'];
        //echo mysqli_num($result);
        $_SESSION['check'] = '1';
        include('form_dizionario.php');
    } else {
        $_SESSION['check'] = '0';
        echo "reinserire i dati";
    }


?>