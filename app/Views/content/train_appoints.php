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
                        <th scope="col ">Training Type</th>
                        <th scope="col ">Training Duration</th>
                        <th scope="col ">Appointment Date</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
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
                        <td><?= $item['status']?></td>
                        <td>
                            <form action="/train/<?= $item['id']?>" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel?')">Cancel</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('training', 'custom_pagination') ?>
        </div>
    </div>
    <br>
    <br>
    <a href="/main" class="btn btn-primary">Back to main page</a>
</div>
<?= $this->endSection() ?>