<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Classificados | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <?=$this->Html->css('backend/bootstrap.min.css')?>
  <!-- Font Awesome -->
    <?=$this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')?>
  <!-- Ionicons -->
 <?=$this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')?>
  <!-- Theme style -->
  <?=$this->Html->css('backend/AdminLTE.min.css')?>
  <!-- iCheck -->
  <?=$this->Html->css('backend/plugins/iCheck/square/blue.css')?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>Admin</b>Classificados</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log in to start your session</p>
      <div class="form-group has-feedback">
    
<?php 
echo $this->Flash->render('Auth');
echo $this->Form->create();
echo $this->Form->input('username', [
  'templates' => [
    'inputContainer' => '{{content}}'
  ],
  "type" => "email",
  "class" => "form-control",
  "placeholder" => "Email",
  "autocomplete" => "on",
  "label" => "Email"
]);
 
echo '<span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>'; ?>

 <div class="form-group has-feedback">
 <?php

echo $this->Form->input('password', [
  'templates' => [
    'inputContainer' => '{{content}}'
  ],
  "type" => "password",
  "class" => "form-control",
  "placeholder" => "Password",
  "autocomplete" => "on"
]);
echo '<span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>'; ?>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-4">
      <?php echo $this->Form->button('Log in',['type' => 'submit','class' => 'btn btn-primary btn-block btn-flat']); 
        echo $this->form->end(); ?>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="#">I forgot my password</a><br>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<?=$this->Html->script('backend/plugins/jQuery/jquery-2.2.3.min.js')?>
<!-- Bootstrap 3.3.6 -->
<?=$this->Html->script('backend/bootstrap.min.js')?>
<!-- iCheck -->

<?=$this->Html->script('backend/plugins/iCheck/icheck.min.js')?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

