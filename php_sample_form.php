<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $genderErr = "";
$name = $email = $gender = $description = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = validate($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }


if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = validate($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
    if (empty($_POST["phone"])) {
    $phoneErr = "phone is required";
  } else {
    $phone = validate($_POST["phone"]);
	if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Only Numbers are allowed"; 
	}
  }
  //$phone = validate($_POST["phone"]);
  
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = validate($_POST["gender"]);
  }


 if (empty($_POST["description"])) {
    $description = "";
  } else {
    $description = validate($_POST["description"]);
  }

}


 
 function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }
  
  if($_FILES){
  //Checking if file is selected or not
if($_FILES['file']['name'] != "") {

//Checking if the file is plain text or not
if(isset($_FILES) && $_FILES['file']['type'] != 'text/plain') {
 echo "<span>File could not be accepted ! Please upload any '*.txt' file.</span>";
 exit();
}
echo "<center><span id='Content'>Contents of ".$_FILES['file']['name']." File</span></center>";

//Getting and storing the temporary file name of the uploaded file
  $fileName = $_FILES['file']['tmp_name'];

  //Throw an error message if the file could not be open
$file = fopen($fileName,"r") or exit("Unable to open file!");

// Reading a .txt file line by line
while(!feof($file)) {
 echo fgets($file). "";
}
fclose($file);

}


else {
 if(isset($_FILES) && $_FILES['file']['type'] == '')
 echo "<span>Please Choose a file by click on 'Browse' or 'Choose File' button.</span>";
 }
}
  
  

?>
<div class="container">
<h2> Basic Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name"><span class="error">*</span>Name:</label>
			<input type="text" class="form-control" name="name" pattern="[a-z]{3,15}" value="<?php echo $name;?>" placeholder="Enter Name">
				
		</div> 
		<div class="form-group">
			<label for="email"><span class="error">*</span>Email:</label>
			 <input type="email" class="form-control" name="email" value="<?php echo $email;?>" placeholder="Enter Email">	
				<span class="error"><?php echo $emailErr;?></span>			 
		</div>
		<div class="form-group">
			<label for="phone"><span class="error">*</span>Phone Number:</label>
			 <input type="text" class="form-control" name="phone" maxlength=10 value="<?php echo $phone;?>" placeholder="Enter Phone number">
			 <span class="error"><?php echo $phoneErr;?></span>
		</div>
		<div class="form-group">
			<label for="gender">Gender:</label>
			<label class="radio-inline">
				<input type="radio" name="gender" value="male">Male
			</label>
			<label class="radio-inline">
				<input type="radio" name="gender" value="female">Female
			</label>
		</div>	
		<div class="form-group">
			<label for="description">Description:</label>
			<textarea name="description" class="form-control" rows="5" id="description" value="<?php echo $description;?>" placeholder="Enter Description"></textarea>
		</div>
		<div class="form-group">
			<label for="phone">File Upload:</label>
			 <input type="file" class="form-control" name="file">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<?php

echo "<h3>Your Input:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $gender;
echo "<br>";
echo $description;
echo "<br>";



?>


</body>
</html>
