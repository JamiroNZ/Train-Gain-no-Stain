<?= $this->extend('admin') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4" style="text-align: center;">Grooming Appointment</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">No</th>
                        <th scope="col ">Pet Name</th>
                        <th scope="col ">Pet Type</th>
                        <th scope="col ">Grooming Type</th>
                        <th scope="col ">Appointment Date</th>
                        <th scope="col ">Appointment Time</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Edit</th>
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
                        <td><?= $item['status']?></td>
                        <td>
                            <form action="/groom/<?= $item['id']?>" method="post">
                                <div class="form-group">
                                    <select class="form-control" name="status" id="example-product-status">
                                        <option value="" selected>Update Status</option>
                                        <option value="Accepted" <?= $item['status'] == "Accepted" ? "selected" : "" ?>> Accepted</option>
                                        <option value="Done" <?= $item['status'] == "Done" ? "selected" : "" ?>>Done</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('grooming', 'custom_pagination') ?>
        </div>
    </div>
</div>
    <?= $this->endSection() ?>