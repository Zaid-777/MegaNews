<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" id="cat" placeholder="Category Name" required>
                          <div id="Category"></div>
                      </div>
                      <input type="submit" name="save" class="btn btn-success btn-block" onclick="update()" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>

<script type="text/javascript">
    function update(){
      var category      =  document.getElementById('cat').value;
      // document.getElementById('Category').innerText = category;
      if(category == ""){
        alert("Please, Fill The Field!!!");
      }
      else{
        alert("Category Add Successfully");  
      }
    }    
</script>