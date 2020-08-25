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


      <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
              <div class="mt-2 font-weight-bold text-primary text-right">
                  <a  href="slider-gif-setting.php"><button style="width: 100px;" class="btn btn-primary">Geri Dön <i class="fas fa-undo"></i></button></a>
                </div>
              
            </div>
            <div class="card-body">
              <div>
              <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">

             <form action="../operation-back-end/operation.php" method="POST"  class="form-horizontal form-label-left">

             <div class="form-group">
                     
                     <div class="col-md-12 text-center">
                        <img width="120" src="dimg/null.png" title="Aşağıdan Gif yükleyin" alt="">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="control-label " for="first-name">GIF YUKLE <i class="fas fa-pen"></i>
                     </label>
                     <div class="col-md-12 ">
                        <input style="border-color: black; height:auto" type="file" id="first-name"   name="slider_gif" class="form-control">
                     </div>
                  </div>

                  <div class="col-md-12">
                    <button style="width: 100%" type="submit" name="generalsettingsave" class="btn btn-success">Yükle</button>
                  </div>
              </form>
              
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
            </div>
           </div>
              </div>
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





