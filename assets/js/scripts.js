function dragElement(elmnt) {

	if ( $( elmnt ).find( '.spell' ).length > 0 ) {
		$( elmnt ).find( '.spell' )[0].onmousedown = dragMouseDown;
	}
}


// DRAG.
$(document).ready(function () {

	var getHighestZ = function() {

		var spellWrappers = $( '.spell-wrapper' ),
			highest = 1;

		$.each( spellWrappers, function ( i, spellWrapper ) { 
			 if ( $( spellWrapper ).css( 'z-index' ) > 1 ) {
				 highest = $( spellWrapper ).css( 'z-index' );
			 }
		});

		return parseInt( highest );
	}
	
	$( '.spell-wrapper .spell' ).on( 'mousedown', function( e ) {

		var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;

		var elmnt = $( this ).parents( '.spell-wrapper' );

		if ( typeof( elmnt.length ) === 'number' && elmnt.length > 0 ) {

			var zIndex = $( elmnt ).css( 'z-index' ),
				zHighest = getHighestZ();

			elmnt = elmnt[0];

			elmnt.onmousedown = dragMouseDown;

			$( elmnt ).css( 'z-index', ( zHighest += 1 ) );
		}

		function dragMouseDown(e) {
			e = e || window.event;
			e.preventDefault();
			// get the mouse cursor position at startup:
			pos3 = e.clientX;
			pos4 = e.clientY;
			document.onmouseup = closeDragElement;
			// call a function whenever the cursor moves:
			document.onmousemove = elementDrag;
		}

		function elementDrag(e) {
			e = e || window.event;
			e.preventDefault();
			// calculate the new cursor position:
			pos1 = pos3 - e.clientX;
			pos2 = pos4 - e.clientY;
			pos3 = e.clientX;
			pos4 = e.clientY;
			// set the element's new position:
			elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
			elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
		}

		function closeDragElement() {
			// stop moving when mouse button is released:
			document.onmouseup = null;
			document.onmousemove = null;
		}
	} );
});



// TOOLTIP.
$(document).ready(function () {

	$.fx.off = true;

	$('[data-toggle="tooltip"]').on( 'contextmenu', function( e ) {
		e.preventDefault();
	} );

	var tooltips = $('[data-toggle="tooltip"]').tooltip({
		placement : 'auto',
		trigger : 'hover'
	});

	$( '.wrapper-spell-group' ).sortable({
		revert: true,
	});

	$( '.spell-group-list' ).sortable({
		revert: true,
	});
	
	$( '.spell-group' ).draggable( { 
		handle: 'h2',
		revert: 'invalid',
		stack: '.wrapper-spell-group',
		connectToSortable: '.wrapper-spell-group',
	});
	
	$( '.wrapper-spell-group' ).droppable( {
		tolerance: 'pointer',
		accept: '.spell-group',
		drop: function ( event, ui ) {
			$( this ).append( ui.draggable.css( { position: 'relative', top:'', left:'', height: 'inherit' } ) );
		},
	} );
	
	$( '.spell-group-list li' ).draggable( { 
		revert: 'invalid',
		connectToSortable: '.spell-group-list',
	});
	
	$( '.spell-group-list' ).droppable( { 
		accept: '.spell-group-list li',
		drop: function ( event, ui ) {
			console.log(event)
			console.log(ui)
			$( this ).append( ui.draggable.css( { position: 'relative', top:'', left:'' } ) );
		},
	} );
});
