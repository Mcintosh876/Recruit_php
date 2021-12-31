<?php 
$title = 'Edit';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
$results = $crud->getApplicant();
if(!isset($_GET['id']))
{
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
}
else{
    $id= $_GET['id'];
    $attendee = $crud->getApplicantDetails($id);


?>
    <h1 class="text-center">Update Record</h1>

<form method="post" action="editpost.php">
  <input type="hidden" name="id" value="<?php $attendee['attendee_id'] ?>" />
    <div class="form-group">
   <label for="FirstName">First Name</label>
   <input type="text" class="form-control" value= "<?php echo $attendee['firstname'] ?>" id="first name"name="firstname"  >
 
</div>
<div class="form-group">
  <label for="LastName">Last Name</label>
  <input type="text" class="form-control" value= "<?php echo $attendee['lastname'] ?>" id="last name" name="lastname" >
  
</div>
<div class="form-group">
   <label for="DOB">Date Of Birth</label>
  <input type="text" class="form-control" value= "<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob" >
 
</div>
<div class="form-group">
<label for="gender">Gender</label>
 <select class="form-select" id=" gender" name=" gender">
   <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)){?>
 <option value="<?php echo $r['gender_id'] ?>"<?php if($r['gender_id'] == $attendee['gender_id']) echo 'selected'?>>
    <?php echo $r['name']; ?></option>
 <?php } ?>
</select>
</div>

 <div class="form-group">
  <label for="Email">Email address</label>
  <input type="email" class="form-control" value= "<?php echo $attendee['emailaddress'] ?>" id="Email" name="email"
  aria-describedlby="emailHelp">
  <small id="emailHelp" class="form-text text-muted"> We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
  <label for="Adress">Address</label>
  <input required type="text" class="form-control" id="adress" name="adress" >
</div>
<br>

<div class="form-group">
  <label for="phone">Phone Number</label>
  <input type="text" class="form-control" value= "<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone"
  aria-describedlby="phoneHelp">

  <small id="phoneHelp" class="form-text text-muted"> We'll never share your phone number with anyone else.</small>

</div>
<button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
</form>

<?php } ?>

<br>
<br>
<br>
<br>
    <?php require_once'includes/footer.php';?>