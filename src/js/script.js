// Return to home page.
function resetButtonClicked() {
	location.href = "index.php";
}

// Swap the file names in the two input boxes.
function swapFiles() {
	var file1 = document.getElementById("file1");
	var text1 = file1.value;

	var file2 = document.getElementById("file2");
	var text2 = file2.value;

	// Swap values.
	var temp = text1;
	text1 = text2;
	text2 = temp;

	// Set values.
	file1.value = text1;
	file2.value = text2;
}