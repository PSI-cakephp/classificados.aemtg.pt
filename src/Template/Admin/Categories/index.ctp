<section class="content-header">
      <h1>
        Categorias
      </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <!--<h3 class="box-title">Categorias</h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div> -->
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Name</th>
              <th>Icon</th>
              <th>Actions</th>
            </tr>
                <?php
                //die(debug($category));
                    foreach ($list as $value) {

                        echo '<tr>';
                        if($value['parent_id'] == ''){
                            echo '
                                    <td><b>'.$value['name'].'</td>
                                    <td>'.$this->Html->image($value['icon'],['alt' => 'imagem','height' => 50]).'</td>
                                </b>';
                        }
                        else{
                            echo
                                '<td>&nbsp;&nbsp;'.$value['name'].'</td>
                                <td></td>';
                        }
                        echo '<td><button type="button" class="btn btn-primary btn-sm botao" data-toggle="modal"  id="category-'.$value['id'].'">Editar</button>&nbsp;
                              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal" id="category-'.$value['id'].'">Eliminar</button></td>
                        </tr>';
                    }
                ?>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

<div class="example-modals">
    <div class="modal modal-primary" id="modal2" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Categoria</h4>
              </div>
              <div class="modal-body">
                <?php
                //die(debug($user));
                    //,'/admin/categories/edit/'
		        	echo $this->Form->create('categories',['id'=>'formulario']);
                    echo $this->Form->hidden('id', ['value'=>'','id'=>'id']);
                    echo $this->Form->input('name', ['type' => 'text','class'=>'form-control','id'=>'nome']);
                    //echo $this->Form->input('icon', ['type' => 'file','class'=>'form-control']);
                    //echo $this->Form->input('parent_id', ['options' => $categorylist,'class'=>'form-control']);
                    echo $this->Form->checkbox('selectable',['id' =>'selecionar']).'&nbsp;Selectable';
                    echo '</div><div class="modal-footer">
                       <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>
                       '.$this->Form->button(__('Editar'),['class' => 'btn btn-primary btn-lg','id'=>'update']).'
                     </div>';
		        	echo $this->Form->end();
	        	?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<?=$this->element('loading')?> <!-- mostra o loading -->

<!-- jQuery 2.2.3 -->
<?=$this->Html->script('backend/plugins/jQuery/jquery-2.2.3.min.js')?>

<script>
$body = $("body");


    $(function () {
        $(document).on({
            ajaxStart: function() { $body.addClass("loading");},
            ajaxStop: function() { $body.removeClass("loading");$('.botao').attr('data-target','#modal2');  $('#modal2').modal('show'); $('.botao').removeAttr('data-target') }
        });
        $('button').click(function(){
            var id = $(this).attr('id').replace('category-', '');
            $.ajax({
                url: "categories/getuser.json",
                dataType: 'json',
                type: 'post',
                data: {id:id},
                error: function() {
                   console.log('erro')
                },
                success: function(data) {
                    var row = $.parseJSON(data['categoria']);
                    document.getElementById("nome").setAttribute("value",row[0]['name']);
                    document.getElementById("id").setAttribute("value",row[0]['id']);
                    document.getElementById("selecionar").checked = row[0]['selectable'];
                    //var update = document.getElementById("update");
                    //update.href = 'categories/edit/' + row[0]['id'];
                    var updateform = document.getElementById("formulario");
                    updateform.action = 'categories/edit/' + row[0]['id'];


                    //console.log(row[0]['name']);
                }
            })
        })
    });
</script>
