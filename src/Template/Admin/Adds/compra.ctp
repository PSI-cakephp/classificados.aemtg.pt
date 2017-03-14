<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        Compra
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
                  <th>Título</th>
                  <th>Preço</th>
                  <th>Descrição</th>
                  <th>Ranting</th>
                  <th>Data<th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach ($compras as $compra): ?>
                	<tr>
                		<td><?=$compra['title']?></td>
                		<td><?=$compra['price']?></td>
                		<td><?=$compra['description']?></td>
                		<td><?=$compra['average_rating']?></td>
                		<td><?=$compra['created']?></td>
                    <td><?=$this->Html->link('Editar','',array('class'=>'button'))?></td>
                    <td><?=$this->Html->link('Eliminar','',array('class'=>'button'));?></td>
                	</tr>
                	<?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
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
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>