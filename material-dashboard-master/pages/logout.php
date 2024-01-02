<html>
<body>
    <?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: /lognsign/login-form-20/Login.php");
    ?>
</body>
</html>
