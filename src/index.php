<?php
include("templates/header.php");
?>
<div class="container">
	<form class="absolute-center" action="action.php">
		<div class="form-group">
			<label for="file1">File 1:</label>
			<input type="text" class="form-control" id="file1" name="file1" placeholder="Current file"></input>
		</div>
		<div class="form-group">
			<label for="file2">File 2:</label>
			<input type="text" class="form-control" id="file2" name="file2" placeholder="Destination file"></input>
		</div>
		<div class="input-group-btn">
			<button type="submit" class="btn btn-default">Submit</button>
			<input type="button" class="btn btn-default" value="Swap!" onclick="swapFiles()"></input>
		</div>
	</form>
</div><!--container-->
<?php
include("templates/footer.php");
?>