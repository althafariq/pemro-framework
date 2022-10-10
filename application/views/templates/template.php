<!DOCTYPE html>
<html lang="en">

<body>
   <!-- header -->
   <?php echo $_header; ?>

   <div class="container-fluid">
      <div class="row">

         <!-- sidebar -->
         <?php echo $_sidebar; ?>

         <div class="col-md-9 ms-sm-auto col-lg-10 px-md-3">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-5 mb-5">
            </div>

            <?php echo $_content; ?>
         </div>
      </div>
   </div>

</body>

</html>