<div class="row">
                <form class="col s12 m12 l12">
                   
                        <div class="input-field col m3 push-m9">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_search" type="text" class="validate">
                            <label for="icon_search">Search</label>
                        </div>
                    
                </form>
            </div>


            <table>
  <thead class="row">
    <th class="col m2">USN</th>
    <th class="col m3">Student</th>
    <th class="col m3">Teacher</th>
    <th class="col m1">Subject</th>
    <th class="col m3">Date Approved</th>
</thead>
</table>

<ul class="collapsible"style=" display:block;
  height:50vh;
  overflow:auto;">
<?php
$sql = "SELECT * FROM table_grade WHERE statuss='done' order by date_upload desc;";
foreach ($conn->query($sql) as $row) {
?>


<?php
$id = $row['id'];
$sql3 = "SELECT * FROM change_grade_request WHERE id=$id;";
foreach ($conn->query($sql3) as $rowww) {
}?>

<style>
.collapsible-header:hover { 
  background-color:grey;
}
</style>
    <li>
      <div class="collapsible-header row tooltipped" data-position="top" data-tooltip="Show/Hide Grades" 
      style="padding:2px; margin:10px;">
      <div class="col m2"><?php echo $row['usn']; ?></div>
      <div class="col m3"><?php echo $row['fullname']; ?></div>
      <div class="col m3"><?php echo $row['teacher']; ?></div>
      <div class="col m1"><?php echo $row['subject_code']; ?></div>
      <div class="col m3"><?php echo $row['date_upload']; ?></div>
      </div>

      
      <div class="collapsible-body">
      
      <table class="table">
  <thead style="background-color:white;">
    
  <tr>
    <th>Quiz</th>
    <th>CS</td>
    <th>OL</th>
    <th>PE</th>
    <th>PG</td>
    <th>Quiz</th>
    <th>CS</th>
    <th>OL</td>
    <th>ME</th>
    <th>MG</th>
    <th>Quiz</th>
    <th>CS</th>
    <th>OL</th>
    <th>FE</td>
    <th>FG</th>
    <th>LEC</th>
    <th>LAB</th>
    
    <th>AVE</th>
    <th>Grade</th>
    <th></th>
    </tr>
  </thead>
  <tbody>

 
<tr  style="color:green;">
      <td><?php echo $row['p_q']; ?></td>
      <td><?php echo $row['p_cs']; ?></td>
      <td><?php echo $row['p_pe']; ?></td>
      <td><?php echo $row['p_ol']; ?></td>
      <td><?php echo $row['pg']; ?></td>

      <td><?php echo $row['m_q']; ?></td>
      <td><?php echo $row['m_cs']; ?></td>
      <td><?php echo $row['m_me']; ?></td>
      <td><?php echo $row['m_ol']; ?></td>
      <td><?php echo $row['mg']; ?></td>

      
      <td><?php echo $row['f_q']; ?></td>
      <td><?php echo $row['f_cs']; ?></td>
      <td><?php echo $row['f_fe']; ?></td>
      <td><?php echo $row['f_ol']; ?></td>
      <td><?php echo $row['fg']; ?></td>
    
      <td><?php echo $row['lec']; ?></td>
      <td><?php echo $row['lab']; ?></td>

      <td><?php echo $row['ave']; ?></td>
      <td><?php echo $row['grade']; ?></td>
      
     </tr>




<?php
$id = $row['id'];
$sql2 = "SELECT * FROM old_grades WHERE id=$id;";

foreach ($conn->query($sql2) as $roww) {
?>

<tr style="color:red;">
      <td><?php echo $roww['p_q']; ?></td>
      <td><?php echo $roww['p_cs']; ?></td>
      <td><?php echo $roww['p_pe']; ?></td>
      <td><?php echo $roww['p_ol']; ?></td>
      <td><?php echo $roww['pg']; ?></td>

      <td><?php echo $roww['m_q']; ?></td>
      <td><?php echo $roww['m_cs']; ?></td>
      <td><?php echo $roww['m_me']; ?></td>
      <td><?php echo $roww['m_ol']; ?></td>
      <td><?php echo $roww['mg']; ?></td>

      
      <td><?php echo $roww['f_q']; ?></td>
      <td><?php echo $roww['f_cs']; ?></td>
      <td><?php echo $roww['f_fe']; ?></td>
      <td><?php echo $roww['f_ol']; ?></td>
      <td><?php echo $roww['fg']; ?></td>
    
      <td><?php echo $roww['lec']; ?></td>
      <td><?php echo $roww['lab']; ?></td>

      <td><?php echo $roww['ave']; ?></td>
      <td><?php echo $roww['grade']; ?></td>
      
     </tr>
     
    <?php } ?>
  </tbody>
</table>


      </div>
    </li>

<?php } ?>

  </ul>


