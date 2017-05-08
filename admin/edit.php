

<!DOCTYPE html>
<html>
<body>
<?php
include ("index.php");
include("includes/connect.php");

$edit_id = @$_GET['edit'];

$query = "select * from posts where post_id='$edit_id'";

$run = mysql_query($query);
while($row=mysql_fetch_array($run)){
		 
		 
		 $edit_id1 = $row['post_id'];
		 $title = $row['post_title'];
		 $date = $row['post_date'];
		 $author = $row['post_author'];
		 $image = $row['post_image'];
		 $content = $row['post_content'];
		 

?>

<form method="post" action="edit.php?edit_form=<?php echo $edit_id1; ?>" enctype="multipart/form-data">
            <table class="table table-bordered" align="center">
                <tr>
                    <td colspan="6"><h1 class="text-center">Edit Post</h1></td>
                </tr>
                <tr>
                   <th class="text-center"><label>Post Title :</label></th>
                   <td><input type="text" name="title" value="<?php echo $title; ?>"></td>
                </tr>    
                <tr>
                   <th class="text-center"><label>Post Author :</label></th>
                   <td><input type="text" name="author" value="<?php echo $author;?>"><br/></td>
                </tr> 
                <tr>
                   <th class="text-center"><label>Post Image :</label></th>
                   <td><input type="file" name="image"><br/>
				   <img src="../images/<?php echo $image; ?>" width="100px" height="100px">
				   </td>
                </tr>
                <tr>
                   <th class="text-center"><label>Post Content :</label></th>
                    <td><textarea name="content" rows="10"><?php echo $content; ?></textarea></td>
                </tr>
                <tr>
                    <td class="text-center" colspan="6"><input type="submit" class="btn btn-info btn-lg" name="update" value="Update Now"></td>
                </tr>
<?php } ?>
            </table>
    </form>
	</body>
	</html>
	
	
	
	<?php
	if(isset($_POST['update'])){
		
		 $update_id = $_GET['edit_form'];
		 $post_title = $_POST['title'];
		  $post_date = date('y-m-d');
		  $post_content = $_POST['content'];
		  $post_image = $_FILES['image']['name'];
		  $post_image_type = $_FILES['image']['type'];
		  $post_image_size = $_FILES['image']['size'];
		  $image_tmp = $_POST['image']['tmp_name'];
		  
		  
		 move_uploaded_file($image_tmp,"../images/$post_image");
		 
		 $update_query = "update posts set post_title='$post_title',post_date='$post_date',post_author='$post_author',post_image='$post_image',post_content='$post_content' where post_id='$update_id'";
		 
		 if(mysql_query($update_query)){
			 
			 echo "<script>window.open('index.php?updated=post has pulished','_self')</script>";
		 }
	}