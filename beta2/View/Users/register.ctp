<!--<div class="users form">
<?php #echo $this->Form->create('User');?>
    <fieldset>
        <legend><?#php echo __('Please fill...'); ?></legend>
    <?php
        #echo $this->Form->input('username');
        #echo $this->Form->input('password');
        #echo $this->Form->input('mobile number');
        #echo $this->Form->input('password1', array('label' => 'Password', 'type' => 'password'));
        #echo $this->Form->input('password2', array('label' => 'Confirm password', 'type' => 'password'));
    ?>
    </fieldset>
<?php #echo $this->Form->end(__('Register'));?>
</div>
-->

<?php echo $this->element('register', array(), array('plugin' => 'SignMeUp')); ?>
