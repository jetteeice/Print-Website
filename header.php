<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>






<div id="LogoandMenu">



<!--Logotype-->
<div id="Logo"></div>
<img id="Print" src="image/Print.png">



<!--Hamburger Menu-->
<a href="#menu" id="toggle"><span></span></a>

<div id="menu">
	
  <ul>

    <!--Current Page/ Menu underline-->
   <li><a <?php echo ($page == 'index') ? "class='active'" : ""; ?> 
      	href="index.php">Home</a></li>
   <li><a <?php echo ($page == 'about') ? "class='active'" : ""; ?>
   		href="./about.php">About</a></li>
   <li><a <?php echo ($page == 'browse') ? "class='active'" : ""; ?>
   		href="./browse.php">Browse</a></li>
   <li><a <?php echo ($page == 'myprints') ? "class='active'" : ""; ?>
   		href="./myprints.php">My Prints</a></li>
   		<li><a <?php echo ($page == 'gallery') ? "class='active'" : ""; ?>
      href="./gallery.php">Gallery</a></li>
         <li><a <?php echo ($page == 'login') ? "class='active'" : ""; ?>
      href="./login.php">Login</a></li>
   <li><a <?php echo ($page == 'contact') ? "class='active'" : ""; ?>
   		href="./contact.php">Contact</a></li>

  </ul>
</div>


<!--Social Media Icons-->
<div id="social"> 
<a href="http://youtube.com">  <img id="youtube" src="image/youtube.png"  /></a>
<a href="http://linkedin.com">  <img id="linkedin" src="image/linkedin.png"  /></a>
<a href="http://instagram.com">  <img id="instagram" src="image/instagram.png"  /></a>
<a href="http://vimeo.com">  <img id="vimeo" src="image/vimeo.png"  /></a>
</div>

</div>










<!--Hamburger Menu JS-->
<script>
    var theToggle = document.getElementById('toggle');
// based on Todd Motto from Codepen

// hasClass
function hasClass(elem, className) {
    return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
        elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
    var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
    var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}

</script>



















<div id="socialmedia">





