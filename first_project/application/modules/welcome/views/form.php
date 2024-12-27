<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title>Form</title>
</head>

<body>
    <div class="container w-50">
        <div class="my-3">
            <h2>Customer Save</h2>
        </div>
        <?php //dd($edit_row) 
        ?>

        <form action="<?= site_url('welcome/add') ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $edit_row[0]['id'] ?? '' ?>">
            <div class="mb-2">
                <input type="text" name="company" class="form-control <?= form_error('company') ? 'is-invalid' : '' ?>" placeholder="enter customer name" value="<?= set_value('company', $edit_row[0]['company'] ?? '') ?>">
                <?= form_error('company') ?>
            </div>
            <div class="mb-2">
                <input type="text" name="phone" class="form-control <?= form_error('phone') ? 'is-invalid' : '' ?>" placeholder="enter phone number" value="<?= set_value('phone', $edit_row[0]['phone'] ?? '')  ?>">
                <?= form_error('phone') ?>
            </div>
            <div class="mb-2">
                <input type="text" name="city" class="form-control <?= form_error('city') ? 'is-invalid' : '' ?>" placeholder="enter city" value="<?= set_value('city', $edit_row[0]['city'] ?? '')  ?>">
                <?= form_error('city') ?>
            </div>
            <div class="mb-2">
                <input type="text" name="state" class="form-control <?= form_error('state') ? 'is-invalid' : '' ?>" placeholder="enter state" value="<?= set_value('state', $edit_row[0]['state'] ?? '')  ?>">
                <?= form_error('state') ?>
            </div>
            <div class="mb-2">
                <input type="file" class="form-control" name="profile">
                <?= form_error('profile') ?>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>