<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"> 
	<style>
		.header, .footer {
			font-family: 'Roboto Condensed', sans-serif;
		}
	</style>
</head>
<body>
	<div class="header jumbotron bg-dark text-white">
		<h1> Simple TODO Website </h1>
	</div>	
	<div class="container-fluid p-5">
		
	
		<div class="text-center">
			<h3><b> To Do List </b></h3>
			<hr>
		</div>
		
		<table class="table">
			<thead class="thead-dark">
				<tr>
				<th scope="col">ID</th>
				<th scope="col">Activity</th>
				<th scope="col">Priority</th>
				<th scope="col">Deadline</th>
				<th scope="col">Finished</th>
				<th scope="col">Description</th>
				<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($todos as $todo): ?>
				<tr>
				<th scope="row"><?= $todo->id?></th>
				<td><?= $todo->activity?></td>
				<td><?= $todo->priority?></td>
				<td><?= $todo->deadline?></td>
				<td><?php 
					if($todo->finished == 0) 
						echo "Not Yet";
					else 
						echo "Finished";?>
				</td>
				<td><?= $todo->description?></td>
				<td width="250">
					<a href="<?php echo site_url('todos/edit/'.$todo->id) ?>"
						class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
					<a href="<?php echo site_url('todos/delete/'.$todo->id) ?>"
						class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
				</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
					
		<div class="text-center pb-3">	
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataModal">
				<i class="fa fa-plus"></i> Add New TODO
			</button>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addDataModalLabel">New To Do</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>

					<form action="<?php echo site_url('todos/add') ?>" method="post" enctype="multipart/form-data" >
				
						<div class="modal-body">
							<div class="form-group">
								<b><label for="name">Activity*</label></b>
								<input class="form-control <?php echo form_error('activity') ? 'is-invalid':'' ?>"
									type="text" name="activity" placeholder="Activity name" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<b><label for="name">Priority*</label><br></b>
								<input type="radio" name="priority" value="high"> High
								<input type="radio" name="priority" value="medium"> Medium
								<input type="radio" name="priority" value="low"> Low
								<div class="invalid-feedback">
									<?php echo form_error('priority') ?>
								</div>
							</div>
							
							<div class="form-group">
								<b><label for="deadline">Deadline*</label></b>
								<input type="date" id="start" name="deadline">
							</div>

							<div class="form-group">
								<b><label for="name">Description*</label></b>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
									name="description" placeholder="Description"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>

	<div class="footer bg-dark p-3">
		<div class="container-fluid text-center text-white">
			<a>Created by Fawwaz Syiham Muyassar</a>
		</div>
	</div>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>