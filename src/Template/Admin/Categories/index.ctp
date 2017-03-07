<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Categorias</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Name</th>
            <th>Icon</th>
            <th>Actions</th>
          </tr>
              <?php
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
                      echo '<td>'.$this->Html->link('Edit','/admin/categories/edit/'.$value['id'],['class' => 'button']).'&nbsp;'.
                                $this->Html->link('Delete','/admin/categories/delete/'.$value['id'],['class' => 'button']).'</td>
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
