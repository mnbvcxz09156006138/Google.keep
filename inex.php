<?php
include "header.php" ;
include "dataabase.php";
$notes = $db->query("SELECT * FROM tasks")

?>
<body class="">
<div class="card text-center mt-1">
  <div class="card-header">
    
  </div>

  <div class="card-body">
    <input type="text" name="title" class="form-control" placeholder=" اسم وظیفه خود را وارد کنید"> 
    <input type="color" name="color" class=" form-control-color mt-2" value="#063d7c" title="رنگ خود را انتخاب کنین">
    <input type="time" class="rounded" style="border-style: none; padding:2px; width:135px;" name="time" value="13:30">
    <input type="date" class="rounded" style="border-style: none; padding:2px; width:135px;" name="date" value="2020-06-01">
  </div>
    
       <a href="#" class="btn btn-primary mt-5">ذخیره</a>
</div>
<div class="container-fluid  ">
<?php foreach ($notes as $note): ?>

<div class="card mt-3">
<div class="card-header">
<?php echo $note["name"] ?>
  </div>
  <div class="card-body ">
  
    <blockquote class="blockquote mb-8">
 
      <p>طراحی سایت نوت برای دوره طراحی سایت</p>
      <p class="card-text mb-2 stroke fs-6"> <i class="far fa-alarm-clock"></i> 17:22 </p>    </blockquote>
      <a class="btn-sm btn-outline-light"></a>
      <div class="card-header">
    Quote
  </div>
  </div>
</div>
<div class="card mt-3">
<div class="card-header">
    Quote
  </div>
  <div class="card-body ">
      
    <blockquote class="blockquote mb-8">
      <p>A well-known quote, contained in a blockquote element.</p>
      <p class="card-text mb-2 stroke fs-6"> <i class="far fa-alarm-clock"></i> 17:22 </p>    </blockquote>
  </div>
</div>
<div class="card mt-3">
<div class="card-header">
    Quote
  </div>
  <div class="card-body ">
    <blockquote class="blockquote mb-8">
      <p>A well-known quote, contained in a blockquote element.</p>
      <p class="card-text mb-2 stroke fs-6"> <i class="far fa-alarm-clock"></i> 17:22 </p>    </blockquote>

  </div>
</div>
<?php endforeach; ?>

<?php
include "footar.php" ;
?> 
</body>
   </html>
