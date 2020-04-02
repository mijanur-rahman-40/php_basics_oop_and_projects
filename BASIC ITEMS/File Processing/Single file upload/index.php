<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.form.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<h3 align="center"> Single file upload</h3>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading"><b>Upload Here anything you want!</b></div>
				<div class="panel-body bg-info">
					<form id="uploadImage" action="upload.php" method="post">
						<div class="form-group  ">
							<label>File Upload</label>
							<input type="file" class="btn btn-success" name="uploadFile" id="uploadFile" accept=".jpg,.png,.jpeg,.txt,.docx" />
						</div>
						<div class="form-group">
							<input type="submit" id="uploadSubmit" value="Upload" class="btn btn-info" />
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div id="targetLayer" style="display:none;"></div>
					</form>
					<div id="loader-icon" style="display:none;"><img src="loader.gif" /></div>
				</div>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	$('#uploadImage').submit(function(event){
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;
	});
});
</script>
