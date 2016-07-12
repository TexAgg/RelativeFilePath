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
	<div id="output" class="panel panel-default input-group">
		<input type="text" class="form-control centered-horizontal" value='<?php echo $response;?>' readonly></input>
	</div>
</div>

<?php
include("templates/footer.php");
?>