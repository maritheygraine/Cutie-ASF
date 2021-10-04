	<?php

		/**
		 * 	STRING: Returns the file destination of the uploaded file; returns blank if file upload failed
		 * 
		 * 	@return string
		 */
		function upload_pet_picture(){
			if($_FILES['fileToUpload']['error'] > 0) { 
				echo "<script> alert('No image was uploaded!'); </script>"; 
				return "";
			}
			else {
				$target_dir = "images/home_5/";
				$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} 
				else {
					echo "<script> alert('File is not an image!'); </script>";
					$uploadOk = 0;
				}

				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 12000000) {
					echo "<script> alert('File is too large! (exceeds 12MB)'); </script>";
					$uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
					echo "<script> alert('File must be an image type!'); </script>";
					$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					return "";
				}

				// if everything is ok, try to upload file
				else {
						// rename the file
						$newFileName = uniqid('', true).".".$imageFileType;
						$fileDestination = $target_dir.$newFileName;
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fileDestination)) {
						return $fileDestination;
					} 
					else{ 
						echo "<script> alert('There was an error uploading the file'); </script>"; 
						return "";
					}
				}
			}
		}

		/**
		 * 	STRING: Returns the file destination of the uploaded file; returns blank if file upload failed
		 * 
		 * 	@return string
		 */
		function upload_pet_adoptionForm(){
			if($_FILES['docToUpload']['error'] > 0) { 
				echo "<script> alert('No document was uploaded!'); </script>"; 
				return "";
			}
			else {
				$target_dir = "Cutie_ASF_files/";
				$target_file = $target_dir.basename($_FILES["docToUpload"]["name"]);
				$uploadOk = 1;
				$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Check file size
				if ($_FILES["docToUpload"]["size"] > 12000000) {
					echo "<script> alert('File is too large! (exceeds 12MB)'); </script>";
					$uploadOk = 0;
				}

				// Allow certain file formats
				if($fileType != "pdf" && $fileType != "PDF" && $fileType != "DOC" && $fileType != "doc" && $fileType != "DOCX" && $fileType != "docx" ) {
					echo "<script> alert('File must be a document type!'); </script>";
					$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					return "";
				}

				// if everything is ok, try to upload file
				else {
						// rename the file
						$newFileName = "APPLICATION FORM-".uniqid('', true).".".$fileType;
						$fileDestination = $target_dir.$newFileName;
					if (move_uploaded_file($_FILES["docToUpload"]["tmp_name"], $fileDestination)) {
						return $fileDestination;
					} 
					else{ 
						return "";
					}
				}
			}
		}
		function avail_validation($availability){
		    if(strtolower($availability) != 'available' or strtolower($availability) != 'requested' or strtolower($availability) != 'adopted'){
		        return false;
		    }
		    else{
		        return true;
		    }
		}
	?>