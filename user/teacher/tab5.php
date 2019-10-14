<?php

$sql = "SELECT * FROM upload_teacher where teacher='$user_data' order by date_upload desc" ;
$result = mysqli_query($con, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
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
    <th class="col m1">ID</th>
    <th class="col m4">Filename</th>
    <th class="col m3">size (in mb)</th>
    <th class="col m3">Date Upload</th>
    <th class="col m1"></th>
</thead>
</table>

<ul class="collection"style=" display:block;
  height:50vh;
  overflow:auto;">
  <?php foreach ($files as $file): ?>
    <li class="collection-item row" style="padding:0px; margin:5px; ">
      <div class="col m1"><?php echo $file['id']; ?></div>
      <div class="col m4"><?php echo $file['filename']; ?></div>
      <div class="col m3"><?php echo floor($file['size'] / 1000) . ' KB'; ?></div>
      <div class="col m3"><?php echo $file['date_upload']; ?></div>
      <div class="col m1"><a class="waves-effect waves-light btn tooltipped" data-position="left" data-tooltip="Download" href="teacher.php?file_id=<?php echo $file['id'] ?>"><i class="material-icons">file_download</i></a></td>
    </li>
  <?php endforeach;?>

</ul>



    </div>

