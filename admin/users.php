<?php include "header.php"; ?>
<div id="admin-content">
  
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-10">
        <h1 class="admin-heading">All Users Detail's</h1>
      </div>
      
      <div class="col-md-2">
        <a class="btn add-new" href="add-user.php">add user</a>
      </div>

      <div class="col-md-12">
        <table class="content-table">
          <thead>
            <th>Sr.No#</th>
              <th>Full Name</th>
              <th>User Name</th>
              <th>Role</th>
              <th>Edit</th>
              <th>Delete</th>
          </thead>
          <tbody>
              <tr>
                <td class='id'>1</td>
                <td>Zaid Bin Khalid</td>
                <td>Zaid</td>
                <td>Admin</td>
                <td class='edit'><a class="btn btn-info" href='update-user.php'><i class='fa fa-edit'></i></a></td>
                <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
              </tr>
              <tr>
                  <td class='id'>2</td>
                  <td>Umair</td>
                  <td>Umair</td>
                  <td>Normal User</td>
                  <td class='edit'><a class="btn btn-info" href='update-user.php'><i class='fa fa-edit'></i></a></td>
                  <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
              </tr>
              <tr>
                  <td class='id'>3</td>
                  <td>Hassan Bin Saleem</td>
                  <td>Hassan</td>
                  <td>Admin</td>
                  <td class='edit'><a class="btn btn-info" href='update-user.php'><i class='fa fa-edit'></i></a></td>
                  <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
              </tr>
              <tr>
                  <td class='id'>4</td>
                  <td>Hafiz Ahmed</td>
                  <td>Ahmed</td>
                  <td>Admin</td>
                  <td class='edit'><a class="btn btn-info" href='update-user.php'><i class='fa fa-edit'></i></a></td>
                  <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
              </tr>
          </tbody>
      </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>

<script type="text/javascript">
  function Delete(){
    alert("Successfully Deleted!");
  }
</script>