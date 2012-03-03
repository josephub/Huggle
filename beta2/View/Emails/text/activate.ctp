Welcome <?php echo $user['username']; ?>,

In order to get started please click on the following link to activate your account:

<?php echo Router::url(array('action' => 'activate', 'activation_code' => $user['activation_code']), true)."\n"; ?>

We look forward to seeing you!
Regards,
MyDomain.com Staff
