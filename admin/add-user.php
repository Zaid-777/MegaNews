<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
                          <div id="FirstName"></div>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
                          <div id="LastName"></div>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" id="user" class="form-control" placeholder="Username" required>
                          <div id="User"></div>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                          <div id="Password"></div>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" id="role">
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                          <div id="Role"></div>
                      </div>
                      <input type="submit"  name="save" class="btn btn-success btn-block" onclick="update()" value="Save" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>

<script type="text/javascript">
    function update(){
      var FirstName     =  document.getElementById('fname').value;
      var LastName      =  document.getElementById('lname').value;
      var User          =  document.getElementById('user').value;
      var Password      =  document.getElementById('password').value;
      var Role          =  document.getElementById('role').value;
      
      // document.getElementById('FirstName').innerText = FirstName;
      // document.getElementById('LastName').innerText = LastName;
      // document.getElementById('User').innerText = User;
      // document.getElementById('Password').innerText = Password;
      // document.getElementById('Role').innerText = Role;


      if(FirstName == "" || LastName == "" || User == "" || Password == "" || Role ==""){
        alert("Please, Fill All Fields!!!");
      }
      else{
        alert("Add New User Successfully");  
      }
    }    
</script>
