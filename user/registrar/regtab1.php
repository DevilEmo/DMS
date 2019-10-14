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
    <th class= "col m1">ID</th>
    <th class= "col m3">Owner</th>
    <th class= "col m5">Filename</th>
    <th class= "col m2">Date Created</th>
    <th class= "col m1"></th>
    
</thead>
</table>

<ul class="collection" style=" display:block;
  height:50vh;
  overflow:auto;">
  <?php   
    $sql = "SELECT * FROM upload_teacher WHERE doc_type = 'recom_letter' order by date_upload desc" ;
    foreach ($conn->query($sql) as $row) {
?>

<style>
.collection-item:hover { 
  background-color:grey;
}
</style>
    <li class="collection-item row"
    style="padding:0px; margin:5px; ">
    
    <div class= "col m1"><?php echo $row['id']; ?></div>
    <div class= "col m3"><?php echo $row['teacher']; ?></div>
    <div class= "col m5"><?php echo $row['filename']; ?></div>
    <div class= "col m2"><?php echo $row['date_upload']; ?></div>
    <div class= "col m1"><a class="waves-effect waves-light btn #263238 blue-grey darken-4 tooltipped" data-position="left" data-tooltip="Download" href="teacher.php?file_id=<?php echo $row['id'] ?>"><i class="material-icons">
get_app
</i></a>
</div>
    </li>
    
    <?php } ?>

</ul>
</div>