<?php
	echo $this->element('find_coupons');
?>

<div class="innerpage">
	<h2>VIEW DEAL COMPLETE INFORMATION</h2>
	<div class="featuredbox">
    	<div class="bigimg" style="background: url('<?php echo $this->webroot; ?>files/uploads/<?php echo $deal['CouponType']['image']; ?>') right no-repeat;"></div>
        <div class="smallimg">&nbsp;</div>
        <div class="smallimg">&nbsp;</div>
        <div class="smallimg">&nbsp;</div>
        <div class="smallimg">&nbsp;</div>
        <div class="clr"></div>
    </div>
    <div class="featuredtext">
    	<h1>COUPON OFFER NAME HERE</h1>
        <h2 class="rating">Promo Rating: <?php echo $this->Html->image('star.jpg', array('alt' => 'star', 'class' => 'star'));?>
        </h2>
        <p>Coupon Description Here Text. At vero eos et accusamus et 
            iusto odio dignissimos ducimus qui blanditiis praesentium 
            voluptatum deleniti atque corrupti quos dolores et quas molestias 
            excepturi sint occaecati cupiditate non provident, similique sunt 
            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. 
            Et harum quidem rerum facilis est et expedita distinctio.</p>
      	<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
        <h3>Huggle now and avail a discount of 20%-50%</h3>
        <?php echo $this->Html->image('coupon1.jpg', array('width'=> '250px', 'alt'=>'coupon1')); ?>
    </div>
    <div class="clr"></div>
</div>
<div class="footerbox" style="overflow: auto;">
<?php 
	foreach ($featuredPromos as $promo){ 
?>
	    
		<div class="footbox">
			<a href="<?php echo Router::url('/campaigns/get_deal_info/'.$promo['Campaign']['id'], true); ?>">
				<p><span><?php echo $promo['CouponType']['name']; ?></span><strong>AVAIL THIS OFFER</strong></p>
				<img src="<?php echo $this->webroot; ?>files/uploads/<?php echo $promo['CouponType']['image']; ?>" title ="<?php echo $promo['Campaign']['coupon_type_id']; ?>" alt="<?php echo $promo['Campaign']['coupon_type_id']; ?>" alt="" />
			</a>
		</div>
<?php }	?>
</div>
		
<?php
	echo $this->element('view_more');
?>
		
<script language="javascript">
	var oPromos = <?php print json_encode($featuredPromos); ?>;
</script>
<script language="javascript" src="js/get_featured.js" type="text/javascript"></script>