
<?php include ('config.php'); ?>
<?php $page = 'browse'; include ('header.php'); ?>




<?php

  $searchartist = "";
  $searchtitle = "";

 //upadate status of the poster to reserve
if (isset($_GET['posterid']))  {
  $trackidd = $_GET['posterid'];
  $query = "UPDATE posters
              SET is_reserved=1
              WHERE poster_id='".$trackidd."'";
  $stmt = $db->prepare($query);

  $stmt->execute();

}
//
if (isset($_POST) && !empty($_POST)){


  $searchartist = trim($_POST['artist']);
  $searchartist = stripslashes($searchartist);
  $searchartist = htmlspecialchars($searchartist);
  
  $searchtitle = trim($_POST['title']);
  $searchtitle = stripslashes($searchtitle);
  $searchtitle = htmlspecialchars($searchtitle);

  echo $searchartist;


}


/* SELECT * From posters
JOIN artist_poster ON posters.poster_id = artist_poster.poster_id
JOIN artists ON artists.artist_id = artist_poster.artist_id
WHERE posters.title LIKE "%"
*/




$query = "SELECT posters.poster_id, posters.title, artists.first_name, artists.last_name, posters.size, posters.price, posters.is_reserved, posters.photo FROM posters
JOIN artist_poster ON posters.poster_id = artist_poster.poster_id
JOIN artists ON artists.artist_id = artist_poster.artist_id";


if ($searchtitle  && !$searchartist) {

  $query = $query . " WHERE posters.title LIKE '%" .  $searchtitle . "%' ";
}

if (!$searchtitle  && $searchartist) {

  $query = $query . " WHERE artists.first_name LIKE '%" .  $searchartist . "%' ";
}

if ($searchtitle  && $searchartist) {

  $query = $query . " WHERE posters.title  LIKE '%" .  $searchtitle . "%' AND artists.first_name LIKE '%" .  $searchartist . "%' ";

}


//result from database
$stmt = $db -> prepare($query);
$stmt -> bind_result($posterid, $title, $artistF, $artistL, $size, $price, $isreserved, $photo);
$stmt -> execute();































?>


<!--Search Form-->

<p class="aboutprint">BROWSE POSTER</p>

<p class="abouttext">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.


<form  action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post" id="searchbar">
<input id="artist" name="artist" type="text" placeholder="Artist:">
<input id="title" name="title" type="text" placeholder="Title:">
      <button id="search" type="submit">Search</button>
    </form>







<?php 

/* Table Header/Content*/
echo "<table>";

 echo "<tr>
    <th>Title</th>
    <th>Artist</th>
     <th>Size</th>
    <th>Price</th>
   <th>Photo</th>
   <th>Like</th>
  </tr>";

while ($stmt -> fetch()) {
    
    echo "<tr><td> 
    $title</td>
    <td> $artistF $artistL</td>
    <td> $size</td>
    <td>$price</td>
    <td><img src='".$photo."' height='150' width='auto'></td>";
    echo "<td><form method='get' action=''>
    <button name='posterid' value='".$posterid."' id='submit' type='submit'>Love</button>
    </form></td>
    </tr>";

 


   }

  
  echo "</table>";


?>
   



 













<?php include ('footer.php'); ?>


