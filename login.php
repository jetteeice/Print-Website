<?php $page = 'login'; include ('header.php'); ?>
<?php include ('config.php'); ?>



<p class="aboutprint">LOGIN</p>

<p class="abouttext">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
</p>


<meta name="viewport" content="width=device-width, initial-scale=1">





<div class="container">
  <form method="post" action="">


    <label for="lname"></label>
    <input type="text" id="username" name="username" placeholder="Your username:" required>

     <label for="lname"></label>
    <input type="password" id="password" name="password" placeholder="Your password:" required>
  

     <button id="login" type="send">Login</button>
  </form>
</div>





<?php

if (isset($_POST) && !empty($_POST)){

  //Secure login
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);


$query= "SELECT user.username, user.password FROM user WHERE user.username = '".$username."' AND user.password ='".md5($password)."'";
//the query will be executed in the database
$result= mysqli_query($db,$query);


//Check if user exists
if(mysqli_num_rows($result) == 1) {
// The output above is before the header() call
  header('Location: ./admin.php');
    
} else {
     echo "<div class='abouttext'>We couldn’t find an account matching the username and password";
}

}



?>



















<?php include ('footer.php'); ?>