<?php 
include '../inc/header.php';
define('LEVEL', 0);
if(isset($_SESSION['user']) && $_SESSION['level'] > LEVEL):
    include '../inc/nav.php'; 
?>

<main>
    <?php include '../inc/message.php'; ?>
    <h2>Page bidon</h2>
</main>

<?php include '../inc/footer.php';
else :
    header('Location:/index.php');
endif;