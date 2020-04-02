<?php
include 'db.php';
include 'Function.php';
InsertData();
include 'Includes/Header.php';
?>
<h1 class="text-center">Create</h1>
<form action="Insert.php" method="post">
    <div class="from-group">
        <label for="username">UserName
            <input type="text" name="username" class="form-control">
        </label>
    </div>
    <div class="from-group">
        <label for="password">Password
            <input type="password" name="password" class="form-control">
        </label>
    </div>
    <input type="submit" name="submit" value="Insert" class="btn btn-primary">
</form>
<?php include 'Includes/Footer.php' ?>
