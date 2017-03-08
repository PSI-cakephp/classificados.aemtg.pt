  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
   <!--       <img src="img/backend/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
      <?=$this->Html->image('backend/user2-160x160.jpg', ['class' => "img-circle"])?> 
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="treeview">
          <a href="admin/adds/index">
            <i class="fa fa-files-o"></i>
            <span>Anúncios</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-refresh')).'Troca', array('controller' => 'adds', 'action' => '/troca'), array('escape' => false)) ?>
            <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-euro')).'Venda', array('controller' => 'adds', 'action' => '/venda'), array('escape' => false)) ?>
            <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-search')).'Procura', array('controller' => 'adds', 'action' => '/procura'), array('escape' => false)) ?>
      
          </ul>
        </li>
        <li>
         <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-th')).'Categorias', array('controller' => 'category', 'action' => '/index'), array('escape' => false)) ?>
            <span class="pull-right-container">
             
            </span>
        
        </li>
        <li class="treeview">
       <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-users')).'Utilizadores', array('controller' => 'users', 'action' => '/listall'), array('escape' => false)) ?>
        </li>

        <li class="treeview">
        <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-thumbs-o-up')).'Anúncios Concluídos', array('controller' => 'completed', 'action' => '/index'), array('escape' => false)) ?>

            <span class="pull-right-container">
             
            </span>
          </a>
        
        <li>
        <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-calendar')).'Calendário', array('controller' => 'calendario', 'action' => '/index'), array('escape' => false)) ?>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
         <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-envelope')).'Mensagens', array('controller' => 'mensagens', 'action' => '/index'), array('escape' => false)) ?>          
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Links</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="https://trello.com/12c"><i class="fa fa-trello"></i>Trello</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-github-alt"></i>Github</a></li>
            <li><a href="http://10.113.146.25/classificados.aemtg.pt/"><i class="fa fa-link"></i>Classificados AEMTG</a></li>
           
          </ul>
        </li>
        <!-- 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>


                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        -->

        <!--
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
