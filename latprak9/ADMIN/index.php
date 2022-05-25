<?php
    session_start();
    include "koneksi.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>PRAKTEK 9</title>
    </head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">LOGIN PAGE</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-5">
            <form method="POST">

                <div class="form-group">
                    <label>Username  :</label>
                    <input type="text" name="fusername" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                    <label>Password  : </label>
                    <input type="password" name="fpassword" class="form-control" required="required"/>
                </div>
 
                <center><button type="submit" name="fmasuk" class="btn btn-primary">Login</button></center>

            </form>

            <?php
                if (isset($_POST['fmasuk'])){
                    $username = $_POST['fusername'];
                    $password = $_POST['fpassword'];
                    $qry = mysqli_query($conn,"SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password') ");
                    $cek = mysqli_num_rows($qry);
                    if ($cek==1) {
                        $_SESSION['userweb']=$username;
                        header("location:cetak.php");
                        exit;
                    }
                    else { 
                        echo "<p style='color:red; margin: 20px 25px;'> Wrong Username and Password </p>";
                    }
                }
            ?>
</body> 
</html>