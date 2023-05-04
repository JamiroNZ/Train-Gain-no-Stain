<!DOCTYPE html>
<html lang="en">
<head>
	<?= $this->include('layouts/head')?>
</head>
<body>
	<?= $this->include('layouts/navbar')?>
	<?= $this->renderSection('content')?>
	<?= $this->include('layouts/footer')?>
</body>
</html>