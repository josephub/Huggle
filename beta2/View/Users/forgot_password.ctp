<div class="users form">
<?php echo $this->Form->create('User', array('type'=>'POST', 'action'=>'/forgot_password' ));?>
    <fieldset>
        <legend><?php echo __('Please enter your email.'); ?></legend>
    <?php
        echo $this->Form->input('email');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Reset Password'));?>
</div>

