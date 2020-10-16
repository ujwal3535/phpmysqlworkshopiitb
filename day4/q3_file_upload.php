<!DOCTYPE html>
<html>
<body>

<form action="fileup.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); 
}
$n=$_FILES["fileToUpload"]["name"];
echo "File name is: ".$n;
echo "<br><br>";
$s=$_FILES["fileToUpload"]["size"]/1000;
echo "Size is :".$s." KB";
?>
</body>
</html>