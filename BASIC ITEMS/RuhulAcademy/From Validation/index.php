<?php include("header.php"); ?>
<h1>PHP Form Validation</h1>
<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /*
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $website = ($_POST["website"]);
    $gender = ($_POST["gender"]);
    $message = ($_POST["message"]);
    */

    $name = dataValid($_POST["name"]);
    $email = dataValid($_POST["email"]);
    $website = dataValid($_POST["website"]);
    $gender = dataValid($_POST["gender"]);
    $message = dataValid($_POST["message"]);


    echo "Your name is : $name <br>";
    echo "Your email is : $email <br>";
    echo "Your website is : $website <br>";
    echo "Your gender is : $gender <br>";
    echo "Your message is : $message <br>";
}


function dataValid($data)
{
    /*
     * This function returns a string with whitespace stripped from the beginning and end of str.
     * Without the second parameter, trim() will strip these characters
     */
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;

}


?>

<!--if method is post then url is be hidden and if get then url is showed and data pass by url-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td>
                <label>
                    <input type="text" name="name"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>
                <label>
                    <input type="email" name="email"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Website</td>
            <td>
                <label>
                    <input type="text" name="website"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <label>
                    <input type="radio" name="gender" value="male"/>
                </label> Male
                <label>
                    <input type="radio" name="gender" value="female"/>
                </label> Female
            </td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea rows="2" cols="60" name="message"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Send Message"/></td>
        </tr>
    </table>
</form>

<?php


?>
<?php include("footer.php"); ?>


