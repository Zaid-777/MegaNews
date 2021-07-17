<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="btn add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>Sr.No#</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='id'>1</td>
                            <td>Sports</td>
                            <td>1</td>
                            <td class='edit'><a class="btn btn-info" href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <tr>
                            <td class='id'>2</td>
                            <td>Business</td>
                            <td>1</td>
                            <td class='edit'><a class="btn btn-info" href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <tr>
                            <td class='id'>3</td>
                            <td>Politics</td>
                            <td>1</td>
                            <td class='edit'><a class="btn btn-info" href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <tr>
                            <td class='id'>4</td>
                            <td>Entertainment</td>
                            <td>1</td>
                            <td class='edit'><a class="btn btn-info" href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a class="btn btn-danger" onclick="Delete()" href='#'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <tr>
                            <td class='id'>5</td>
                            <td>Technology</td>
                            <td>1</td>
                            <td class='edit'><a class="btn btn-info" href='update-category.php'><i class='fa fa-edit'></i></a></td>
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