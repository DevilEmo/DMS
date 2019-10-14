
  <div>
    <div id="modalview<?php echo $grade['id'] ?>" class="modal modal-fixed-footer">
    <div class="modal-content">
 
    <form method="POST" action="teacher/edit.php?id=<?php echo $grade['id']; ?>">

<h5>Prelim</h5>

    <div class="row">
    <div class="input-field col s2 ">
      <input value="<?php echo $grade['p_q'] ?>" id="p_q" name="p_q" type="text" class="validate">
      <label class="active" for="p_q">Quiz</label>
    </div>
    <div class="input-field col s2">
      <input value="<?php echo $grade['p_cs'] ?>" id="p_cs" name="p_cs" type="text" class="validate">
      <label class="active" for="p_cs">Class Standing</label>
    </div>
    <div class="input-field col s2">
      <input value="<?php echo $grade['p_pe'] ?>" id="p_pe" name="p_pe" type="text" class="validate">
      <label class="active" for="p_pe">Prelim Exam</label>
    </div>
    <div class="input-field col s2">
      
      <input <?php $sheet = $grade['sheet']; 
        switch($sheet) {
          case 'f2f':
          echo "disabled";
          break;
          case 'f2fleclab':
          echo "disabled";
          break;
          default:
        }
       ?> 
      
       value="<?php echo $grade['p_ol'] ?>" id="p_ol" name="p_ol" type="text" class="validate">
      <label class="active" for="p_ol">Online</label>
    </div>
    <div class="input-field col s2">
      <input value="<?php echo $grade['pg'] ?>" id="pg" name="pg" type="text" class="validate">
      <label class="active" for="pg">Prelim Grade</label>
    </div>
  </div>


  <h5>Midterm</h5>


  <div class="row">
    <div class="input-field col s2 ">
      <input value="<?php echo $grade['m_q'] ?>" id="m_q" name="m_q" type="text" class="validate">
      <label class="active" for="m_q">Quiz</label>
    </div>
    <div class="input-field col s2">
      <input value="<?php echo $grade['m_cs'] ?>" id="m_cs" name="m_cs" type="text" class="validate">
      <label class="active" for="m_cs">Class Standing</label>
    </div>
    
    <div class="input-field col s2">
      <input value="<?php echo $grade['m_me'] ?>" id="m_me" name="m_me" type="text" class="validate">
      <label class="active" for="m_me">Midterm Exam</label>
    </div>
    <div class="input-field col s2">
      <input <?php $sheet = $grade['sheet']; 
        switch($sheet) {
          case 'f2f':
          echo "disabled";
          break;
          case 'f2fleclab':
          echo "disabled";
          break;
          default:
        }
       ?>  value="<?php echo $grade['m_ol'] ?>" id="m_ol" name="m_ol" type="text" class="validate">
      <label class="active" for="m_ol">Online</label>
    </div>
    <div class="input-field col s2">
      <input value="<?php echo $grade['mg'] ?>" id="mg" name="mg" type="text" class="validate">
      <label class="active" for="mg">Midterm Grade</label>
    </div>
  </div>



  <h5>Finals</h5>


  <div class="row">
    <div class="input-field col s2">
      <input value="<?php echo $grade['f_q'] ?>" id="f_q" name="f_q" type="text" class="validate">
      <label class="active" for="f_q">Quiz</label>
    </div>
    <div class="input-field col s2">
      <input value="<?php echo $grade['f_cs'] ?>" id="f_cs" name="f_cs" type="text" class="validate">
      <label class="active" for="f_cs">Class Standing</label>
    </div>
   
    <div class="input-field col s2">
      <input value="<?php echo $grade['f_fe'] ?>" id="f_fe" name="f_fe" type="text" class="validate">
      <label class="active" for="f_fe">Final Exam</label>
    </div>
    <div class="input-field col s2">
      <input <?php $sheet = $grade['sheet']; 
        switch($sheet) {
          case 'f2f':
          echo "disabled";
          break;
          case 'f2fleclab':
          echo "disabled";
          break;
          default:
        }
       ?>  value="<?php echo $grade['f_ol'] ?>" id="f_ol" name="f_ol" type="text" class="validate">
      <label class="active" for="f_ol">Online</label>
    </div>
    <div class="input-field col s2">
      <input value="<?php echo $grade['fg'] ?>" id="fg" name="fg" type="text" class="validate">
      <label class="active" for="fg">Final Grade</label>
    </div>
  </div>



  <div class="row">
    <div class="input-field col s4">
      <input <?php $sheet = $grade['sheet']; 
        switch($sheet) {
          case 'f2f':
          echo "disabled";
          break;
          case 'f2fol':
          echo "disabled";
          break;
          default:
        }
       ?>  value="<?php echo $grade['lec'] ?>" id="lec" name="lec" type="text" class="validate">
      <label class="active" for="lec">lecture</label>
    </div>
    <div class="input-field col s4">
      <input <?php $sheet = $grade['sheet']; 
        switch($sheet) {
          case 'f2f':
          echo "disabled";
          break;
          case 'f2fol':
          echo "disabled";
          break;
          default:
        }
       ?> value="<?php echo $grade['lab'] ?>" id="lab" name="lab" type="text" class="validate">
      <label class="active" for="lab">laboratory</label>
    </div>
    <div class="input-field col s4">
      <input value="<?php echo $grade['ave'] ?>" id="ave" name="ave" type="text" class="validate">
      <label class="active" for="ave">Average</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s11">
      <input value="<?php echo $grade['grade'] ?>" id="grade" name="grade" type="text" class="validate">
      <label class="active" for="grade">Grade</label>
    </div>
    <div class="input-field col s1">
     <p><?php echo $grade['sheet'] ?></p>
      </div>
  </div>



    </div>
    <div class="modal-footer">
      <button  type="submit" name="edit" class="modal-close waves-effect waves-green btn">Update </button>
    </div>
    </form>
     
  </div>

