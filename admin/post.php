<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="btn add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12 table-responsive-md" >
                  <table class="table table-striped table-hover content-table ">
                      <thead>
                          <th>Sr.No#</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td class='id'>1</td>
                              <td>ADB to give Rs274 bn to Pakistan for fight against coronavirus</td>
                              <td>Business</td>
                              <td>15 May, 2020</td>
                              <td>Admin</td>
                              <td class='edit'><a class="btn btn-info" href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>2</td>
                              <td>PM lauds EU for continuation of GSP+status to Pakistan</td>
                              <td>Politics</td>
                              <td>15 May, 2020</td>
                              <td>Admin</td>
                              <td class='edit'><a class="btn btn-info" href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>3</td>
                              <td>Australia become world's top Test, T20 side</td>
                              <td>Sports</td>
                              <td>15 May, 2020</td>
                              <td>Admin</td>
                              <td class='edit'><a class="btn btn-info" href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          
                          <tr>
                              <td class='id'>4</td>
                              <td>Harry Potter first editions found in skip go up for auction</td>
                              <td>Entertainment</td>
                              <td>15 May, 2020</td>
                              <td>Admin</td>
                              <td class='edit'><a class="btn btn-info" href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>5</td>
                              <td>AI-Brain-Chip Neuralink To Be Implanted in Human Brain Within a Year</td>
                              <td>Technology</td>
                              <td>15 May, 2020</td>
                              <td>Admin</td>
                              <td class='edit'><a class="btn btn-info" href='update-post.php'><i class='fa fa-edit'></i></a></td>
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