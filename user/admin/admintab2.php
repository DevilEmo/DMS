<?php
$sql = 'SELECT * FROM user WHERE usertype<=2 order by id desc limit 7';
$statement = $conn->prepare($sql);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_OBJ);


 ?>


 
  <div class="row">
                    <div class="col col s12 m12 l12">
                    
                        <div class="input-field col s6 m6 l6">
                        <a class="btn waves-effect waves-light modal-trigger tooltipped" data-position="right" data-tooltip="Add User" href="#adduser"><i class="material-icons">
person_add
</i></a>
                        </div>
                        
                        <div class="input-field col s6 m6 l6">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_search" type="text" class="validate">
                            <label for="icon_search">Search</label>
                        </div>
                        
                    </div>
    </div>

    <table>
  
<thead class="row">
        <tr>
          <th class="col m1">ID</th>
          <th class="col m3">Name</th>
          <th class="col m3">User Type</th>
          <th class="col m3">Username</th>
          <th class="col m2">Password</th>
        </tr>
    </thead>
    </table>
    <ul class="collection" style=" display:block;
  height:50vh;
  overflow:auto;">

        <?php foreach($user as $person): ?>
  
        <li class="collection-item row" style="padding:0px; margin:5px; ">
  
            <div class="col m1"><?= $person->id; ?></div>
            <div class="col m3"><?= $person->fullname; ?></div>
            <div class="col m3"><?= $person->usertype; ?></div>
            <div class="col m3"><?= $person->username; ?></div>
            <div class="col m2">
              <a href="#update_user<?= $person->id ?>" 
              class="waves-effect waves-light btn #263238 blue-grey darken-4 tooltipped modal-trigger" data-position="left" data-tooltip="Update">
              <i class="material-icons">update</i>
              </a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="admin/delete_user.php?id=<?= $person->id ?>" 
              class="waves-effect waves-light btn #263238 blue-grey darken-4 tooltipped" data-position="right" data-tooltip="Delete">
              <i class="material-icons">delete</i>
              </a>
            </div>
          </li>
        <?php endforeach; ?>
    </ul>
      

    <div id="adduser" class="modal modal-fixed-footer">
    <form method="post" action="admin/query.php" enctype="multipart/form-data" id="add_user">
        <div class="modal-content">
        
        <div class="row">
            
            <div class="input-field col s4">
                <input required id="first_name" name="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s4">
                <input required id="middle_name" name="middle_name" type="text" class="validate">
                <label for="middle_name">Middle Name</label>
            </div>
            <div class="input-field col s4">
                <input required id="last_name" name="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>

    
        <div class="row">           
            <div class="input-field col s6">
                <input required id="username" name="username" type="text" class="validate">
                <label for="email">User Name</label>
            </div>
            <div class="input-field col s6">
                <input id="password" name="password" type="text" value="<?php echo $randstr;?>" class="validate">
                <label for="password">Password</label>
            </div>
        </div>



        <label>User Type</label>
        <select required class="browser-default" name="usertype">
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Student</option>
            <option value="2">Teacher</option>

    
        </select>

    
        </div>
        <div class="modal-footer">
            <button class="waves-effect waves-light btn #263238 blue-grey darken-4" type="submit" id="add_user" name="add_user">Add User
        <i class="material-icons right">add</i>
      </button></div>
      </form>
    </div>






    <?php foreach($user as $person): ?>
  

    <div id="update_user<?=$person->id;?>" class="modal modal-fixed-footer">
    <form method="post" action="admin/query.php?id=<?= $person->id; ?>" enctype="multipart/form-data" id="update_user">
        <div class="modal-content">
        
        <div class="row">
            
            <div class="input-field">
                <input required id="first_name" value="<?= $person->fullname; ?>" name="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
           
        </div>

    
        <div class="row">           
            <div class="input-field col s6">
                <input required id="username" value="<?= $person->username; ?>"  name="username" type="text" class="validate">
                <label for="email">User Name</label>
            </div>
            <div class="input-field col s6">
                <input id="password" name="password" type="text" value="<?= $person->pass; ?>" class="validate">
                <label for="password">Password</label>
            </div>
        </div>



        <label>User Type</label>
        <select required class="browser-default" name="usertype">
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Student</option>
            <option value="2">Teacher</option>
    
        </select>

    
        </div>
        <div class="modal-footer">
            <button class="waves-effect waves-light btn #263238 blue-grey darken-4" type="submit" id="update_user" name="update_user">Update User
        <i class="material-icons right">update</i>
      </button></div>
      </form>
    </div>


    <?php endforeach; ?>
  