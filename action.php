<?php
include("templates/header.php");

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

$fs = new Filesystem();

$response = $fs->makePathRelative(
	$_GET['file1'],
	$_GET['file2']
);
?>
<div class="container">
	<div class="panel">
	<?php 
	echo $response;
	?>
	</div>
</div>

<?php
include("templates/footer.php");
?>