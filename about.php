<?php 
$title = 'About';
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getGender();
?>
<h1 class="text-center text-warning bg-success bg-opacity-50">Start Your Career</h1>
<br>
 <?php
 echo "<h3> The Department of Correctional Services (DCS) falls under the   Ministry of National Security (MNS) and is comprised of two main Divisions – the Custodial Services Division and the Rehabilitation & Probation Aftercare Division.  The Correctional Officers are a part of the Custodial Services Division and are responsible for maintaining a safe, secure, and healthy environment that fosters rehabilitation and reintegration of offenders</h3>";
 ?>
 <br>
 <br>

 <a class="btn btn-warning" href="index.php" role="button">Join Now!</a>






<?php require_once 'includes/footer.php';?>