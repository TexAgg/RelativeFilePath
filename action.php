<?php
include("templates/header.php");

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

$fs = new Filesystem();

$response = $fs->makePathRelative(
	$_GET['file2'],
	$_GET['file1']
);
?>
<div class="container">
	<div id="output" class="input-group col-xs-3">
		<span class="input-group-btn">
			<button class="btn" id="reset-button" onclick="resetButtonClicked()">Reset</button>
		</span>
		<input type="text" id="output-box" class="form-control" value='<?php echo $response;?>' readonly></input>
		<span id="outer-span" class="input-group-addon">
			<button id="copyButton" data-clipboard-target="#output-box">
				<span class="glyphicon glyphicon-copy"></span>
			</button>
		</span>
	</div><!--output-->
</div><!--container-->
<script src="js/clip.js"></script>
<?php
include("templates/footer.php");
?>