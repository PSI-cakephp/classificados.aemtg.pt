<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Tell the browser to be responsive to screen width -->
<?=$this->Html->css('backend/bootstrap.min.css')?>
<?=$this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')?>
<?=$this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')?>
<?=$this->Html->css('backend/plugins/datatables/dataTables.bootstrap.css')?>
<?=$this->Html->css('backend/AdminLTE.min.css')?>
<?=$this->Html->css('backend/skins/_all-skins.min.css')?>
<section class="content-header">
      <h1>
        Users
      </h1>
</section>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>User Type</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach ($users as $user): ?>
                	<tr>
                		<td><?=$user['username']?></td>
                		<td><?=$user['email']?></td>
                		<td><?=$user['status']?></td>
                		<td><?=$user['user_type']?></td>
                	</tr>
                	<?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>User Type</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  <!-- /.control-sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.2.3 -->
<?=$this->Html->script('backend/plugins/jQuery/jquery-2.2.3.min.js')?>

<!-- Bootstrap 3.3.6 -->
<?=$this->Html->script('backend/bootstrap.min.js')?>

<!-- DataTables -->
<?=$this->Html->script('backend/plugins/datatables/jquery.dataTables.min.js')?>
<?=$this->Html->script('backend/plugins/datatables/dataTables.bootstrap.min.js')?>

<!-- Slimscroll -->
<?=$this->Html->script('backend/plugins/slimScroll/jquery.slimscroll.min.js')?>

<!-- FastClick -->
<?=$this->Html->script('backend/plugins/fastclick/fastclick.js')?>

<!-- AdminLTE App -->
<?=$this->Html->script('backend/app.min.js')?>

<!-- AdminLTE for demo purposes -->
<?=$this->Html->script('backend/demo.js')?>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>