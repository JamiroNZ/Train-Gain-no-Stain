<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="background-image-container" style="position: relative;">
    <img src="assets/img/petfeeding.jpg" alt="" style="position: absolute; top: 0; left: 0; z-index: -1; width: 100%; height: auto;">
    <div class="container mx-auto pt-2" style="background-color: #f5f5f5;">
        <p>Feeding Schedule</p>
    </div>
</div>

<?= $this->endSection() ?>