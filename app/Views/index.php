<!DOCTYPE html>
<html lang="en">
<head>
	<?= $this->include('layouts/head')?>
</head>
<body>
	<?= $this->include('layouts/navbar')?>
	<br>
	<?= $this->renderSection('content')?>
	<br>
	<?= $this->include('layouts/footer')?>
</body>
</html>