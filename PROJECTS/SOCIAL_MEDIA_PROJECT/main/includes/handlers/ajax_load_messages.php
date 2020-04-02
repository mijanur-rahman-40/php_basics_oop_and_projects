<?php
include("../../configuration/config.php");
include("../classes/User.php");
include("../classes/Message.php");

$limit = 7; // number of messages to load

// request come from ajax call
$message = new Message($connection, $_REQUEST['userLoggedIn']);
echo $message->getConversationDropdown($_REQUEST, $limit);

