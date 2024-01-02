<html>
<body>
    <?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: /play/login-form-20/Login.php");
    ?>
</body>
</html>
