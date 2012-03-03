<?php
	echo $this->element('find_coupons');
?>

<div class="content">
	<div id="contentx">
		<h1>My Account</h1>
		<div id="sidebar">
			<ul>
				<li class="create_store_acct"><a href="#">Create Store Account</a></li>
				<li class="new_campaign"><a href="#">New Campaign</a></li>
				<li class="dashboard"><a href="#">Dashboard</small></a></li>
				<li class="categories"><a href="#">View Categories</small></a></li>
				<li class="coupons"><a href="#">View Coupons</small></a></li>
				<li class="stores"><a href="#">View Stores</small></a></li>
				<li class="subscribers"><a href="#">List of subscribers</small></a></li>
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

				echo $this->Form->submit('Edit', array('class' => 'submitx'));
				echo $this->Form->end();?>
		</div>
	</div>
</div>
