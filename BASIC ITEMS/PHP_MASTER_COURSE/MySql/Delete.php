<?php
include 'db.php';
include 'Function.php';
DeleteRows();
include 'Includes/Header.php';
?>
    <h1 class="text-center">Delete</h1>
    <form action="Delete.php" method="post">
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
        <div class="form-group">
            <label for="">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>

                </select>
            </label>
        </div>
        <input type="submit" name="submit" value="Delete" class="btn btn-primary">
    </form>
<?php include 'Includes/Footer.php' ?>