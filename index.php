<?php include('function.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task tracker by Aleksandar Ilic</title>

	<!-- 	include bootsrap file -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- include font file -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- include jQ -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style>
		.btn-col {
			width: 38px;
		}
		*:disabled {
			background-color: #CCCCCC !important;
			border: none !important;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		
		<header class="row">
			<div class="col-md-6">
				<a href="#">Enter restore mode</a>
			</div>
			<div class="col-md-6 text-right">
				Total Time: <span id="tally"></span>
			</div>
		</header>
		<form id="form-new" action="">
			<div class="row from-group">
				<div class="from-group col-md-10">
  					<input id="name" name="name" type="text" class="form-control" placeholder="Enter new task name..." aria-describedby="basic-addon2">
  				</div>	
  				<div class="from-group col-md-2">
    				<button type="submit" class="btn btn-block btn-success"><?php echo i('play'); ?></button>
  				</div>
			</div>
		</form>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Task</th>
					<th>Start</th>
					<th>End</th>
					<th>Time</th>
					<th colspan="2">Control</th>
				</tr>
			</thead>
			<tbody id="log"></tbody>
		</table>

	</div>
	<!-- include script file -->
	<script src="script.js"></script>
	</body>
</html>