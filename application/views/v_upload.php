<html>
<head>
<title>Upload</title>
</head>
<body>
<h1>Upload file ke direktori</h1>
<?php echo $error;?>
<?php echo form_open_multipart('upload/aksi_upload'); ?>
<input type="file" name="berkas" />
<br /><br />
<input type="submit" value="upload" />
</form>
</body>
</html>