<?php 
include 'header.php'; 
include 'sidebar.php';


$gifsor=$db->prepare("SELECT * from gif where gif_id=:?");
$gifsor->execute(array(0));
$gifcek=$gifsor->fetch(PDO::FETCH_ASSOC);
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

    <?php include 'topbar.php'; ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">Gif Ayarları</h1>
          <div class="row">
          <div class="col-md-6">
          <P>Aşağıdan yüklü gifleri silebilir/düzenleyebilir yada yan tarafdan gif yükleyebilirsiniz</P>
          </div>
          <div class="col-md-6 text-right">
          <a href="slider-gif-add.php"><button style="width: 100px;" class="btn btn-warning">  GIF Yükle   <i class="fas fa-plus"></i></button></a>
          
          </div>
          </div>

          

           <!-- DataTales Example -->
           <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
              <h6 class="mt-2 font-weight-bold text-primary">Yüklenmiş Gifler</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Yüklü Gif</th>
                      <th>Gif İsmi</th>
                      <th></th>
                      <th></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                        foreach ($gifcek as $gifturn) {
                        ?>
                    <tr class="text-left">
                      <td><img src="<?php echo $gifturn['gif_picture']; ?>" alt="GIF YÜKLENEMEDİ"/></td>
                      <td style="width: 100px;"><?php echo $gifturn['gif_name']; ?></td>
                      <td class="text-right" style="width: 100px;"><a href=""><button style="width: 100px;" class="btn btn-primary ">Düzenle</button></a></td>
                      <td class="text-right" style="width: 100px;"><a href=""><button style="width: 100px;" class="btn btn-danger">Sil</button></a></td>
                    </tr>
                        <?php } ?>
                  </tbody>
                </table>
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
