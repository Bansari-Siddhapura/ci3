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
        <form action="<?= site_url('welcome/add') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $edit_row[0]['id'] ?? '' ?>">
            <div class="mb-2">
                <input type="text" name="company" class="form-control" placeholder="enter customer name" value="<?php echo $edit_row[0]['company'] ?? '' ?>">
            </div>
            <div class="mb-2">
                <input type="text" name="phone" class="form-control" placeholder="enter phone number" value="<?php echo $edit_row[0]['phone'] ?? '' ?>">
            </div>
            <div class="mb-2">
                <input type="text" name="city" class="form-control" placeholder="enter city" value="<?php echo $edit_row[0]['city'] ?? '' ?>">
            </div>
            <div class="mb-2">
                <input type="text" name="state" class="form-control" placeholder="enter state" value="<?php echo $edit_row[0]['state'] ?? '' ?>">
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>