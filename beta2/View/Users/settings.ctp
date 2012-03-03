<?php
	echo $this->element('find_coupons');
?>

<div class="content">
	<div id="contentx">
		<h1>My Account</h1>
		<div id="sidebar">
			<ul>
				<li class="edit_profile"><a href="#">Edit Profile</a></li>
				<li class="view_history"><a href="#">My Coupons</a></li>
				<li class="change_password"><a href="#">Change Password</a></li>
				<li class="create_deal"><a href="#">Create Deal</a></li>
				<li class="subscribers"><a href="#">List of Subscribers</a></li>
			</ul>
		</div>
		<div id="rightx">
			<h2>Browsing <span>&raquo;</span> <cite>Profile</cite></h2>
			<?php
				echo $this->Form->create('User', array('action' => '/edit_profile'));
				
				echo $this->Form->input('last_name');
		        echo $this->Form->input('first_name');
		        echo $this->Form->input('middle_initial');
		        echo $this->Form->input('email');
		        echo $this->Form->input('address');
		        echo $this->Form->input('cell_no');
		        echo $this->Form->input('username');
		        //echo $this->Form->input('password');

				echo $this->Form->submit('Edit', array('class' => 'submitx'));
				echo $this->Form->end();?>
		</div>
	</div>
</div>