<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include 'header.inc'; ?>
<h2>Welcome, <?php echo ($_SESSION['user']); ?></h2>
<p>Your token is: <?php echo ($_SESSION['token']); ?></p>
<?php include 'footer.inc'; ?>