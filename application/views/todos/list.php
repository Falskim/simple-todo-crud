<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My To Do List</title>
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
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="#">
			<h4 class="font-weight-bold m-0">
				<span style="color: coral">F</span>SM
			</h4>
		</a>
		<button
			class="navbar-toggler"
			type="button"
			data-toggle="collapse"
			data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
			<ul class="navbar-nav my-2 my-lg-0">
				<li class="nav-item">
					<a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid p-5">
	
		<div class="text-center">
			<h3><b>My To Do List </b></h3>
			<hr>
		</div>
		
		<table class="table">
			<thead class="thead-dark text-center">
				<tr>
				<th scope="col">ID</th>
				<th scope="col">Activity</th>
				<th scope="col">Deadline</th>
				<th scope="col">Priority</th>
				<th scope="col">Status</th>
				<th scope="col">Description</th>
				<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($todos as $todo): ?>
				<tr>
				<!-- ID -->
				<th scope="row" class="text-primary"><?= $todo->id?></th>
				<!-- Activity -->
				<td><?= $todo->activity?></td>
				<!-- Deadline -->
				<td><?php 
				if($todo->deadline != "0000-00-00")
					echo $todo->deadline;?>
				</td>
				<!-- Priority -->
				<td>
				<?php if($todo->priority == "high")
					echo '<button type="button" class="btn btn-outline-danger btn-block" >High';
				else if($todo->priority == "medium")
					echo '<button type="button" class="btn btn-outline-warning btn-block">Medium</button>';
				else
					echo '<button type="button" class="btn btn-outline-primary btn-block">Low</button>';?>
				</button></td>
				<!-- Status -->
				<td width="150"><?php 
					if($todo->finished == 1) 
						echo '</i><button type="button" class="btn btn-outline-success btn-block" ><i class="fa fa-check"> Done';
					else 
						echo '</i><button type="button" class="btn btn-outline-secondary btn-block" ><i class="fa fa-times"></i> Not Yet';?>
				</button></td>
				<!-- Description -->
				<td><?= $todo->description?></td>
				<!-- Action -->
				<td width="250" class="text-center">
					<a href="<?php echo site_url('todos/edit/'.$todo->id) ?>"
						class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
					<a href="<?php echo site_url('todos/delete/'.$todo->id) ?>"
						class="btn btn-danger"><i class="fa fa-ban"></i> Delete</a>
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
								<b><label for="name">Activity</label></b>
								<input class="form-control <?php echo form_error('activity') ? 'is-invalid':'' ?>"
									type="text" name="activity" placeholder="Activity name" required />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<b><label for="name">Priority</label><br></b>
								<input type="radio" name="priority" value="high"> High
								<input type="radio" name="priority" value="medium"> Medium
								<input type="radio" name="priority" value="low"> Low
								<div class="invalid-feedback">
									<?php echo form_error('priority') ?>
								</div>
							</div>
							
							<div class="form-group">
								<b><label for="deadline">Deadline</label></b><br>
								<input type="date" id="start" name="deadline">
							</div>

							<div class="form-group">
								<b><label for="name">Description</label></b>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
									name="description" placeholder="Description"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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