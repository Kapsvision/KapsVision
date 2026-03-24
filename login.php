<?php include 'db.php'; ?>

<?php
if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    $res = $conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
    
    if($res->num_rows > 0){
        $_SESSION['user'] = $u;
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login";
    }
}
?>

<form method="POST">
    <h2>Admin Login</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="login">Login</button>
</form>