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
<title>CODEBIRD | ADMIN PANNEL </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
<style>

</style>
</head>
<body>
<div class="div1">
<h1> <a href="index.php">ADMIN PANNEL FOR CODEBIRD</a> </h1>

<div class="div2 container">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="index.php?insert=insert">New Post</a></li>
<li><a href="index.php?view=view">View Posts</a></li>
<li><a href="logout.php">LogOut</a></li>
</ul>
<hr width="50%" />
<h1 class="text-center f1">Welcome &nbsp;<?php echo $_SESSION['user_name']; ?></h2>
</div>
</div>
<div class="container">
<h1 class="text-center f1">This is The Admin Pannel For The CODEBIRD.</h1>
</div>
<div class="div3 container-fluid">
<h2 class="text-center"><strong><?php echo @$_GET['deleted']; ?></strong></h2>
<?php 
  
  if(isset($_GET['insert'])){
	
     include ("insert_post.php");	
  }
  
?>

<?php if(isset($_GET['view'])){ ?>

<table width="90%" border="2" align="center">
<tr>
<h2 class="text-center"><strong>View All Posts.</strong></h2>
</tr>
<tr>
<th class="text-center">Post No</th>
<th class="text-center">Post Title</th>
<th class="text-center">Post Date</th>
<th class="text-center">Post Author</th>
<th class="text-center">Post Image</th>
<th class="text-center">Post Content</th>
<th class="text-center">Edit</th>
<th class="text-center">Delete</th>
</tr>

<?php
include ("includes/connect.php");

 if(isset($_GET['view'])){
	 
	 $query = "select * from posts order by 1 DESC";
	 $run = mysql_query($query);
	 while($row=mysql_fetch_array($run)){
		 
		 $id = $row['post_id'];
		 $title = $row['post_title'];
		 $date = $row['post_date'];
		 $author = $row['post_author'];
		 $image = $row['post_image'];
		 $content = substr($row['post_content'],0,50);
		 
?>
<tr>
<td class="text-center"><?php echo $id; ?></td>
<td class="text-center"><?php echo $title; ?></td>
<td class="text-center"><?php echo $date; ?></td>
<td class="text-center"><?php echo $author; ?></td>
<td class="text-center"><img src="../images/<?php echo $image; ?>" height="50px" width="50px"></td>
<td><?php echo $content; ?></td>
<td class="text-center"><a href="edit.php?edit=<?php echo $id; ?>">Edit</a></td>
<td class="text-center"><a href="delete.php?del=<?php echo $id; ?>">Delete</a></td>
</tr>
<?php }}} ?>
</table>

 
</div>

<script src="../jquery.js"></script>

<script src="../js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
</body>
</html>

	<?php } ?>