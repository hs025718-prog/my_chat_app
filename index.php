<?php include 'db.php'; session_start();
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $_SESSION['username'] = $user;
    header("Location: chat.php");
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="अपना नाम लिखें" required>
    <button name="login">Login</button>
</form>