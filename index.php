<?php 

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';

mysqli_free_result($result);
mysqli_close($conn);




?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Document</title>
</head>
<body>


 <style>

body{
    background-color:darkgoldenrod;

}

#demo{
    color:darkblue;
    padding: 5px;

}

#cards{
    display: none;
}
#winner{
    padding: 20px;
    margin: 40px;
    
}
.container{
    background-color:gray;
}




 </style>

<div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" id="con">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <img src="images/2.jpg" width="300" alt="">
      <h1 class="display-4 fw-normal">اربح مع عبد المجيد</h1>
      <p class="lead fw-normal"></p>
      <h3><p id="countdown"></p></h3>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <h1>للدخول في السحب</h1>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">اسمك الاول</li>
  <li class="list-group-item">اسمك الاخر</li>
  <li class="list-group-item">البريد االالكتروني</li>
  <li class="list-group-item">انتظر</li>
  
</ul>
  </div>


  



<form class = "mt_5" action="index.php" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php  echo $errors['firstNameError'];  ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخر</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php  echo $errors['lastNameError'];  ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php  echo $errors['emailError'];  ?></div>
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary">ارسال</button>
</form>

</div>


<!--
 <form action="index.php" method="POST"> 
    <input type="text"  id="firstName" placeholder="firstName">
    <input type="text"  id="lastName" placeholder="lastName">
    <input type="text"  id="email" placeholder="email">
    <input type="submit"  value="send">
 </form> -->

 
 

 <div class="loader-con">
    <div id="loader">
	    <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>



<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-20">
<button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
اختر الرابح
</button>
</div>



<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel">الفائز</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($usere as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) .' '. htmlspecialchars($user['lastName'])  ?></h1>
        <?php endforeach; ?>
      </div>
    
    </div>
  </div>
</div>

<!--
<div id="cards" class="orw mb-5 pb-5">
  

<div class="col-sm-6">
    <div class="card my-2 bg-light">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php  echo htmlspecialchars($user['email']) ?>
        </div>
    </div>
</div>

</div>
      -->
   





<script src="./js/bootstrap.bundle.min.js" ></script>
<script src="./js/script.js"></script>
<script src="C:\xampp\htdocs\wen\js\script.js"></script>
<script src="./js/jss.js"></script>

</body>
</html>