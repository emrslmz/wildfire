<?php 
include 'header.php'; 
include 'sidebar.php';
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

    <?php include 'topbar.php'; ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">Slider Ayarları</h1>
          <div class="row">
          <div class="col-md-6">
          <P>Aşağıdan yüklü resimleri silebilir/düzenleyebilir yada yan tarafdan resim yükleyebilirsiniz</P>
          </div>
          <div class="col-md-6 text-right">
          <button class="btn btn-warning">Resim Yükle <i class="fas fa-plus"></i></button>
          
          </div>
          </div>

          

           <!-- DataTales Example -->
           <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
              <h6 class="mt-2 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Slider Resmi</th>
                      <th>Slider Sırası</th>
                      <th>Slider Durumu</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                    </tr>
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
