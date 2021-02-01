<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="src\styles.css">

<?php
session_start();
// logout logic
if (isset($_GET['action']) and $_GET['action'] == 'logout') {
}
?>
<?php
$err = '';
if (
    isset($_POST['login'])
    && !empty($_POST['username'])
    && !empty($_POST['password'])
) {
    if (
        $_POST['username'] == 'admin' &&
        $_POST['password'] == 'admin'
    ) {
        $_SESSION['logged_in'] = true;
        $_SESSION['timeout'] = time() + 1800;
        $_SESSION['username'] = 'admin';
    } else {
        $err = 'Wrong username or password';
        echo $err;
    }
}
?>
<?php
if ($_SESSION['logged_in'] == true) {
    require_once 'admin.php';
} else {
?>
    <form id="login" action="" method="post">
        <input type="text" name="username" placeholder="username = admin" required></br>
        <input type="password" name="password" placeholder="password = admin" required>
        <button type="submit" name="login">Login</button>
    </form>
    <br>
<?php } ?>

</div>
</body>

</html>