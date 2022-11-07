<style>
.jumbotron {
   padding-top: 5rem;
   background-color: #ADA9BB;
}
</style>

<section class="jumbotron">


   <div class="pt-4">
      <!-- <img src="<?= base_url(); ?>assets/img/profile/default.png" alt="me" width="200"
         class="rounded-circle img-thumbnail"> -->
      <!-- <h1 class="display-5 fw-normal mt-3"><?php echo $user['name']; ?></h1> -->
      <!-- <p class="lead fw-normal">19081010102</p> -->
      <div class="card border-0 shadow-lg mx-auto" style="max-width: 540px;">
         <div class="row g-0">
            <div class="col-md-4">
               <img src=" <?= base_url(); ?>assets/img/foto.jpg" class="img-fluid rounded float-start">
            </div>
            <div class="col-md-8">
               <div class="card-body">
                  <h5 class="card-title"><?php echo $user['name']; ?></h5>
                  <p class="card-text"><?php echo $user['email']; ?></p>
                  <p class="card-text"><small class="text-muted">Member since
                        <?= date('d F Y', $user['created_at']); ?></small></p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
         d="M0,128L60,106.7C120,85,240,43,360,58.7C480,75,600,149,720,160C840,171,960,117,1080,96C1200,75,1320,85,1380,90.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
      </path>
   </svg>

</section>