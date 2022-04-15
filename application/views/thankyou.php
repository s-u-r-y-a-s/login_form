<!doctype html>
<html>
<head>
	<title>Thank you Registration</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<style>

body{
	background:#d8edf8;
}
.container{
		margin-top: 2%;
	}

</style>

<body >
	
<div class="container">
		<table class = "table table-bordered"><tr><th>id</th>
		<th>first_name</th>
		<th>last_name</th>
		<th>phone</th>
		<th>email</th>
		<th>degsignation</th>
		</tr>
		<?php
		
		foreach($a->result() as $o)
		{
			echo '<tr>';
			echo '<td>'.$o->id.'</td>';
			echo '<td>'.$o->first_name.'</td>';
			echo '<td>'.$o->last_name.'</td>';
			echo '<td>'.$o->phone.'</td>';
			echo '<td>'.$o->email.'</td>';
			echo '<td>'.$o->designation.'</td>';
			echo '</tr>';
		}
		?>
	</table>
	<a href = "<?php echo base_url().'index.php/User';?> ">back to register</a>
</div>	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
</body>

</html>