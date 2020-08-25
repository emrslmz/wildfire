<?php 
include 'header.php'; 
include 'sidebar.php';
include '../../connect/baglan.php';

$settingsor=$db->prepare("SELECT * from setting where setting_id=?");
$settingsor->execute(array(0));
$settingcek=$settingsor->fetch(PDO::FETCH_ASSOC);

?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

    <?php include 'topbar.php'; ?>






        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">Genel Ayarlar <i class="fas fa-cogs"></i>
          <small>

         <?php
            if (isset($_GET['status']) && $_GET['status'] == 'ok') {?>
               <b style="color: green">Genel Ayarlar Güncellendi..</b>
            <?php } else if (isset($_GET['status']) && $_GET['status'] == 'no') {?>
               <b style="color: red">Güncelleme Başarısız..</b>
         <?php } ?>

      </small></h1> 
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">

             <form action="../operation-back-end/operation.php" method="POST"  class="form-horizontal form-label-left">

                  <div class="form-group">
                     <label class="control-label " for="first-name">Site Başlığı <i class="fas fa-pen"></i>
                     </label>
                     <div class="col-md-12">
                        <input style="border-color: black;" type="text" id="first-name"  value="<?php echo $settingcek['setting_title']; ?>" name="setting_title" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label " for="first-name">Facebook Adresi <i class="fab fa-facebook-f"></i> 
                     </label>
                     <div class="col-md-12">
                        <input style="border-color: blue;" type="text" id="first-name"  value="<?php echo $settingcek['setting_facebook']; ?>" name="setting_facebook" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label " for="first-name">Twitter Adresi <i class="fab fa-twitter"></i>
                     </label>
                     <div class="col-md-12">
                        <input style="border-color: lightblue;" type="text" id="first-name"  value="<?php echo $settingcek['setting_twitter']; ?>" name="setting_twitter" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label " for="first-name">Linkedin Adresi <i class="fab fa-linkedin-in"></i>
                     </label>
                     <div class="col-md-12">
                        <input style="border-color: darkblue;"  type="text" id="first-name"  value="<?php echo $settingcek['setting_linkedin']; ?>" name="setting_linkedin" class="form-control">
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label class="control-label " for="first-name">Youtube Adresi <i class="fab fa-youtube"></i>
                     </label>
                     <div class="col-md-12">
                        <input style="border-color: red;"  type="text" id="first-name"  value="<?php echo $settingcek['setting_youtube']; ?>" name="setting_youtube" class="form-control">
                     </div>
                  </div>

                  
                

                  <div class="col-md-12">
                    <button style="width: 100%" type="submit" name="generalsettingsave" class="btn btn-success">Güncelle</button>
                  </div>
              </form>
              
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
            </div>
           </div>
        

        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- /.container-fluid -->
     <?php include 'footer.php'; ?>

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
    
  <!-- /Logout Modal End-->


    <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
