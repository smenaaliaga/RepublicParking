<?php 
// incluimos las funciones
require_once 'includes/functions.php';
// incluimos la cabecera
include 'themes/header.php'; 
?>

<div style="width:300px;  height: 20px; margin:0 auto;">
	<img src="themes/logo_republic.png">
</div>

<div id="login" class="text-center">
	
	<div class="well">
      <?php saustatus(); ?>
	</div>
	<?php
      if (isset($_GET['error'])) {
      	geterror();
      }
    ?>

</div>

<?php include 'themes/footer.php'; ?>