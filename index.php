<?php 
$title = 'index';
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getGender();
?>
    <h1 class="text-center">Recruit Application Form</h1>

<form method="post" enctype="multipart/form-data" action="success.php">
<div class="form-control">   
<div class="form-group">
   <label for="firstfame">First Name</label>
   <input required type="text" class="form-control" id="first name"name="firstname"  >
 
</div>
<div class="form-group">
  <label for="lastname">Last Name</label>
  <input required type="text" class="form-control" id="last name" name="lastname" >
  
</div>
<div class="form-group">
   <label for="dob">Date Of Birth</label>
  <input type="text" class="form-control" id="dob" name="dob" >
</div>
  
 

</div>
<div class="form-group">
<label for="gender">Gender</label>
 <select class="form-select" id=" gender" name=" gender">
   <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)){?>
 <option value="<?php echo $r['gender_id'] ?>"><?php echo $r['name']; ?></option>
 <?php } ?>
</select>
</div>

 <div class="form-group">
  <label for="email">Email address</label>
  <input required type="email" class="form-control" id="email" name="email"
  aria-describedlby="emailHelp">
  <small id="emailHelp" class="form-text text-muted">Email Adrress must be Uniqe to Applicant</small>
</div>

<div class="form-group">
  <label for="phone">Phone Number</label>
  <input type="text" class="form-control" id="phone" name="phone"
  aria-describedlby="phoneHelp">
  <small id="phoneHelp" class="form-text text-muted"> Required</small>
  
  <div class="form-group">
  <label for="adress">Address</label>
  <input required type="text" class="form-control" id="adress" name="adress" >
</div>
<br>

<div class="custom-file">
  
  <input type="file" accept= "image/* "class="custom-file-input" id="avatar" name="avatar">
  <label class="custom-file-label" for= "avatar"></label>
<br>

  <small id="avatar" class="form-text text-primary">Not Required</small>

  
  
</div>
</div>

<br>
<button type="submit" name="submit" class="btn btn-success btn-block">Submit Application</button>
</form>
</div>


<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php';?>