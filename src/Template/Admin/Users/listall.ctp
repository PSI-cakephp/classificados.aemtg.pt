<section class="content-header">
      <h1>
        Users
      </h1>
</section>

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
	                		<td class="status-<?=$user['id']?>"><?=$user['status']?></td>
	                		<td><?=$user['user_type']?></td>
	                		<td><?php
                        echo '<button type="button" class="btn btn-primary btn-sm botao" data-target= "#modal2" data-toggle="modal" id="editar-'.$user['id'].'">Editar</button>'
                        ?>
                      </td>
	                		<td><button type="button" class="btn btn-warning btn-sm botao" data-toggle="modal" data-target="#myModal" >Eliminar</button></td>
                      <td class="blockbutton button-<?=$user['id']?>">
	                		<?php if($user['status']=='Ativado')
		                		{
                          echo '<button type="button" class="btn btn-danger btn-sm bloquear" id="bloquear-'.$user['id'].'" >Bloquear</button>';
		                			//echo "<td>".$this->Html->link(__('Bloquear'),'/admin/users/bloquear/'.$user['id'],['class' => 'btn btn-danger btn-sm'])."</td>";
		                		}
		                		else if($user['status']=='Bloqueado')
		                		{
                          echo '<button type="button" class="btn btn-success btn-sm ativar" id="ativar-'.$user['id'].'">Ativar</button>';
		                			//echo "<td>".$this->Html->link(__('Ativar'),'/admin/users/ativar/'.$user['id'],['class' => 'btn btn-success btn-sm'])."</td>";
		                		}
		                	?>
	                		</td>
	                		<td><?=$this->Html->link(__('Reset Password'),'Admin/Users/'.$user['id'],['class' => 'btn btn-info btn-sm'])?></td>
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

<!-- Modal Eliminar -->
<div class="example-modal">
    <div class="modal modal-danger" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Eliminar Utilizador</h4>
              </div>
              <div class="modal-body">
                <p>Tem a certeza que quer eliminar esse utilizador?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>
                <?=$this->Html->link(__('Eliminar'),'/admin/users/delete/'.$user['id'],['class' => 'btn btn-danger btn-lg'])?>
              </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.example-modal -->

<!-- Modal Editar-->
<div class="example-modal">
    <div class="modal modal-primary" id="modal2" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Utilizador</h4>
              </div>
              <div class="modal-body">
                <?php
		        	echo $this->Form->create($user,['id'=>'formulario']);
		        	echo $this->Form->input('username', ['type' => 'text','class'=>'form-control']);
		        	echo $this->Form->input('email', ['type' => 'email','class'=>'form-control']);
		        	echo $this->Form->input('status', ['type' => 'text','class'=>'form-control']);
		        	echo $this->Form->input('user_type', ['type' => 'text','class'=>'form-control','id'=>'user_type']);
              echo "</div>";
              echo "<div class='modal-footer'>";
              echo '<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>';
              echo $this->form->button(__('Editar'),['class'=>'btn btn-primary btn-lg']);
              echo $this->Form->end();
              echo "</div>";
              ?>
              </div>
            
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.example-modal -->

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

    $('button').on('click',function(){
        var id = $(this).attr('id').replace('editar-', '');
        $.ajax({
            url: "getuser.json",
            dataType: 'json',
            type: 'post',
            data: {id:id},
            error: function() {
              console.log('erro')
            },
            success: function(data) {
              var row = $.parseJSON(data['user']);
              console.log(row);
              document.getElementById("username").setAttribute("value",row[0]['username']);
              document.getElementById("email").setAttribute("value",row[0]['email']);
              document.getElementById("status").setAttribute("value",row[0]['status']);
              document.getElementById("user_type").setAttribute("value",row[0]['user_type']);
              //var update = document.getElementById("update");
              //update.href = 'categories/edit/' + row[0]['id'];
              var updateform = document.getElementById("formulario");
              updateform.action = 'edit/' + row[0]['id'];
              
            }
        });
    });

    $('.blockbutton').on('click','.ativar',function(){
      myString = $(this).attr("id");console.log(myString);
      myString = myString.replace("ativar-",'');
      
        $.ajax({
          url: "ativar/"+myString,
          /*data: {
                  id:myString
                },*/
          success: function()
          {
            $('.button-' + myString).html('<button type="button" class="btn btn-danger btn-sm bloquear" id="bloquear-'+myString+'" >Bloquear</button>');
            $('.status-' + myString).html('Ativado');
          }
        });
    });

    $('.blockbutton').on('click','.bloquear',function(){
      myString = $(this).attr("id");
      myString = myString.replace("bloquear-",'');
      console.log(myString);
        $.ajax({
          url: "bloquear/"+myString,
          /*data: {
                  id:myString
                },*/
          success: function()
          {
            $('.button-' + myString).html('<button type="button" class="btn btn-success btn-sm ativar" id="ativar-'+myString+'">Ativar</button>');
            $('.status-' + myString).html('Bloqueado');
          }
        });
    });


</script>
</body>
</html>