<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="min-h-screen bg-cover bg-no-repeat bg-fixed bg-center" style="background-image: asset/img/petgrooming.jpg">
    <img src="assets/img/petgrooming.jpg" alt="" style="position: absolute; top: 0; left: 0; z-index: -1; width: 100%; height: auto;">
    <div class="container mx-auto pt-2" style="background-color: #f5f5f5;">
        <p>Pet Grooming</p>
        <table>
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Name</td>
                    <td>Pet Animal</td>
                    <td>Grooming type</td>
                    <td>Appointment Date</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            <br />
            <br />
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>