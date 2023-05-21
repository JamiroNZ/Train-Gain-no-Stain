<!DOCTYPE html>
<html>

<head>
<?= $this->include('layouts/content/head')?>

</head>

<body>
  <?= $this->include('layouts/content/navbar')?>
  
  <?= $this->renderSection('content')?>

  <br>

  <?= $this->include('layouts/content/scripts')?>

</body>

</html>