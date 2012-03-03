<?php
	echo $this->element('find_coupons');
?>

<div class="content">
	<?php 
	$first = true;
	foreach ($featuredPromos as $promo){ 
		if ($first){
	?>
			<div id="featured" couponId="<?php echo $promo['CouponType']['id']; ?>" class="slider" style="background: url('<?php echo $this->webroot; ?>files/uploads/<?php echo $promo['CouponType']['image']; ?>') right no-repeat;">
				<div class="slidercontent">
				            <h1>Today's featured promo:</h1>
							<h2>
								<?php echo $promo['CouponType']['name']; ?>
							</h2>
							<p style="display: block; height: 40px; overflow: auto;">
								<?php echo $promo['CouponType']['description']; ?>
							</p>
							<a id="dealInfoLink" href="campaigns/get_deal_info/<?php echo $promo['Campaign']['id']?>">[deal information]</a>
							<?php echo $this->Html->image('line.jpg', array('alt' => 'logo', 'class' => 'line', 'alt' => 'line'));?>
				            <?php echo $this->Html->image('coupon1.jpg', array('alt' => 'logo', 'alt' => 'line'));?>
				</div>
			</div>
</div>
	<?php 
			$first = false;
	?>
	    <div class="footerbox" style="overflow: auto;">
			
	<?php } ?>
			<div class="footbox">
				<a href="javascript:renderSelectedPromo(<?php echo $promo['CouponType']['id']; ?>);">
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