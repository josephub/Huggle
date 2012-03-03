<?php
	echo $this->element('find_coupons');
?>

<div class="innerpage">

	<h2>RECENT ALL DEALS</h2>
	<div class="thumb">        	
	    
<?php 
	$cnt = 0;
	foreach ($results as $coupon){ 
		$cnt++;
		
		if ($cnt == 0){
			echo '<p/>';
		}
?>	            
        <img src="<?php echo $this->webroot; ?>files/uploads/<?php echo $coupon['CouponType']['image']; ?>" alt="img">        
<?php }?>
	</div>     
</div>
<?php
	echo $this->element('view_more');
?>