<?php include 'db.php'; session_start();
if(!isset($_SESSION['username'])) header("Location: login.php");

if(isset($_POST['send'])){
    $msg = $_POST['msg'];
    $user = $_SESSION['username'];
    mysqli_query($conn, "INSERT INTO messages (sender, message) VALUES ('$user', '$msg')");
}
?>
<div style="height:300px; overflow:scroll;">
<?php
$res = mysqli_query($conn, "SELECT * FROM messages ORDER BY id DESC");
while($row = mysqli_fetch_assoc($res)){
    echo "<b>".$row['sender']."</b>: ".$row['message']." <small>".$row['created_at']."</small><br>";
}
?>
</div>
<form method="POST">
    <input type="text" name="msg" placeholder="Message..." required>
    <button name="send">Send</button>
</form>