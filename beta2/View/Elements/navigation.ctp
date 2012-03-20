<div id="wrapper">
	<div class="topmenu">
    	<ul id='tabMenu'>
		    <li>
		    	<?php
	                $image = $this->Html->image('logo.jpg', array('alt'=> 'logo', 'class'=>'logo'));
					$link = $this->Html->tag('a', $image, 
						                 array('alt'=>'logo',
								 'class'=>'logo',
								 'href'=>Router::url('/', true)
							 )
						 );
				echo $link;
	            ?>
			</li>
            <li><a href="<?php echo Router::url('/', true); ?>">how to huggle</a></li>   
       <?php if(AuthComponent::user() == null){ ?>
            <li><a href="<?php echo Router::url('/', true); ?>">store</a></li>
            <li><a href="<?php echo Router::url('/', true); ?>">contact us</a></li>            
            <li class="fb"><a href="<?php echo Router::url('/', true); ?>"><?php echo $this->Html->image('fb.jpg', array('alt' => 'fb'))?></a></li>
	    	<li class="signin dropdown">
               <?php echo $this->Html->link('Sign In', '#tab1', array('class'=>'login'));?>

            </li>
            <li class="signup dropdown"><a class="register" href="#tab2" title="Sign Up">sign up</a></li>
       <?php } else {?>
 			<li><a href="<?php echo Router::url('/users/settings', true); ?>" class="login">my account</a></li>
            <li><a href="<?php echo Router::url('/', true); ?>">store</a></li>
            <li><a href="<?php echo Router::url('/', true); ?>">contact us</a></li>            
 			<li><a href="<?php echo Router::url('/users/logout', true); ?>">Logout</a></li>
			<li class="logged">Welcome back, <?php echo AuthComponent::user('username'); ?>!</li>       
		<?php }?>
            <div class="clr"></div>
        </ul>

            <div id="tabContainer">
      <ul id="tabPanes">
        <li id="tab1">
        <div class="formcontainer">
          <?php echo $this->Form->create('User', array('action' => 'login'));?>
              <?php
                  echo $this->Form->input('username', array('class'=> 'text'));
                  echo $this->Form->input('password', array('class'=> 'text'));
              ?>
          <?php echo $this->Form->end(__('Login'));?>
        <a href="<?php echo Router::url('/users/forgot_password', true); ?>" style="text-transform:none;">Forgot Password?</a>
        </div>
        </li>
        <li id="tab2">
        <div class="formcontainer">
          <?php echo $this->Form->create('User', array('action' => 'add'));?>
              <?php
                  echo $this->Form->input('email', array('class'=> 'text'));
                  echo $this->Form->input('username', array('class'=> 'text'));
                  echo $this->Form->input('password', array('class'=> 'text'));
                  echo $this->Form->input('cell_no', array('class'=> 'text'));
              ?>
          <?php echo $this->Form->end(__('Sign Up'));?>
        <a href="<?php echo Router::url('/users/forgot_password', true); ?>" style="text-transform:none;">Forgot Password?</a>
        </div>
        </li>
      </ul>
    </div>
        
	</div>
	

    
<div>
