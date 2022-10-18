<div class="container">
   <div class="row mt-3">
      <div class="col-md-6">
         <div class="card">
            <div class="card-header">
               Edit Existing Data Mahasiswa
            </div>
            <div class="card-body">
               <form action="" method="post">
                  <input type="hidden" name="npm" value="<?= $mahasiswa->npm ?>">
                  <div class="form-group">
                     <label for="npm">NPM</label>
                     <input type="text" name="npm" class="form-control" id="npm" value="<?php echo $mahasiswa->npm ?>">
                     <div class="form-text text-danger"><?php echo form_error('npm') ?></div>
                  </div>
                  <div class="form-group">
                     <label for="nama">Nama</label>
                     <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa->nama ?>">
                     <div class="form-text text-danger"><?php echo form_error('nama') ?></div>
                  </div>
                  <div class="form-group">
                     <label for="jurusan">Jurusan</label>
                     <input type="text" name="jurusan" class="form-control" id="jurusan"
                        value="<?= $mahasiswa->jurusan ?>">
                     <div class="form-text text-danger"><?php echo form_error('jurusan') ?></div>
                  </div>
                  <div class="form-group">
                     <label for="fakultas">Fakultas</label>
                     <input type="text" name="fakultas" class="form-control" id="fakultas"
                        value="<?= $mahasiswa->fakultas ?>">
                     <div class="form-text text-danger"><?php echo form_error('fakultas') ?></div>
                  </div>
                  <div class="form-group">
                     <label for="hp">No HP</label>
                     <input type="text" name="hp" class="form-control" id="hp" value="<?= $mahasiswa->hp ?>">
                     <div class="form-text text-danger"><?php echo form_error('hp') ?></div>
                  </div>
                  <button class="btn btn-primary mt-3 float-end" type="submit" name="submit">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>