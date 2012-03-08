	

        function renderSelectedPromo(id){
		var arrDivFeatured = $('#featured');
		
		// check if selected promo is not in featured div
		if (id != $(arrDivFeatured[0]).attr('couponId')){
			
			var divFeatured = $(arrDivFeatured[0]);
			divFeatured.find('h2').fadeOut();
			divFeatured.find('p').fadeOut();
		
			var oSelectedPromo = getSelectedPromo(id);
			
			if (oSelectedPromo != null){
				divFeatured.attr('couponId',$(oSelectedPromo.CouponType).attr('id'));
				divFeatured.find('h2').html($(oSelectedPromo.CouponType).attr('name'));
				divFeatured.find('p').html($(oSelectedPromo.CouponType).attr('description'));	
				divFeatured.find('h2').fadeIn();
				divFeatured.find('p').fadeIn();
				divFeatured.css("background-image", "url('files/uploads/" + $(oSelectedPromo.CouponType).attr('image') + "')");
				$('#dealInfoLink').attr('href','campaigns/get_deal_info/'+$(oSelectedPromo.Campaign).attr('id'));
			}
		}
	}

	function getSelectedPromo(id){

		for (var i=0; i<oPromos.length; i++){
			if ($(oPromos[i].CouponType).attr('coupon_info_id') == id){
				return oPromos[i];
			}
		}
		
		return null;
	}

window.pic_ids = [1,2,3,4];
window.current_pic_index = 1;
function cycle(){

var index = window.current_pic_index % 4;
window.current_pic_index = index + 1;  
renderSelectedPromo(window.pic_ids[index]);
setTimeout("cycle();", 5000);
};
setTimeout("cycle();", 5000);
