<div id="wrapper">
    <div class="topmenu2">
    	<span>Find Coupons</span>
        <?php
        	echo $this->Form->create(array('method' => 'get', 'url' => '/campaigns/search/'));
        	
        	//echo $this->Form->input('search', array('class' => 'button', 'value' => 'search'));
        	//echo $this->Form->input(array('type' => 'text', 'class' => 'inputtxt'));
        ?>
        	<input id="searchString" name="searchString" type="text" class="inputtxt" />
        	<input type="submit" class="btn" value="search" />
        <?php	
        	echo $this->Form->end();
        ?>
    </div>
</div>
