<h1> Login <h1>

<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend>Por favor introduza seu usuário e senha</legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button('Reset', ['type' => 'reset'] ); ?>
<?= $this->Form->button('Login'); ?>
<?= $this->Form->end() ?>
</div>