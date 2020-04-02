<?php
include 'Header.php';
session_start();
setcookie('visited',time()-3600);
?>
<section class="maincontent">
    <hr/>
    <?php
   /** $_SESSION['user']="Golap";
   $_SESSION['password']="12345";
   echo "user name is ".$_SESSION['user']."<br>";
   echo "user pasword " .$_SESSION['password']."<br>";
   session_unset();
   session_destroy();
    **/
    /**if (!isset($_COOKIE['visited'])) {
        setcookie("visited", "1", time() + 86400, "/") or die("could not set cookie");
        echo "this is your first visit";
    } else {
        echo "you are old visitor";
    }**/
    echo "cookie is deleted"

    ?>
 </section>
<?php
include 'Footer.php';
?>