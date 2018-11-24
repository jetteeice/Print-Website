<?php $page = 'contact'; include ('header.php'); 


?>



<p class="aboutprint">CONTACT US</p>

<p class="abouttext">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
</p>


<meta name="viewport" content="width=device-width, initial-scale=1">





<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


    <label for="lname"></label>
    <input type="text" id="lname" name="lastname" placeholder="Your name:">

     <label for="email"></label>
    <input type="text" id="email" name="emailname" placeholder="Your e-mail:">
  

    <label for="subject"></label>
    <textarea id="subject" name="subject" placeholder="Your message:" style="height:200px"></textarea>

     <button id="send" type="send">SEND</button>
  </form>
</div>







<?php include ('footer.php'); ?>
<?php include ('config.php'); ?>