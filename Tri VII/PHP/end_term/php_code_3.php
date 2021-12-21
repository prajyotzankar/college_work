<?php
	$file_name = "product.txt";


	if (file_exists($file_name)) {
		echo "The file $file_name exists <br>";
		echo "File size = ";
		echo filesize("product.txt");
		echo " bytes <br>";
		echo "File Content -> ";
		$contents = file("product.txt");
    	foreach ($contents as $content){
        	echo "<br> $content";
    	}
		echo "<br>";

		echo "Rename the file -> <br>";
		rename("product.txt", "data.txt");

		
		echo "Deleting File - > <br>";

		$status=unlink('data.txt');    
		if($status){  
			echo "File deleted successfully";    
		}else{  
			echo "Sorry!";    
		}  

	} else {
		echo "The file $filename does not exist";
	}
?>