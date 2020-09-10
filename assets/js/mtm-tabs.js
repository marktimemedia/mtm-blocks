(function($) {

	$(document).ready(function(){

		// make sure all content shows by default if JS not enabled
		$('.mtm-tabs--title[data-tab!="tab-1"]').removeClass('current');
		$('div.mtm-tabs--content:not(#tab-1)').removeClass('current');
		$('.mtm-tabs--title[data-tab!="tab-1"]').attr('aria-selected', "false");

		$('.mtm-tabs--title').click(function(){
			var tab_id = $(this).attr('data-tab');
			var $tab_group = $(this).parent().parent();

			$tab_group.children().children('.mtm-tabs--title').removeClass('current');
			$tab_group.children().children('.mtm-tabs--title').attr('aria-selected', "false");
			$tab_group.children().children('.mtm-tabs--content').removeClass('current');

			$tab_group.children().children('.mtm-tabs--title[data-tab="'+tab_id+'"]').addClass('current');
			$tab_group.children().children('.mtm-tabs--title[data-tab="'+tab_id+'"]').attr('aria-selected', "true");
			$tab_group.children().children("#"+tab_id).addClass('current');
		});

	});

})( jQuery );
