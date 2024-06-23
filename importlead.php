<?php
include 'connection.php';
if(isset($_POST["Import"])){
    $filename=$_FILES["file"]["tmp_name"];
    
    if($_FILES["file"]["size"] > 0) {
        
        $file = fopen($filename, "r");
	    while (($customerData = fgetcsv($file, 100000, ",")) !== FALSE)
	    {
            $sql = "INSERT into  leadassign_tbl(`date`,`name`,`phone`,`notes`) VALUES('$customerData[0]','$customerData[1]','$customerData[2]','$customerData[3]')";
		    //echo $sql; 
            $result = mysqli_query( $con, $sql );
            if(! $result )
				{
				echo "<script type=\"text/javascript\">
						alert(\"Invalid File:Please Upload CSV File.\");
						window.location = \"uploadlead.php\"
					</script>";
				}
        }
                echo "<script type=\"text/javascript\">
                        alert(\"CSV File has been successfully Imported.\");
                        window.location = \"alllead.php\"
                        </script>";
                        mysqli_close($con);

            } else {
                echo "<script type=\"text/javascript\">
                alert(\"invailed Data File:Please Upload CSV File.\");
                window.location = \"uploadlead.php\"
                </script>";
            }
        }	 
?>		 