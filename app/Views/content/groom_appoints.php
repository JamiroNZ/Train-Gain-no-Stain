<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Appointment List</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Pet Name</th>
                        <th scope="col ">Pet Type</th>
                        <th scope="col ">Grooming Type</th>
                        <th scope="col ">Appointment Date</th>
                        <th scope="col ">Appointment Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($grooming as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['petName'] ?></td>
                        <td><?= $item['petType'] ?></td>
                        <td><?= $item['groomingType'] ?></td>
                        <td><?= $item['appointmentDate'] ?></td>
                        <td><?= $item['appointmentTime'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('grooming', 'custom_pagination') ?>
        </div>
    </div>
    <br>
    <br>
    <a href="/main" class="btn btn-primary">Back to main page</a>
</div>
    <?= $this->endSection() ?>