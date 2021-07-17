<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" id="cat_name" value="Sports"  placeholder="" required>
                          <div id="Category"></div>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-success btn-block" onclick="update()" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>

<script type="text/javascript">
    function update(){
      var category      =  document.getElementById('cat_name').value;
      // document.getElementById('Category').innerText = category;
      if(category == ""){
        alert("Please, Fill The Field!!!");
      }
      else{
        alert("Category has been Updated");  
      }
    }    
</script>