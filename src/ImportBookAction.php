<?php
	include 'common.php';
    $conn = connect_db();
	$result = true;
	$sql = "";
	if (isset($_POST["import"])) {
    
		$fileName = $_FILES["filename"]["tmp_name"];
		if ($_FILES["filename"]["size"] > 0) {
		
			$i=0;
			$file = fopen($fileName, "r");  
			while (($column = fgetcsv($file, 10000)) !== FALSE) {
				if($i==0) {
					$i++;
					continue;
				}
				$sql = "INSERT INTO books (title, author, isbn, stock) VALUES ('$column[0]', '$column[1]', '$column[2]', '$column[3]')";
				$result = mysqli_query($conn, $sql);
				if (!$result) break;
			}
		}
	}
	
	 	header("Location: ./booklist.php");	

		//echo "Error: " . $sql . "<br>" . mysqli_error($conn);		// uncomment to check the error
?>