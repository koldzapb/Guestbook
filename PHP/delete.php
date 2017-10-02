<?php

require 'database.php';

$sql = "DELETE FROM test WHERE id= '$_GET[id]'";

	
	header("refresh:1; url=index.php");
	




?>