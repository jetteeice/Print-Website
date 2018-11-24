<?php $page = 'admin'; include ('header.php'); ?>
<?php include ('config.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<p class="aboutprint">ADMIN</p>

<p class="abouttext">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
</p>


<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Upload form-->
<form id="uploadfile" method="POST" enctype="multipart/form-data">
  <input  name="fileupload" id="fileupload"  type="file" multiple >
  <p style="margin-top:7%;" >Drag your files here.</p>
  <button type="submit" name="upload">Upload</button>
</form>





<script>
	$(document).ready(function(){
  $('form input').change(function () {
    $('form p').text(this.files.length + " file(s) selected");
  });
})
</script>





<?php
if (isset($_POST['upload']))  {
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $imageFileType;

// Check if image file is a actual image or fake image



// Check if file not already exists // Check if file size is too big // Do not allow other file formats

if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {

		if (!(file_exists($target_file)) && ($_FILES["fileupload"]["size"] < 1048576)) {


    $query = "INSERT INTO gallery(picture)
	VALUES ('".$target_file."')"; //filepath
	mysqli_query($db,$query);



	 move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);
     echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";




}
else {
	echo "<div class='abouttext'>Upload failed";
}

}
else {
	echo "<div class='abouttext'>Choose the right file type";
}
}






?>
























<?php include ('footer.php'); ?>
<?php include ('config.php'); ?>