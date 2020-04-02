<?php
include 'Header.php';
?>
    <section class="maincontent">
        <hr/>
<!--        <table>-->
<!--            <tr>-->
<!--                <td>Filter Name</td>-->
<!--                <td>Filter ID</td>-->
<!--            </tr>-->
<!--            --><?php
//            foreach (filter_list() as $id =>$filter) {
//                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
//            }
//            ?>
<!--        </table>-->
        <?php
        $str="<h2> i am learning<h2>";
        echo filter_var($str,FILTER_SANITIZE_STRING);
        $IP="127.0.0.1";
        if(filter_var($IP,FILTER_VALIDATE_IP)){
            echo "$IP valid";
        }
        else{
        echo "$IP not valid";
        }
        ?>
    </section>
<?php
include 'Footer.php';
?>