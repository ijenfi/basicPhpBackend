
<?php
//set cookies

if (isset($_COOKIE['reject'])) {
  //delete the cookie
   setcookie('reject', '', time()-3600, "/", $domain, false);
} else {
  //sends cookies
  $cookie_name = "user";
  $cookie_value = "Ikhlas Jenfi";
  setcookie($cookie_name, $cookie_value, time() + 86400, "/"); // cookie set for one day
  if(!isset($_COOKIE[$cookie_name])) {
       echo "This'" . $cookie_name . "' cookie is not set!";
  } else {
       echo "This '" . $cookie_name . "' cookie is set!<br>";
       echo "Value is: " . $_COOKIE[$cookie_name];
  }
}


  include("./header.html");

//increment number by 1
   session_start();
   // Page was not reloaded via a button press
   if (!isset($_POST['add'])) {
       $_SESSION['addnum'] = 1; // Reset counter
   }

?>

<form method='post'>
<input name='add' type="submit" value='+1 button'>
<h3><em>Number of clicks on the button: <?php echo $_SESSION['addnum']++ ?></em></h3>
</form>

<?php
include("./footer.html");
?>
