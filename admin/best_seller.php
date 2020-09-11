<?php
session_start();
require '../config/config.php';
require '../config/common.php';


if (empty($_SESSION['user_id']) && empty($_SESSION['logged_in'])) {
  header('Location: /admin/login.php');
}

?>


<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Best Seller Items</h3>
                <br>
                <p>Items Which are sold above 5.</p>
              </div>
              <?php
                $currentDate = date("Y-m-d");
                $stmt = $pdo->prepare("SELECT * FROM sale_order_detail GROUP BY product_id HAVING SUM(quantity) > 5 ORDER BY id DESC");
                $stmt->execute();
                $result = $stmt->fetchAll();
              ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="d-table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Product</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if ($result) {
                      $i = 1;
                      foreach ($result as $value) { ?>

                        <?php
                          $stmt = $pdo->prepare("SELECT * FROM products WHERE id=".$value['product_id']);
                          $stmt->execute();
                          $result = $stmt->fetchAll();
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo escape($result[0]['name'])?></td>
                        </tr>
                    <?php
                      $i++;
                      }
                    }
                    ?>
                  </tbody>
                </table><br>

              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  <?php include('footer.html')?>

  <script>
  $( document ).ready(function() {
    $('#d-table').DataTable();
  });
  </script>
