(function ( $ ) {

	$.rustaMsgBox = function(options) {

		// set default options
        var settings = $.extend({
			closeButton: false,
            fadeOut: true,
            fadeTimer: 1500,            
            content: 'Add some content here...',
            zindex: 3022,
            width: '70%',
            maxWidth: '300px',
            mode: 'info', /* warning, success, error, info */
            bottom: '-90px',
            stack: true,
            opacity: 0.9
        }, options );

        // if fadeOut is false then we need to show the closeButton
        if (!settings.fadeOut){
        	settings.closeButton = true;
        }

        // styles for the delivered modes
        if ( settings.mode == 'warning' )
        {
			settings.backgroundColor = '#fcf8e3';
			settings.border = '1px solid #fbeed5';
			settings.color = '#c09853';
        } 
        else if ( settings.mode == 'success' )
        {
			settings.backgroundColor = '#dff0d8';
			settings.border = '1px solid #d6e9c6';
			settings.color = '#468847';
        } 
        else if ( settings.mode == 'error' )
        {
			settings.backgroundColor = '#f2dede';
			settings.border = '1px solid #eed3d7';
			settings.color = '#b94a48';
        } 
        else if ( settings.mode == 'info' )
        {
			settings.backgroundColor = '#d9edf7';
			settings.border = '1px solid #bce8f1';
			settings.color = '#3a87ad';
        } 

		// create a unique ID for this message box
		var randomNumber = (((1+Math.random())*0x10000)|0).toString(16).substring(1);
		var currentDateTime = new Date();
		currentDateTime = String(currentDateTime.getDate()) + String(currentDateTime.getMonth() +1) + String(currentDateTime.getFullYear()) + String(currentDateTime.getHours()) + String(currentDateTime.getMinutes()) + String(currentDateTime.getSeconds()) + String(currentDateTime.getMilliseconds());
		var msgBoxId = 'rusta-msgBox' + '_' + randomNumber + '_' + currentDateTime; 

		$('<div/>', {
		    id: msgBoxId,
		    css: {
				'margin': '0px',
				'z-index': settings.zindex, 
				'position': 'fixed', 
				'bottom': settings.bottom, 
				'width': '100%', 
				'left': '0px',
				'opacity': settings.opacity
		    }
		}).appendTo('body');

		if (settings.customClass)
		{
			$('<div/>', {
				html: settings.content,
				addClass: 'rusta-msgBox ' + settings.customClass
			}).appendTo('#'+msgBoxId);	
		}
		else
		{
			var padding, textAlign;
			if (settings.closeButton)
			{
				padding = '8px 35px 8px 14px';
				textAlign = 'left';
			} else {
				padding = '8px 14px 8px 14px';
				textAlign = 'center';
			}

			$('<div/>', {
				html: settings.content,
				addClass: 'rusta-msgBox',
			    css: {
					'padding': padding,
					'text-align': textAlign,
					'text-shadow': '0 1px 0 rgba(255, 255, 255, 0.5)',
					'-webkit-border-radius': '4px',
					'-moz-border-radius': '4px',
					'border-radius': '4px',
					'-moz-box-shadow': '10px 10px 5px rgba(0,0,0,0.4)',
					'-webkit-box-shadow': '10px 10px 5px rgba(0,0,0,0.4)',
					'box-shadow': '10px 10px 5px rgba(0,0,0,0.4)',
					'background-color': settings.backgroundColor,
					'color': settings.color,
					'border': settings.border,
					'position': 'relative',
					'width': settings.width,
					'max-width': settings.maxWidth,
					'margin': '0 auto'
			    }
			}).appendTo('#'+msgBoxId);			
		}

		if (settings.closeButton)
		{
			// add close button
			$('<button/>', {
				html: 'x',
				addClass: 'rusta-msgBox-close',
			    css: {
					'position': 'absolute',
					'right': '8px',
					'top': '2px',
					'line-height': '20px',
					'padding': '0',
					'cursor': 'pointer',
					'background': 'transparent',
					'border': '0',
					'-webkit-appearance': 'none',
					'float': 'right',
					'font-size': '16px',
					'font-weight': 'bold',
					'line-height': '20px',
					'color': '#000000',
					'text-shadow': '0 1px 0 #ffffff',
					'opacity': '0.2',
					'filter': 'alpha(opacity=20)'
			    },
			    data: { 'rusta-msg-box': msgBoxId  }
			}).appendTo('#'+msgBoxId + ' .rusta-msgBox');

			// add close button click functionality
			$('#' + msgBoxId + ' .rusta-msgBox-close').on('click', function(){
				var thisMsgBoxId = $(this).data('rusta-msg-box');
				$('#' + thisMsgBoxId).fadeOut(400, function(){
					$('#' + thisMsgBoxId).remove();
				});
			});
		} // end close button block

		// animate message box on to screen
	    $('#' + msgBoxId).animate({
	    	"bottom": 20  + (parseInt(settings.stack?1:0) * parseInt($(".rusta-msgBox").length - 1))*50
	    }, 600);
		
		// fade out after set amount of time
	    if (settings.fadeOut)
	    {
			setTimeout(function(){
				$('#' + msgBoxId).fadeOut(400, function(){
					$('#' + msgBoxId).remove();
				});			
			}, settings.fadeTimer)	    	
	    }
	}

}( jQuery ));