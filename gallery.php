<?php 

$title = 'Gallery';
require_once 'includes/header.php';

?>
<h1 class="text-center"><?php echo $title?></h1>
<br>

<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

<div class="gallery">
  <a target="" href="./images/1.jpg">
    <img src="./images/1.jpg" alt="Cinque Terre" width="800" height="400">
  </a>
  <div class="desc">Correctional Officers On Duty</div>
</div>

<div class="gallery">
  <a target="_blank" href="./images/2.jpg">
    <img src="./images/2.jpg" alt="Forest" width="800" height="400">
  </a>
  <div class="desc">Correctional Officers On Duty</div>
</div>

<div class="gallery">
  <a target="_blank" href="./images/3.jpg">
    <img src="./images/3.jpg" alt="Northern Lights" width="800" height="400">
  </a>
  <div class="desc">Correctional Officers On Duty</div>
</div>

<div class="gallery">
  <a target="_blank" href="./images/4.jpg">
    <img src="./images/4.jpg" alt="Mountains" width="800" height="400">
  </a>
  <div class="desc">Correctional Officers On Duty</div>
</div>

<div class="gallery">
  <a target="_blank" href="./images/5.jpg">
    <img src="./images/5.jpg" alt="Mountains" width="800" height="400">
  </a>
  <div class="desc">Correctional Officers On Duty</div>
</div>

<div class="gallery">
  <a target="_blank" href="./images/6.jpg">
    <img src="./images/6.jpg" alt="Mountains" width="800" height="400">
  </a>
  <div class="desc">Correctional Officers On Duty</div>
</div>

<div class="gallery">
  <a target="_blank" href="./images/1.jpg">
    <img src="./images/1.jpg" alt="Mountains" width="800" height="400">
  </a>
  <div class="desc">Correctional Officers On Duty</div>
</div>




<br>
<?php require_once 'includes/footer.php';?>