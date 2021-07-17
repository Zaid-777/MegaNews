<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Detail's</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="#" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="1" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" id="f_name" class="form-control" value="Zaid Bin" placeholder="" required>
                          <div id="FirstName"></div>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" id="l_name" class="form-control" value="Khalid" placeholder="" required>
                          <div id="LastName"></div>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" id="username" class="form-control" value="Zaid" placeholder="" required>
                          <div id="User"></div>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" id="role"> value="<?php echo $row['role']; ?>">
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                          <div id="Role"></div>
                      </div>
                      <input type="submit" name="submit" class="btn btn-success btn-block" onclick="update()" value="Update" required />
                  </form>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>

<script type="text/javascript">
    function update(){
      var FirstName     =  document.getElementById('f_name').value;
      var LastName      =  document.getElementById('l_name').value;
      var User          =  document.getElementById('username').value;
      var Role          =  document.getElementById('role').value;
      
      // document.getElementById('FirstName').innerText = FirstName;
      // document.getElementById('LastName').innerText = LastName;
      // document.getElementById('User').innerText = User;
      // document.getElementById('Role').innerText = Role;


      if(FirstName == "" || LastName == "" || User == "" || Role ==""){
        alert("Please, Fill All Fields!!!");
      }
      else{
        alert("User Detail's Updated");  
      }
    }    
</script>
