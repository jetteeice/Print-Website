<?php $page = 'gallery'; include ('header.php'); ?>
<?php include ('config.php'); ?>



<p class="aboutprint">GALLERY</p>

<p class="abouttext">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
</p>



<div>

<?php

$query = "SELECT gallery.picture FROM gallery ";





$stmt = $db -> prepare($query);
$stmt -> bind_result($picture);
$stmt -> execute();


while ($stmt -> fetch()) {
    
echo "
<div class='gallery'>
  
    <img alt='5Terre' width='' height='' src='".$picture."'>
  
 
</div>";





   }






?>

</div>





<?php include ('footer.php'); ?>