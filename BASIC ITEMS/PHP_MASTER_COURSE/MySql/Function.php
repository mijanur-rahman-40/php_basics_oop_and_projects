<?php
include 'db.php';

function showAllData()
{
    global $connection;

    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed ' . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function InsertData()
{
    if (isset($_POST['submit'])) {
        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];

//For PHP Security issue for sql statement
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

//For encrypt password
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hash_and_salt = $hashFormat . $salt;
        //$encrypt_password = crypt($password);
        //$encrypt_password = crypt($password,$salt);
        $encrypt_password = crypt($password, $hash_and_salt);

//$query = "INSERT INTO user(username,password) VALUES ('$username','$password')";
        $query = "INSERT INTO user(username,password)";
        $query .= "VALUES ('$username','$encrypt_password')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query Failed' . mysqli_error($connection));
        } else {
            echo "Data Inserted";
        }
    }
}

function ReadRows()
{
    global $connection;
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }
    // while ($row = mysqli_fetch_row($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        /*
        ?>
        <pre>
            <?php
            print_r($row);
            ?>
            </pre>
        <?php
        */
        /*
        print ("<pre>");
        print_r($row);
        print ("</pre>");
        */
        print_r($row);
    }
}

function UpdateTable()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE user SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed" . mysqli_error($connection));
        } else {
            echo "Data Updated";
        }
    }
}

function DeleteRows()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM user  ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed" . mysqli_error($connection));
        } else {
            echo "Data Deleted";
        }
    }

}