<h2 style="text-align: center">Comments</h2>
<?php
require 'database.php';


$results_per_page = 5;

$sql = "SELECT * FROM test";
$result = $pdo->query($sql);
$number_of_results =  $result->rowCount();

$number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;

$sql='SELECT * FROM test ORDER BY id DESC LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = $pdo->query($sql);
if($result->rowCount() > 0){
        while($row = $result->fetch()){
		
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comments</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading">
	<span><?php echo $row['ime']; ?></span>
	</div>
    <div class="panel-body"><?php echo $row['komentar']; ?></div>
	 <div class="pannel-footer clearfix" >
	 <a href='delete.php?id="<?php echo $row['id']; ?>"' class="btn btn-danger" role="button" >Delete</a>
	 </div>
  </div>
</div>
<?php
		}
?>		

</body>
</html>

<?php    
}
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
}

echo '<p><a href="home.html" >Home</a></p>';
echo '<p><a href="create.html" >Create a comment</a></p>';


