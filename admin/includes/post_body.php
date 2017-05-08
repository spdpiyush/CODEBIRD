<div class="post_body">
<h1>From Here Post Will Be Driven.


<?php
include("includes/connect.php");

$query = "select * from posts order by 1 DESC";

$run = mysql_query($query);

while($row=mysql_fetch_array($run)){
	
	$post_id = $row['post_id'];
	$title = $row['post_title'];
	$date  = $row['post_date'];
	$author = $row['post_author'];
	$image = $row['post_image'];
	$content = substr($row['post_content'],0,50);
?>
<h2><strong><a href="pages.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a></strong></h2>
<p>Published On :&nbsp; &nbsp; <b> <?php echo $date;?></b></p>
<p style="text-align:right;"> Posted By : &nbsp; <b><?php echo $author; ?></b>
</p>
<center><img class="img-responsive" src="images/<?php echo $image; ?>" style="border:2px solid black; "></center>
<h4 class="text-justify"><b>
<?php echo $content; ?></b>
<p align="right"><a href="pages.php?id=<?php echo $post_id; ?>">Read More</a></p>
</h4>
<?php } ?>

</div>
