<?php
include "../php/conn.php";
include '../php/logout.php';
session_start();
if(isset($_SESSION['username'])){
  
	
}else {
	header('location:../index.php');
}

$user_data = $_SESSION['username'];

function randStrGen($len){
    $result = "";
    $chars = "abcdefghijklmnopqrstuvwxyz$?!0123456789";
    $charArray = str_split($chars);
    for($i = 0; $i < $len; $i++){
	    $randItem = array_rand($charArray);
	    $result .= "".$charArray[$randItem];
    }
    return $result;
}
// Usage example
$randstr = randStrGen(8);


$sql = "SELECT count(*) FROM `upload_teacher`"; 
$result = $conn->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn(); 
$count = $number_of_rows;

$sql2 = "SELECT count(*) FROM `user` WHERE `usertype` <=2"; 
$result2 = $conn->prepare($sql2); 
$result2->execute(); 
$number_of_rows2 = $result2->fetchColumn(); 
$count2 = $number_of_rows2;

$sql3 = "SELECT count(*) FROM `course`"; 
$result3 = $conn->prepare($sql3); 
$result3->execute(); 
$number_of_rows3 = $result3->fetchColumn(); 
$count3 = $number_of_rows3;


$sql4 = "SELECT count(*) FROM `documents`"; 
$result4 = $conn->prepare($sql4); 
$result4->execute(); 
$number_of_rows4 = $result4->fetchColumn(); 
$count4 = $number_of_rows4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../php/header.php";?>
    <title>Admin</title>
</head>



<body style="font-family: 'Montserrat', sans-serif;font-weight: normal;">

<nav class="nav-extended #263238 blue-grey darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">AMA Lipa</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><?php echo $_SESSION['username'];?></a></li>
        <li><form method='POST'>
    <input class="btn transparent" type='submit' name='logout' value='Logout'/>
</form>
</li>


      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Documents
        <?php if($count > 0){?>
                <span class="new badge" data-badge-caption=""><?php echo $count; ?></span>
                <?php } ?>
        </a></li>
        <li class="tab"><a href="#test2">Users
        <?php if($count2 > 0){?>
                <span class="new badge" data-badge-caption=""><?php echo $count2; ?></span>
                <?php } ?>
        </a></li>
        <li class="tab"><a href="#test3">Subjects
        <?php if($count3 > 0){?>
                <span class="new badge" data-badge-caption=""><?php echo $count3; ?></span>
                <?php } ?>
        </a></li>
        <!-- <li class="tab"><a href="#test4">My Documents -->
        <?php //if($count4 > 0){?>
                <!-- <span class="new badge" data-badge-caption=""><?php echo $count4; ?></span> -->
                <?php //} ?>
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


    <div id="test1"style="margin:2%;"><?php include 'admin/admintab1.php';?></div>
    <div id="test2"style="margin:2%;"><?php include 'admin/admintab2.php';?></div>
    <div id="test3"style="margin:2%;"><?php include 'admin/admintab3.php';?></div>
    <div id="test4"style="margin:2%;"><?php include 'admin/admintab4.php';?></div>
                    
</body>
 
<?php include "../php/footer.php"; ?>

</html>