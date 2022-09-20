<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Insert New Mahasiswa Into Database
                </div>
                <div class="card-body">
                    <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" name="npm" class="form-control" id="npm">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <input type="text" name="fakultas" class="form-control" id="fakultas">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <button class="btn btn-primary me-md-2" type="submit" name="submit" >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>