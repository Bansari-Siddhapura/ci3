<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/fonts/fontawesome/css/all.min.css') ?>">
	<title>Document</title>
</head>

<body>
	<div class="container-fluid d-flex justify-content-center">
		<span class="h3">
			ci3 CRUD
		</span>
	</div>

	<div class="container">
		<div class="d-flex justify-content-end">
			<a href="<?= site_url('welcome/show_form') ?>" class="btn btn-primary"><i class="fa-solid fa-plus"></i> ADD</a>
		</div>
		<table class="table">
			<thead>
				<th>Id</th>
				<th>Company</th>
				<th>Phone</th>
				<th>City</th>
				<th>State</th>
				<th>Creation Date</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php foreach ($customers as $customer) { ?>

					<tr>
						<td><?= $customer['id'] ?></td>
						<td><?= $customer['company'] ?></td>
						<td><?= $customer['phone'] ?></td>
						<td><?= $customer['city'] ?></td>
						<td><?= $customer['state'] ?></td>
						<td><?= $customer['created_at'] ?></td>
						<td>
							<a href="<?= site_url('welcome/show_form/' . $customer['id']) ?>" class="text-info"><i class="fa-solid fa-pencil"></i></a>
							<a href="<?= site_url('welcome/delete/' . $customer['id']) ?>" class="text-danger"><i class="fa-solid fa-trash"></i></a>
						</td>
					</tr>

				<?php } ?>
			</tbody>
		</table>
	</div>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/fonts/fontawesome/js/all.min.js') ?>"></script>
</body>

</html>