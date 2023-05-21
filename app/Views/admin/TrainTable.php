<?= $this->extend('admin') ?>
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
                        <th scope="col ">Training Type</th>
                        <th scope="col ">Training Duration</th>
                        <th scope="col ">Appointment Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($training as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['petName'] ?></td>
                        <td><?= $item['petType'] ?></td>
                        <td><?= $item['trainingType'] ?></td>
                        <td><?= $item['trainingDuration'] ?></td>
                        <td><?= $item['appointmentDate'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('training', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>