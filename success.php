<?php 
$title = 'ascendancy';
require_once 'includes/header.php';
require_once 'db/conn.php';
//require_once 'sendemail.php';
?>
<?php


if(isset($_POST['submit'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $contact = $_POST['phone'];
  $gender= $_POST['gender'];
  $adress= $_POST['adress'];

$oring_file = $_FILES["avatar"]["tmp_name"];
$ext =pathinfo($_FILES["avatar"]["name"],PATHINFO_EXTENSION);
$target_dir = 'uploads/';
$destination = "$target_dir$contact.$ext";
move_uploaded_file($oring_file,$destination);



  $isSuccess = $crud->insertAttendee($fname,$lname,$dob,$email,$contact,$gender,$destination,$adress);
  $gender = $crud->getGenderById($gender);

  if($isSuccess){
    SendEmail::sendMail($email,'Recruitment 2021', 'You Have Succesfully Registerd for if scucessfull we will contact you');
    include 'includes/successmessage.php';
  }
  else{
    include 'includes/errormessage.php';

  }
}
?>
  
<img src="<?php echo $destination ?>" class = "rounded" style = "width:30%; heaght: 25%">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname']. ' '. $_POST['lastname'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $gender['name']; ?> </h6>
    <p class="card-text">Date of Birth: <?php echo $_POST['dob'] ?></p>
    <p class="card-text">Email: <?php echo $_POST['email'] ?></p>
    <p class="card-text">Contact Number: <?php echo $_POST['phone'] ?></p>
    <p class="card-text">Address: <?php echo $_POST['adress'] ?></p>


  </div>
</div>
                      <a href="viewrecords.php" class="btn btn-info">Back To List</a>
                      <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                      <a onclick="return confirm('Are you Sure You Want To delete Record?')" href="delete.php? id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
          
                      
<br>
<br>
<br>
<br>
<?php require_once'includes/footer.php';?>