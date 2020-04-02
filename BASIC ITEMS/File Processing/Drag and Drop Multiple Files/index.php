

<?php
    if (isset($_FILES['attachments'])) {
        $msg = "";
        $targetFile = "uploads/" . basename($_FILES['attachments']['name'][0]);
        if (file_exists($targetFile))
            $msg = array("status" => 0, "msg" => "File already exists!");
        else if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], $targetFile))
            $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => $targetFile);

        exit(json_encode($msg));
    }
?>


<html>
	<head>
		<title>jQuery File Upload Script</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
		<style type="text/css">
			#dropZone {
				border: 3px dashed white;
				padding: 50px;
				width: 500px;
				margin-top: 20px;
			}

			#files {
				border: 1px dotted #0088cc;
				padding: 20px;
				width: 200px;
				display: none;
			}

            #error {
                color: red;
            }
		</style>
	</head>
	<body>
		<center class = "container bg-success">
			<img src="images/img.png"><br><br>
			<div id="dropZone" class="bg-primary">
				<h1 style="color: white">Drag & Drop Files...</h1>
				<input type="file" id="fileupload" class="btn btn-info" name="attachments[]" multiple>
			</div>
			<h1 id="error"></h1><br><br>
			<h1 id="progress"></h1><br><br>
			<div id="files"></div>
		</center>

		<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
		<script src="js/jquery.iframe-transport.js" type="text/javascript"></script>
		<script src="js/jquery.fileupload.js" type="text/javascript"></script>


        <script type="text/javascript">
            $(function () {
               var files = $("#files");

               $("#fileupload").fileupload({
                   url: 'index.php',
                   dropZone: '#dropZone',
                   dataType: 'json',
                   autoUpload: false
               }).on('fileuploadadd', function (e, data) {
                   var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
                   var fileName = data.originalFiles[0]['name'];
                   var fileSize = data.originalFiles[0]['size'];

                   if (!fileTypeAllowed.test(fileName))
                        $("#error").html('Only images are allowed!');
                   else if (fileSize > 5000000)
                       $("#error").html('Your file is too big! Max allowed size is: 5kb');
                   else {
                       $("#error").html("");
                       data.submit();
                   }
               }).on('fileuploaddone', function(e, data) {
                    var status = data.jqXHR.responseJSON.status;
                    var msg = data.jqXHR.responseJSON.msg;

                    if (status == 1) {
                        var path = data.jqXHR.responseJSON.path;
                        $("#files").fadeIn().append('<p><img style="width: 100px; height: 100px;" src="'+path+'" /></p>');
                    } else
                        $("#error").html(msg);
               }).on('fileuploadprogressall', function(e,data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $("#progress").html("Completed: " + progress + "%");
               });
            });
        </script>


	</body>
</html>