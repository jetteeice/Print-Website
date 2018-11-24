<?php include ('config.php'); ?>
<?php $page = 'myprints'; include ('header.php'); ?>









<?php

  $searchartist = "";
  $searchtitle = "";

 //upadate status of the poster to reserve
if (isset($_GET['posterid']))  {
  $trackidd = $_GET['posterid'];
  $query = "UPDATE posters
              SET is_reserved=0
              WHERE poster_id='".$trackidd."'";
  $stmt = $db->prepare($query);

  $stmt->execute();

}

if (isset($_POST) && !empty($_POST)){


  $searchartist = trim($_POST['artist']);
  $searchtitle = trim($_POST['title']);



}


/* SELECT * From posters
JOIN artist_poster ON posters.poster_id = artist_poster.poster_id
JOIN artists ON artists.artist_id = artist_poster.artist_id
WHERE posters.title LIKE "%"
*/




$query = "SELECT posters.poster_id, posters.title, artists.first_name, artists.last_name, posters.size, posters.price, posters.is_reserved FROM posters
JOIN artist_poster ON posters.poster_id = artist_poster.poster_id
JOIN artists ON artists.artist_id = artist_poster.artist_id
WHERE posters.is_reserved=1";


if ($searchtitle  && !$searchartist) {

  $query = $query . " AND WHERE posters.title LIKE '%" .  $searchtitle . "%' ";
}

if (!$searchtitle  && $searchartist) {

  $query = $query . " AND WHERE artists.first_name LIKE '%" .  $searchartist . "%' ";
}

if ($searchtitle  && $searchartist) {

  $query = $query . " AND WHERE posters.title  LIKE '%" .  $searchtitle . "%' AND artists.first_name LIKE '%" .  $searchartist . "%' ";

}

echo $query;

$stmt = $db -> prepare($query);
$stmt -> bind_result($posterid, $title, $artistF, $artistL, $size, $price, $isreserved);
$stmt -> execute();































?>


<!--Search Bar-->

<p class="aboutprint">MY POSTER</p>

<p class="abouttext">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.










<?php 

/* Table Header/Content*/



echo "<table>";

 echo "<tr>
    <th>Title</th>
    <th>Artist</th>
    <th>Price</th>
    <th>Size</th>
     <th>Reserved</th>
  </tr>";

while ($stmt -> fetch()) {
    
    echo "<tr><td> 
    $title</td>
    <td> $artistF $artistL</td>
    <td> $size</td>
    <td>$price</td>";
    echo "<td><form method='get' action=''>
    <button name='posterid' value='".$posterid."' id='submit' type='submit'>X</button>
    </form></td>
    </tr>";


   }

  
  echo "</table>";


?>
   



 













<?php include ('footer.php'); ?>

