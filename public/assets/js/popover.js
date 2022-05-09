jQuery(function(e){
	       'use strict';

	       // Initialize popover
		   var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
		   var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
			 return new bootstrap.Popover(popoverTriggerEl)
		   })

		   var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default"]'), {
			template: '<div class="popover" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})
		var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default1"]'), {
			template: '<div class="popover" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})
		   var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default2"]'), {
			template: '<div class="popover" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})
		var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="default3"]'), {
			template: '<div class="popover" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})
		var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="head-primary"]'), {
			template: '<div class="popover popover-head-primary" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})

		var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="head-secondary"]'), {
			template: '<div class="popover popover-head-secondary" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})

		var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="primary"]'), {
			template: '<div class="popover popover-primary" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})
		var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="secondary"]'), {
			template: '<div class="popover popover-secondary" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
		})

	       // By default, Bootstrap doesn't auto close popover after appearing in the page
	       // resulting other popover overlap each other. Doing this will auto dismiss a popover
	       // when clicking anywhere outside of it
	       $(document).on('click', function (e) {
	         $('[data-bs-toggle="popover"],[data-original-title]').each(function () {
	             //the 'is' for buttons that trigger popups
	             //the 'has' for icons within a button that triggers a popup
	             if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
	                 (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
	             }

	         });
	       });
	     });

		