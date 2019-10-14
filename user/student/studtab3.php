
                <form class="row">
                   
                <div class="input-field col s12 m6 l6">
                          
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_search" type="text" class="validate">
                            <label for="icon_search">Search</label>
                        </div>
                    
                </form>


  <?php   
    $sql = "SELECT * FROM upload_teacher WHERE teacher='$user_data' order by date_upload desc" ;
    foreach ($conn->query($sql) as $row) {
?>


    <div class="row">
    <div class="col s12 m6 l4">
    <div class="card horizontal">
      <div class="card-image">
        <img src="../img/math1.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
    <div class= "row" >   
    <p><?php echo $row['subject_code']; ?></p><br>
    <p><?php echo $row['filename']; ?></p>
    <p><?php echo $row['date_upload']; ?></p>
    </div>
        </div>
        <div class="card-action">
        <div class= "col m1"><a class="waves-effect waves-light btn #263238 blue-grey darken-4 tooltipped" data-position="left" data-tooltip="Download" href="teacher.php?file_id=<?php echo $row['id'] ?>">Download</a>
        </div>
      </div>
    </div>
  </div>
  </div>    
    <?php } ?>
