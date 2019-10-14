
<?php
include "../../php/config.php";
	if(isset($_POST['edit'])){
    
    		$id = $_GET['id'];
			$p_q = $_POST['p_q'];
			$p_cs = $_POST['p_cs'];
			$p_pe = $_POST['p_pe'];
            $p_ol = $_POST['p_ol'];
            $pg = $_POST['pg'];

            $m_q = $_POST['m_q'];
			$m_cs = $_POST['m_cs'];
			$m_me = $_POST['m_me'];
            $m_ol = $_POST['m_ol'];
            $mg = $_POST['mg'];
 
            $f_q = $_POST['f_q'];
			$f_cs = $_POST['f_cs'];
			$f_fe = $_POST['f_fe'];
            $f_ol = $_POST['f_ol'];
            $fg = $_POST['fg'];
            
            $lec = $_POST['lec'];
            $lab = $_POST['lab'];

            $ave = $_POST['ave'];
            $grade = $_POST['grade'];
                     
            
    $status = "dean";

                $sql2 = "INSERT INTO change_grade_request (id,p_q,p_cs,p_pe,p_ol,pg,m_q,m_cs,m_me,m_ol,mg,f_q,f_cs,f_fe,f_ol,fg,lec,lab,ave,grade) VALUES ('$id','$p_q','$p_cs','$p_pe','$p_ol','$pg','$m_q','$m_cs','$m_me','$m_ol','$mg','$f_q','$f_cs','$f_fe','$f_ol','$fg','$lec','$lab','$ave','$grade')";
                if (mysqli_query($con, $sql2)) {
                    $message = 'Request sent';

                    echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('$message');
                        window.location.replace(\"http:../teacher.php#tab3\");
                    </SCRIPT>";
                }
                $sql3 = "UPDATE table_grade SET 
                 statuss = '$status' WHERE id = '$id'";
               
                if($con->query($sql3) === TRUE) {
                }
                  
    }
    
?>

