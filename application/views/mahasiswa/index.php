<div class="container">
   <?php if ($this->session->flashdata('flash') ) : ?>
   <div class="row mt-3">
      <div class="col-md-6">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong><?= $this->session->flashdata('flash'); ?></strong> succesfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      </div>
   </div>
   <?php endif; ?>

   <div class="row mt-3 justify-content-between">
      <div class="col-4 w-25">
         <form action="" method="post">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search mahasiswa..." name="keyword">
               <button class="btn btn-primary" type="submit">Search</button>
            </div>
         </form>
      </div>
      <div class="col-1 float-end">
         <a href="<?= base_url(); ?>mahasiswa/add" class="btn btn-primary">Insert</a>
      </div>
   </div>

   <div class="row mt-3">
      <h3>Daftar Mahasiswa</h3>
      <?php if( empty($mahasiswa)) : ?>
      <div class="alert alert-danger" role="alert">
         Data not found.
      </div>
      <?php endif; ?>

      <table class="table table-striped">
         <thead>
            <tr>
               <th scope="col">No</th>
               <th scope="col">NPM</th>
               <th scope="col">Nama</th>
               <th scope="col">Jurusan</th>
               <th scope="col">Fakultas</th>
               <th scope="col">No HP</th>
               <th scope="col">Email</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php 
            $i = 0;
            foreach ($mahasiswa as $mhs) :
            $i++; ?>
            <tr>
               <th scope="row"><?php echo $i; ?></th>
               <td><?php echo $mhs->npm ?></td>
               <td><?php echo $mhs->nama ?></td>
               <td><?php echo $mhs->jurusan ?></td>
               <td><?php echo $mhs->fakultas ?></td>
               <td><?php echo $mhs->hp ?></td>
               <td><?php echo $mhs->email ?></td>
               <td>
                  <a href="<?php echo base_url(); ?>mahasiswa/edit/<?php echo $mhs->npm ?>"
                     class="badge text-bg-info">Edit</a>
                  <a href="<?php echo base_url(); ?>mahasiswa/delete/<?php echo $mhs->npm ?>"
                     onclick="return confirm('Delete this mahasiswa?');" id="delete">
                     <img src="<?php echo base_url(); ?>assets/img/close.png" id="deleteButton" width="16" height="16">
                  </a>
               </td>
            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>