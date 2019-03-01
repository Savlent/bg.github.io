(function($){

	"use strict";

	window.ff_shortcodes_config = {
		'ajaxLoadModalAction' : 'ff_shortcodes_load_modal',
		'ajaxLoadModalPromoAction' : 'ff_shortcodes_load_modal_promo',
		'ajaxLoadShortocdeAction' : 'ff_shortcodes_load_shortcode',
		'addShortcodesBtnId' : '#ff-shortcodes-button',
		'modalForm' : '#ff-shortcode-params-form',
		'modalContainerId' : '#ff-shortcodes-modal-container',
		'modalWindowId' : '#ff-shortcodes-modal-window',
		'modalWindowRolled' : '#ff-shortcodes-modal-window.rolled-up',
		'modalHeaderId' : '#ff-shortcodes-modal-head',
		'modalContentId' : '#ff-shortcodes-modal-content',
		'modalOverlay' : '.ff-shortcodes-overlay' 
	}

	$(document).ready(function(){
		window.ff_shortcodes_modal_window.init();
	});

})( window.jQuery );
