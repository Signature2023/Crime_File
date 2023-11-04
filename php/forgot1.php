<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Password reset</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style -->
    <link rel="stylesheet" href="../css/style5.css" type="text/css" media="all" />
</head>


<body>
    <?php
require('connect.php');
session_start();
$email = $_SESSION["email"];

// Retrieve the security question from the database based on the submitted email
$sql = "SELECT security_que FROM crime_login WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $security_question = $row['security_que'];
} 
?>
    <!-- login form -->
    <section class="w3l-login">
        <div class="overlay">
            <div class="wrapper">
                <div class="logo">
                    <a class="brand-logo" href="index.html"></a>
                </div>
                <div class="form-section">
                    <h3>Password reset</h3>
                    <br/>

                    <form action="../forgot2.html" method="POST" class="signin-form">
                        <div class="form-input">
                            <label>Security Question</label>
                            <input type="text" name="security" required="" autofocus value="<?php echo $security_question; ?>" readonly>
                            <label>Enter Answer</label>
                            <input type="text" name="s_answer" required="" autofocus>
                        </div>
                        <button name="submit" class="btn btn-primary theme-button mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <!-- /login form -->
    
</body>

</html>
