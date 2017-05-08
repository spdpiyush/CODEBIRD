<?php
 session_start();

if(!isset($_SESSION['user_name'])){
	
	header("location: login.php");
    }
	else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>CODE BIRD | New Post </title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <style>
        table{
            margin-top:50px;
            
        }
        th,td{
            border:1px solid black;
            text-transform:uppercase;
            font-size:20px;
            
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-10 table-responsive">
        <form method="post" action="insert_post.php" enctype="multipart/form-data">
            <table class="table table-bordered" align="center">
                <tr>
                    <td colspan="6"><h1 class="text-center">Insert New Post</h1></td>
                </tr>
                <tr>
                   <th class="text-center"><label>Post Title :</label></th>
                   <td><input type="text" name="title"></td>
                </tr>    
                <tr>
                   <th class="text-center"><label>Post Author :</label></th>
                   <td><input type="text" name="author"><br/></td>
                </tr> 
                <tr>
                   <th class="text-center"><label>Post Image :</label></th>
                   <td><input type="file" name="image"><br/></td>
                </tr>
                <tr>
                   <th class="text-center"><label>Post Content :</label></th>
                    <td><textarea name="content" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td class="text-center" colspan="6"><input type="submit" class="btn btn-info btn-lg" name="submit" value="submit"></td>
                </tr>
            </table>
    </form>
        </div>
    </div>
    </div>



<?php
include("includes/connect.php");

if(isset($_POST['submit'])){
	
	$title = $_POST['title'];
	$date = date('y-m-d');
	$author = $_POST['author'];
	$content = $_POST['content'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	if($title =='' or $author=='' or $content=='')
	{
		echo "<script>alert('Any Field is Missing.')</script>";
		exit();
	}
	if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif" or $image_type="image/jpg" ){
		if($image_size <= 5000000){
			move_uploaded_file($image_tmp,"../images/$image_name");
		}
		else{
			echo "<script>alert('Image is Larger,only Upto 5MB is Allowed')</script>";
		}
			
	}
	else{
		echo "<script>alert('Image Type Is Invalid')</script>";
	}
	
	$query = "insert into posts (post_title,post_date,post_author,post_image,post_content) values ('$title','$date','$author','$image_name','$content')";
	
	if(mysql_query($query)){
		echo "<script>window.open('index.php?published=Post Has Been Published','_self')</script>";
	}
		
}

?>
</body>
</html>

	<?php } ?>