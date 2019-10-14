      
<?php
    $sql = "SELECT * FROM `course`";
    $result = mysqli_query($con, $sql);
    $course = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



<div class="row"></div>

<div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-image">
        <img src="../img/excel.png" style="height:10rem;">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Download your CSV <u><a href="">f2f only</a></u>, <u><a href="">with lec and lab</a></u>, <u><a href="">with ol</a> </u>, <u><a href="">with ol and lec lab</a></u></p>
        </div>
        <div class="card-action">
        <a class="btn btn-large  cyan modal-trigger tooltipped" data-position="right" data-tooltip="Add CSV gradesheet" href="#addcsv"><i class="material-icons">add</i></a>

        </div>
      </div>
    </div>
  </div>
            
</div>

    <!-- Modal Structure -->
    <div id="addcsv" class="modal modal-fixed-footer">
    <form method="post" action="" enctype="multipart/form-data" id="import_form">
        <div class="modal-content small">
        
        <div class="row">
            
        <div class="input-field col s6">
            
  <select class="browser-default" id="subject_code" name="subject_code">
    <option value="" disabled selected>Subject Code</option>
    
    <?php foreach ($course as $c): ?>
    <option value="<?php echo $c['subject_code']; ?>"><?php echo $c['subject_code']; ?></option>
    <?php endforeach;?>

  </select>

            </div>
            <div class="input-field col s6">
  <select class="browser-default" id="class_number" name="class_number">
    <option value="" disabled selected>Class Number</option>
    
    <?php foreach ($course as $c): ?>
    <option value="<?php echo $c['class_number']; ?>"><?php echo $c['class_number']; ?></option>
    <?php endforeach;?>

  </select>

            </div>
        </div>

        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input required type='file' name="importfile" id="importfile">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        
       <input type="hidden" name="teacher" value="<?php echo $_SESSION['username']; ?>">



    
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light" type="submit" id="but_import" name="but_import">Upload
        <i class="material-icons right">file_upload</i>
      </button></div>
      </form>
  


