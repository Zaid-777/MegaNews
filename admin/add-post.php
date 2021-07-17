<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" id="post_title" class="form-control" autocomplete="off" required>
                          <div id="Post_Title"></div>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" id="postdesc" rows="5"  required></textarea>
                          <div id="Postdesc"></div>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control" id="category" required>
                              <option value="default" selected> ---Choose a Server--- </option>
                              <option value="Business"> Business </option>
                              <option value="Politics"> Politics </option>
                              <option value="Sports"> Sports </option>
                              <option value="Entertainment"> Entertainment </option>
                              <option value="Technology"> Technology </option>
                          </select>
                          <div id="Category"></div>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-info btn-block" required style="width: 210px; padding: 15px;">
                          <div id="FileToUpload"></div>
                      </div>
                      <input type="submit" name="submit" class="btn btn-success btn-block" onclick="update()" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>

<script type="text/javascript">
    function update(){
        var post_title    =  document.getElementById('post_title').value;
        var postdesc      =  document.getElementById('postdesc').value;
        var category      =  document.getElementById('category').value;
        var fileToUpload  =  document.getElementById('fileToUpload').value;

        // document.getElementById('Post_Title').innerText         = post_title;
        // document.getElementById('Postdesc').innerText           = postdesc;
        // document.getElementById('Category').innerText           = category;
        // document.getElementById('FileToUpload').innerText       = fileToUpload;
        if(category == "default"){
            alert("Please, Select Category");
        }
        if(postdesc == "" || post_title == "" || category == "default" || fileToUpload == ""){
            alert("Please, Fill All Fields !!!");
        }
        else{
            alert("Post Add Successfully");    
        }
    }    
</script>