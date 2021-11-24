<?php
/*file untuk menghubungkan button yang ada pada file lainnya*/

//button login
 if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $password=($_POST['password']);
 
    if ($user=="Nuraini" && $password=="20192205138") {
        header("Location: dashboard.php");
        $_SESSION['username'] = $user;
    } else {
       
        echo "<script>alert('Email atau password Anda tidak valid. Silahkan coba lagi!')</script>";
        
    }
}

?>