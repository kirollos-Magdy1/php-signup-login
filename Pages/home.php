<?php
include('../components/header.php');
session_start();

if(!isset($_SESSION['user_id']))
{
        header('Location: login.php');
        exit;
}


if (isset($_POST['logout'])) {
    $_SESSION = array();
    session_destroy();
    session_unset();
    header("Location: ../index.php");
    exit;
}

?>
<link rel="stylesheet" href="../styles.css">
<div class="container wrapper">
    <a href="../index.php" class="back-button">←</a>
    <h1>Welcome</h1>
    <h2>
        <?=$_SESSION['username'] ?>
    </h2>
    <br>
    <h3>
        <?=$_SESSION['email'] ?>
    </h3>

    <form  method="post">
        <button type="submit" name="logout" id="logout" class="logout-button">Logout</button>
    </form>
</div>
<?php
include('../components/footer.php')
?>