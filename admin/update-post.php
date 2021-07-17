<?php include "header.php"; ?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <!-- Form for show edit-->
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id" id="post_id"  class="form-control" value="1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="post_title"  class="form-control" id="post_title" value="ADB to give Rs274 bn to Pakistan for fight against coronavirus" required>
                <div id="Post_Title"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="postdesc" class="form-control" id="postdesc" required rows="10">
                ISLAMABAD: 25, APRIL, 2020: The Asian Development Bank (ADB) on Friday assured Islamabad of providing $1.7 billion (approx Rs274 billion) including $800 million (Rs129 billion) for coronavirus and $900 million (Rs145 billion) policy based lending in ongoing and next fiscal year. According to official sources, Federal Minister for Economic Affairs Makhdum Khusro Bakhtyar had a teleconference with the President of Asian Development Bank Masatsugu Asakawa at Ministry of Economic Affairs [...]
                </textarea>
                <div id="Postdesc"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category" id="category" required>
                    <option value="default" selected="">---Choose a Server---</option>
                    <option value="Business"> Business </option>
                    <option value="Politics"> Politics </option>
                    <option value="Sports"> Sports </option>
                    <option value="Entertainment"> Entertainment </option>
                    <option value="Technology"> Technology </option>
                </select>
                <div id="Category"></div>
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" class="btn btn-info" name="new-image" id="new_image" required style="width: 210px; padding: 15px;">
                <img  src="upload/business.jpg" height="100px">
                <input type="hidden" name="old-image" value="">
                <div id="New_image"></div>
            </div>
            <input type="submit" name="submit" class="btn btn-success btn-block" onclick="update()" value="Update" />
        </form>
        <!-- Form End -->
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
<script type="text/javascript">
    function update(){
        var post_title  =  document.getElementById('post_title').value;
        var postdesc    =  document.getElementById('postdesc').value;
        var category    =  document.getElementById('category').value;
        var New_image   =  document.getElementById('new_image').value;

        // document.getElementById('Post_Title').innerText = post_title;
        // document.getElementById('Postdesc').innerText   = postdesc;
        // document.getElementById('Category').innerText   = category;
        // document.getElementById('New_image').innerText  = New_image;
        if(category == "default"){
            alert("Please, Select Category");
        }
        if(postdesc == "" || post_title == "" || category == "default" || New_image == ""){
            alert("Please, Fill All Fields !!!");
        }
        else{
            alert("Post has been Updated");    
        }
    }
</script>
