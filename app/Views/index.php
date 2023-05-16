<!DOCTYPE html>
<html lang="en">
<head>
	<?= $this->include('layouts/content/head')?>
</head>
<body>
	<?= $this->include('layouts/content/navbar')?>
	<br>
	<main>
		<?= $this->renderSection('content')?>
	</main>
	<?= $this->include('layouts/content/footer')?>
	<?= $this->include('layouts/content/scripts')?>
</body>
</html>