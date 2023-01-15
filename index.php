<?php include('header.php'); ?>

<?php renderTemplate(); ?>

<br>

<p>
	dirname($_SERVER['SCRIPT_NAME'])  <br />
	is: <code><?=dirname($_SERVER['SCRIPT_NAME'])?></code>
</p>

<?php include('footer.php'); ?>