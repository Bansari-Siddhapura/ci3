<!DOCTYPE html>
<html lang="en">
<?= $this->load->view('layouts/header') ?>

<body>
	<div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" x-effect="" :class="{ 'dark': isDark}">
		<div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
			<!-- Loading screen -->
			<?= $this->load->view('layouts/loading_screen') ?>

			<!-- Sidebar -->
			<?= $this->load->view('layouts/sidebar') ?>

			<div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
				<!-- Navbar -->
				<?= $this->load->view('layouts/navbar') ?>

				<!-- Main content -->
				<div class="w-full h-full p-4">
					<main>						
						<!-- <h1 class="text-3xl font-semibold">Page content</h1> -->
						<?= $this->load->view($view_page ?? 'dashboard') ?>
					</main>
				</div>

				<!-- Main footer -->
				<?= $this->load->view('layouts/footer') ?>
			</div>

			<!-- Panels -->
			<!-- Settings Panel -->
			<?= $this->load->view('layouts/panel/settings') ?>
			<!-- Notification panel -->
			<?= $this->load->view('layouts/panel/notifications') ?>
			<!-- Search panel -->
			<?= $this->load->view('layouts/panel/search') ?>
		</div>
	</div>
	<!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
	<?= $this->load->view('layouts/scripts') ?>
</body>

</html>