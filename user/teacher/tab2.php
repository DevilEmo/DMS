<div class="row">
                <form class="col s12 m12 l12">
                   
                        <div class="input-field col m3 push-m9">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_search" type="text" class="validate">
                            <label for="icon_search">Search</label>
                        </div>
                    
                </form>
            </div>





<?php
    $sql = "SELECT * FROM table_grade
    WHERE teacher='$user_data' and grade='IC' and statuss='teacher';";
    $result = mysqli_query($con, $sql);
    $grades = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<table>
  <thead class="row">
    <th class="col m1">ID</th>
    <th class="col m3">USN</th>
    <th class="col m3">Fullname</th>
    <th class="col m3">Subject Code</th>
    <th class="col m1">Grade</th>
    <th class="col m1"></th>
  </thead>
</table>
<ul class="collection" style=" display:block;
  height:50vh;
  overflow:auto;">
  <?php foreach ($grades as $grade): ?>

  <li class="collection-item row" style="padding:0px; margin:5px; ">
    <div class="col m1"><?php echo $grade['id']; ?></div>
    <div class="col m3"><?php echo $grade['usn']; ?></div>
    <div class="col m3"><?php echo $grade['fullname']; ?></div>
    <div class="col m3"><?php echo $grade['subject_code']; ?></div>
    <div class="col m1"><?php echo $grade['grade']; ?></div>
    <div class="col m1"><a class="waves-effect waves-light btn modal-trigger tooltipped" data-position="left"
        data-tooltip="Update" href="#modalview<?php echo $grade['id']; ?>"><i class="material-icons">update</i></a>

      <?php include "edit_delete_modal.php"; ?>
    </div>
  </li>
  <?php endforeach;?>

</ul>

