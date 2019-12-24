<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Edit To Do</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css'); ?>">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
        </div>
    </nav>

    <div class="container-fluid py-2 px-4 m-5">
        <form action="<?php echo site_url('todos/edit') ?>" method="post" enctype="multipart/form-data">
            <div class="container text-center">
                <h4>Edit Todo #<?= $todo->id ?></h4><br>
            </div>
            <hr>
            <input type="hidden" name="id" value="<?= $todo->id?>" />

            <div class="form-group">
                <b><label for="name">Activity</label></b>
                <input class="form-control <?php echo form_error('activity') ? 'is-invalid':'' ?>" type="text"
                    name="activity" value="<?= $todo->activity;?>" />
                <div class="invalid-feedback">
                    <?php echo form_error('name') ?>
                </div>
            </div>

            <div class="form-group">
                <b><label for="name">Priority</label></b> <br>
                <input type="radio" name="priority" value="high" <?=$todo->priority == "high" ? "checked" : ""?>> High
                <input type="radio" name="priority" value="medium" <?=$todo->priority == "medium" ? "checked" : ""?>>
                Medium
                <input type="radio" name="priority" value="low" <?=$todo->priority == "low" ? "checked" : ""?>> Low
                <div class="invalid-feedback">
                    <?php echo form_error('priority') ?>
                </div>
            </div>

            <div class="form-group">
                <b><label for="name">Deadline</label></b><br>
                <input type="date" id="start" name="deadline" value="<?= $todo->deadline;?>">
            </div>

            <div class="form-group">
                <b><label for="name">Description</label></b>
                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                    name="description"><?= $todo-> description; ?></textarea>
                <div class="invalid-feedback">
                    <?php echo form_error('description') ?>
                </div>
            </div>

            <div class="form-group">
                <b><label for="name">Done </label></b>
                <input type="checkbox" name="finished" value="1" <?=$todo->finished == 1 ? "checked" : ""?>>
            </div>

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
        </form>
    </div>

	<div class="footer bg-dark p-3">
		<div class="container-fluid text-center text-white">
			<a>Created by Fawwaz Syiham Muyassar</a>
		</div>
	</div>
</body>

</html>