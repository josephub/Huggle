Rightx = Backbone.View.extend({
       events: {
         "click input.submitx" : "submitRightxForm",
         "click #editLink": "editRow",
         "click #deleteLink" : "deleteItem",
         "click #addLink" : "addRow",
         "click tbody" : "addRowSelectClass"
       },
       addRowSelectClass: function(event){
				  var oTable = App.oTable;

				  $(oTable.fnSettings().aoData).each(function (){
				  	$(this.nTr).removeClass('row_selected');
				  });

				  $(event.target.parentNode).addClass('row_selected');
			  
			  },
       deleteItem: function(e){
			   var oTable, anSelected, r = null, sClass="", sUrl = "";
 	                   oTable = App.oTable;
			   anSelected = this.fnGetSelected( oTable );

			   if (anSelected.length !== 0){
			   	r = confirm('Are you sure you want to delete selected item');
			   	if (r === true){
				        sClass = this.getClass($(e.target));
					console.log(sClass);
					switch(sClass){
					   case 'user': sUrl = 'delete'; break;
					   case 'category': sUrl = '/beta2/categories/delete'; break;
					   case 'store': sUrl = '/beta2/stores/delete'; break;
					}

					console.log(sUrl);
			   	        $.ajax({
			   	     	   url: sUrl,
			   	     	   dataType: 'json',
			   	     	   type: "POST",
			   	     	   data: {id : this.getId($(anSelected).attr('id'))},
			   	     	   success: function(msg){
			   	     		   oTable.fnDraw();
			   	     	   }
			   	        });
			   	}
			   }

		   },
       editRow: function(e){
			var oTable, anSelected, $target = $(e.target), sClass="";
 	                oTable = App.oTable;
			anSelected = this.fnGetSelected( oTable );
			if (anSelected.length !== 0){
				sClass = this.getClass($target);
				this.showUserForm(anSelected, sClass);
			}
                },
       addRow: function(e){
		       var form = $('#formContainer'), f=null,
		           $target = $(e.target), sClass="", sTitle="";
		       sClass = this.getClass($target);
		       console.log(sClass);

		       switch(sClass){
				     case 'user':
		       			form.find('#UserId').attr('value', '0');
					sTitle = 'Add User';
		       		     break;
				     case 'category':
					sTitle = 'Add Category';
		       			form.find('#CategoryId').attr('value', '0');
					 break;
				     case 'store':
					 console.log('switch store');
					sTitle = 'Add Store';
		       			form.find('#StoreId').attr('value', '0');
					 break;
		       }

		       f = form.find('form').ajaxForm({success: function(msg){
		               form.dialog('destroy');
		               App.oTable.fnDraw();
		       	}
		       });
		       f.clearForm();

		       form.dialog({title: sTitle, modal: true, 
						close: function(e, ui){
							$(this).dialog('destroy');
						}
		       });

                },
       showUserForm: function(trElem, sClass){
			     var form = $('#formContainer'), $tr = $(trElem);
			     switch(sClass){
				     case 'user':
			     		form.find('#UserUsername').attr('value', $tr.find('td.username').html());
			     		form.find('#UserEmail').attr('value', $tr.find('td.email').html());
			     		form.find('#UserId').attr('value', this.getId($tr.attr('id')));
			     		form.dialog({title: 'Edit User', modal: true,
						close: function(e, ui){
							$(this).dialog('destroy');
						}
					});
		             		form.find('form').ajaxForm({success: function(msg){
			     		        form.dialog('destroy');
			     		        App.oTable.fnDraw();
			     			}
			     		});
					break;
				     case 'category':
			     		form.find('#CategoryCategory').attr('value', $tr.find('td.category').html());
			     		form.find('#CategoryId').attr('value', this.getId($tr.attr('id')));
			     		form.dialog({title: 'Edit Category', modal: true,
						close: function(e, ui){
							$(this).dialog('destroy');
						}
					});
		             		form.find('form').ajaxForm({success: function(msg){
			     		        form.dialog('destroy');
			     		        App.oTable.fnDraw();
			     			}
			     		});
					break;
				     case 'store':
			     		form.find('#StoreName').attr('value', $tr.find('td.name').html());
			     		form.find('#StoreLocation').attr('value', $tr.find('td.location').html());
			     		form.find('#StoreId').attr('value', this.getId($tr.attr('id')));
			     		form.dialog({title: 'Edit Store', modal: true,
						close: function(e, ui){
							$(this).dialog('destroy');
						}
					});
		             		form.find('form').ajaxForm({success: function(msg){
			     		        form.dialog('destroy');
			     		        App.oTable.fnDraw();
			     			}
			     		});
					break;
			     }
		     },
       getClass: function(elem){
			        var sClass = "";
				if (elem.hasClass('user')){
					sClass = 'user';
				}else if(elem.hasClass('category')){
					sClass = 'category';
				}else if(elem.hasClass('store')){
					sClass = 'store';
				}
				return sClass;
		 },
       getId: function(str){
		      return str.replace(/[^0-9]/g, '');
	      },
       submitRightxForm: function(e){
               var options = { 
             	        target: '#rightx'
             	    };
               $('#rightx form').ajaxForm(options);
       },
       initialize: function(){
			   _.bindAll(this);
			   $('#formContainer').dialog({autoOpen: false});
       },
       fnGetSelected: function(oTableLocal){
			var aReturn = new Array();
			var aTrs = oTableLocal.fnGetNodes();
			
			for ( var i=0 ; i<aTrs.length ; i++ )
			{
				if ( $(aTrs[i]).hasClass('row_selected') )
				{
					aReturn.push( aTrs[i] );
				}
			}
			return aReturn;

		      }
});
