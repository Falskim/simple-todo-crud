<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css'); ?>">
</head>
<body>
    <form action="<?php echo site_url('todos/edit') ?>" method="post" enctype="multipart/form-data" >
   

        <h2>Activity ID : <?= $todo->id ?></h2>
        <input type="hidden" name="id" value="<?= $todo->id?>" />

        <div class="form-group">
            <label for="name">Activity*</label>
            <input class="form-control <?php echo form_error('activity') ? 'is-invalid':'' ?>"
                type="text" name="activity" value="<?= $todo->activity;?>" />
            <div class="invalid-feedback">
                <?php echo form_error('name') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Priority*</label>
            <input type="radio" name="priority" value="high"> High<br>
            <input type="radio" name="priority" value="medium"> Medium<br>
            <input type="radio" name="priority" value="low"> Low
            <div class="invalid-feedback">
                <?php echo form_error('priority') ?>
            </div>
        </div>
        
        <div class="form-group">
            <label for="deadline">Deadline*</label>
            <input type="date" id="start" name="deadline" value="<?= $todo->deadline;?>">
        </div>

        <div class="form-group">
            <label for="name">Description*</label>
            <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                name="description"><?= $todo-> description; ?></textarea>
            <div class="invalid-feedback">
                <?php echo form_error('description') ?>
            </div>
        </div>

        <input class="btn btn-success" type="submit" name="btn" value="Save" />
    </form>

</body>
</html>