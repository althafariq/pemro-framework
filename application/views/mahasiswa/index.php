<div class="container">
    <?php if ($this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                New mahasiswa <strong>added successfully</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>

<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url(); ?>mahasiswa/add" class="btn btn-primary">Insert</a>
    </div>
</div>
    <div class="row mt-3">
        <h3>Daftar Mahasiswa</h3>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 0;
            foreach ($mahasiswa as $mhs) :
            $i++; ?>
            <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $mhs['npm'] ?></td>
            <td><?php echo $mhs['nama'] ?></td>
            <td><?php echo $mhs['jurusan'] ?></td>
            <td><?php echo $mhs['fakultas'] ?></td>
            <td><?php echo $mhs['email'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

    </div>

</div>