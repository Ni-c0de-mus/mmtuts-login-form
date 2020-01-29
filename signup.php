<?php
require "header.php";
?>

<main>
 <div id="wrapper__main">
  <section class="section__default">
   <h1>Sign Up</h1>
   <form class="form__default" action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="mail" placeholder="E-mail">
    <input type="text" name="pwd" placeholder="Password">
    <input type="text" name="pwd-repeat" placeholder="Repeat Password">
    <button class="default__btn" type="submit" name="signup-submit">Signup</button>
   </form>
  </section>
 </div>

</main>


<?php
require "footer.php";
?>