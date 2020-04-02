<?php
include 'Header.php';
?>
<section class="maincontent">
    <hr/>
    PHP file upload
    <?php
    if(isset($_FILES['image'])){
        $file_name=$_FILES['image']['name'];
        $file_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp,"images/".$file_name);
        echo "Image Upload successfully";
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data" method="POST">
        <input type="file" name="image"/>
        <input type="submit" value="Upload image"/>
    </form>
</section>
<?php
include 'Footer.php';
?>
