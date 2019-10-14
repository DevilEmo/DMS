<?php
include "../php/conn.php";
include '../php/logout.php';
session_start();
if(isset($_SESSION['username'])){
  
	
}else {
	header('location:../index.php');
}

$user_data = $_SESSION['username'];


$sql = "SELECT count(*) FROM `upload_teacher` WHERE  `doc_type` = 'recom_letter'"; 
$result = $conn->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn(); 
$count = $number_of_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../php/header.php";?>
    <title>registrar</title>
</head>



<body style="font-family: 'Montserrat', sans-serif;font-weight: normal;">

<nav class="nav-extended #263238 blue-grey darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">AMA Lipa</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
        <a class="waves-effect transparent btn modal-trigger" href="#profile">
        <?php echo $_SESSION['username'];?></a></li>
        <li><form method='POST'>
    <input class="btn transparent" type='submit' name='logout' value='Logout'/>
</form>
</li>


      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        
        <li class="tab"><a href="#tab1">My Documents
        <?php if($count > 0){?>
                <span class="new badge" data-badge-caption=""><?php echo $count; ?></span>
                <?php } ?>
        </a></li>
      </ul>
    </div>


  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#"><?php echo $_SESSION['username'];?></a></li>
    <li><form method='POST'>
    <input  class="btn" type='submit' name='logout' value='Logout'/>
</form>
</li>
  </ul>

    <div id="tab1"style="margin:2%;"><?php include 'registrar/regtab1.php';?></div>
                    
</body>


<div id="profile" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>viewing Profile</p>
      <p>edit</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>


<?php include "../php/footer.php"; ?>

</html>



