<!DOCTYPE html>
<html>
<body>
	<h3>form</h3>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		Data: <input type="file" name="file"><br>

		<input type="submit" name="submit">
	</form>

	<?php 
	  if(isset($_POST['submit'])){
            //     echo "the name of the file is .$_files"['file']['name'];
            $file_data=$_FILES['file'];
                foreach($file_data as $key=> $value){
                    echo "$key :$value <br>";
                }
            }
	?>

</body>
</html>