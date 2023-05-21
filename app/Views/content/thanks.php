<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container">
    <br>
    <br>
    <br>
    <h2 style="text-align: center;">Thanks for booking!</h2>
    <br>
    <br>
    <div class="container">
  <div class="row">
    <div class="col-md">
    </div>
    <div class="col-md">
        <a href="/groomapps" class="btn btn-primary btn-block">See grooming appointments</a>
        <br>
        <a href="/trainapps" class="btn btn-primary btn-block">See training appointments</a>
        <br>
        <a href="/main" class="btn btn-primary btn-block">Back to main page</a>
    </div>
    <div class="col-md">
    </div>
  </div>
</div>
</div>

<?= $this->endSection() ?>