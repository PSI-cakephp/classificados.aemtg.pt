<h1> Register <h1>

<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend>Add User</legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->input('confirm_password', ['type' => 'password']) ?>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('first_name') ?>
        <?= $this->Form->input('last_name') ?>
        <?= $this->Form->input('mobile_number') ?>
        <?= $this->Form->button('Reset', ['type' => 'reset']); ?>
		<?= $this->Form->button('Submit', ['class' => 'submit']); ?>
   </fieldset>

<?= $this->Form->end() ?>
</div>