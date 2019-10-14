<?php

$sql = "SELECT * FROM upload_teacher  order by id desc" ;
$statement = $conn->prepare($sql);
$statement->execute();
$files = $statement->fetchAll(PDO::FETCH_OBJ);
?>
        <div class="row">
                <form class="col s12 m12 l12">
                   
                        <div class="input-field col m6 push-m6">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_search" type="text" class="validate">
                            <label for="icon_search">Search</label>
                        </div>
                    
                </form>
            </div>


<table>
<thead class="row">
    <th class="col m2">ID</th>
    <th class="col m3">User</th>
    <th class="col m3">Filename</th>
    <th class="col m3">Date Upload</th>
    <th class="col m1"></th>
</thead>
</table>
<ul class="collection" style=" display:block;
  height:50vh;
  overflow:auto;">
  <?php foreach ($files as $file): ?>

  
<style>
.collection-item:hover { 
  background-color:grey;
}
</style>
  <li class="collection-item row" style="padding:0px; margin:5px; ">
      <div class="col m2"><?= $file->id; ?></div>
      <div class="col m3"><?= $file->teacher; ?></div>
      <div class="col m3"><?= $file->filename; ?></div>
      <div class="col m3"><?= $file->date_upload; ?></div>
      <div class= "col m1"><a class="waves-effect waves-light btn #263238 blue-grey darken-4 tooltipped" data-position="left" data-tooltip="Download" href="teacher.php?file_id=<?php echo $row['id'] ?>"><i class="material-icons">
get_app
</i></a>
</div>
</li>
  <?php endforeach;?>

</li>



    </div>

