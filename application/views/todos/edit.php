<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Simple TODO CRUD</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css'); ?>">
</head>

<body>
    <div class="container-fluid p-5">
        <form action="<?php echo site_url('todos/edit') ?>" method="post" enctype="multipart/form-data">
            <div class="container text-center">
                <h5>Edit Todo #<?= $todo->id ?></h5><br>
            </div>
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
                <b><label for="name">Is Done ?</label></b><br>
                <input type="checkbox" name="finished" value="1" <?=$todo->finished == 1 ? "checked" : ""?>> Yes
            </div>

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
        </form>
    </div>
</body>

</html>