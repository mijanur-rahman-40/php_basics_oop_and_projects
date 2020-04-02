<?php
	$fonts = "Open Sans";
	$color = "#fff";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>PHP Fundamentals Tutorial</title>
    <!-- Favicon and Touch Icons -->
    <link href="img/favicon.png" rel="shortcut icon" type="image/png">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="img/apple-touch-icon-70x70.png" rel="apple-touch-icon" sizes="70x70">
    <link href="img/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="img/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<style type="text/css">
		.main {
			  color: #fff;
			  font-size: 17px;
			  line-height: 40px;
			}
			.main-inner {
			  background: #fff none repeat scroll 0 0;
			  color: #000;
			  font-size: 17px;
			  line-height: 40px;
			  margin: 20px;
			  min-height: 390px;
			  padding: 20px;
			}
		.header h1 {
				font-family:<?php echo $fonts;?> ;
				color: <?php echo $color;?>;
				font-size: 30px;
				line-height: 95px;
				font-weight: 700;
				margin-top: 0;
			}
			.header {
				background: <?php echo "#5a8f0f";?> none repeat scroll 0 0;
			}
	</style>
</head>

<body>
<div class="container-fluid">
	<div class="wrapper">
		<div class="header">
			<div class="row">
				<div class="col-md-2">
					<a href="../index.php"><img src="css/logo.png"/></a>
				</div>
				<div class="col-md-10">
					<h1>PHP Fundamentals Tutorial  (BY Ruhul Academy)</h1>
				</div>
			</div>
		</div>


		<div class="main">
			<div class="main-inner">