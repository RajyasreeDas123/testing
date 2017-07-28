<?php
$target_dir = "uploads/";
echo $target_dir;
$target_file = $target_dir.$_FILES['fileToUpload']['name'];
echo "<br>";
echo "$target_file";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo "<br>";
echo "$imageFileType";
echo "<br>";
if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
    {
		echo"CHECK.....<br>";
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
    else
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file))
    {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
}
?>
