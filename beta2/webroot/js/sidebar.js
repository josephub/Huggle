Sidebar = Backbone.View.extend({
  events: {
    "click li.view_history" : "viewHistory",
    "click li.change_password" : "changePassword",
    "click li.edit_profile" : "editProfile",
    "click li.subscribers" : "getSubscribers",
    "click li.categories" : "getCategories",
    "click li.stores" : "getStores"
  },
  /*
  updateRightx: function(e){
	  var target = $(e.target), li=null;
	    li = target.closest('li');
	    console.log(li.get(0).class);
	    $.ajax({url: li.get(0).class,
		    data: 'GET',
	            dataType: 'text',
	            success: function(msg){
			    $('#rightx').html(msg);
		    }
	    });
  },*/
  getStores: function(e){
       this.destroyDataTable();
       $.ajax({url: '/beta2/stores/get_list',
	    data: 'GET',
            dataType: 'text',
            success: function(msg){
		    $('#formContainer').remove();
		    $('#rightx').html(msg);
		    App.oTable = $('#datatable').dataTable({
		            'bProcessing': true,
		            'bServerSide':true,
		            'sAjaxSource' : '/beta2/stores/generate_list',
		            'aoColumns': [
		            	{'sClass': ''},
		            	{'sClass': 'name'},
		            	{'sClass': 'location'}
		            ]
		    });
	    }
    });
  },
  getCategories: function(e){
       this.destroyDataTable();
       $.ajax({url: '/beta2/categories/get_categories',
	    data: 'GET',
            dataType: 'text',
            success: function(msg){
		    $('#formContainer').remove();
		    $('#rightx').html(msg);
		    App.oTable = $('#datatable').dataTable({
		            'bProcessing': true,
		            'bServerSide':true,
		            'sAjaxSource' : '/beta2/categories/generate_list',
		            'aoColumns': [
		            	{'sClass': ''},
		            	{'sClass': 'category'}
		            ]
		    });
	    }
    });

  },
  getSubscribers: function(e){
       this.destroyDataTable();
       $.ajax({url: 'subscribers',
	    data: 'GET',
            dataType: 'text',
            success: function(msg){
		    $('#formContainer').remove();
		    $('#rightx').html(msg);
		    	App.oTable = $('#datatable').dataTable({
		    	        'bProcessing': true,
		    	        'bServerSide':true,
		    	        'sAjaxSource' : 'generate_list',
		    	        'aoColumns': [
		    	        	{'sClass': 'username'},
		    	        	{'sClass': 'email'}
		    	        ]
		    	});
	    }
    });
  },
  destroyDataTable: function(){
		    	if (App.oTable){
                            App.oTable.hide();
		    	    App.oTable.fnDestroy();
		    	}
		    },
  viewHistory: function(e){
       $.ajax({url: 'view_history',
	    data: 'GET',
            dataType: 'text',
            success: function(msg){
		    $('#rightx').html(msg);
	    }
    });

  },
  changePassword: function(e){
  
    $.ajax({url: 'change_password',
	    data: 'GET',
            dataType: 'text',
            success: function(msg){
		    $('#rightx').html(msg);
	    }
    });
  },
  editProfile: function(e){
  
    $.ajax({url: 'edit_profile',
	    data: 'GET',
            dataType: 'text',
            success: function(msg){
		    $('#rightx').html(msg);
	    }
    });
  },
  createDeal: function(e){
	  
	    $.ajax({url: 'create_deal',
		    data: 'GET',
	            dataType: 'text',
	            success: function(msg){
			    $('#rightx').html(msg);
		    }
	    });
	  },
  initialize: function(){
    _.bindAll(this);
  }
});
