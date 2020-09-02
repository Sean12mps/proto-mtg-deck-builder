var initializeToolTip = function() {
	jQuery('[data-toggle="tooltip"]').tooltip({
		placement: 'auto',
		trigger: 'hover focus',
	});
};


// Tooltips.
$(document).ready(function () {

	// Prevent all spell elements to have default right click behaviour.
	$('.spell').on('contextmenu', function (e) {
		e.preventDefault();
	});

	// Turn on tooltips.
	initializeToolTip();
});


// Drag and Drop functionalities.
$(document).ready(function () {

	// Turn off all drag and drop animation from jQuery UI.
	$.fx.off = true;


	/* SPELL GROUPS
	 */
	// Makes spell groups sortable.
	$( '.wrapper-spell-group' ).sortable({
		revert: true,
	});
	
	// Makes spells spell group draggable to other column.
	$( '.spell-group' ).draggable( { 
		handle: 'h2',
		revert: 'invalid',
		stack: '.wrapper-spell-group',
		connectToSortable: '.wrapper-spell-group',
	});
	
	// Makes spell groups droppable.
	$( '.wrapper-spell-group' ).droppable( {
		tolerance: 'pointer',
		accept: '.spell-group',
		drop: function ( event, ui ) {
			$( this ).append( ui.draggable.css( { position: 'relative', top:'', left:'', height: 'inherit' } ) );
		},
	} );


	/* SPELLS
	 */
	// Makes spells within spell group sortable.
	$( '.spell-group-list' ).sortable({
		revert: true,
	});
	
	// Makes spells draggable.
	$( '.spell-group-list li' ).draggable( { 
		revert: 'invalid',
		connectToSortable: '.spell-group-list',
		start: function() {
			$( '[data-toggle="tooltip"]' ).tooltip( 'dispose' );
		},
		stop: function() {
			initializeToolTip();
		},
	});
	
	// Makes spells droppable.
	$( '.spell-group-list' ).droppable( { 
		accept: '.spell-group-list li',
		drop: function ( event, ui ) {
			$( this ).append( ui.draggable.css( { position: 'relative', top:'', left:'', height: 'initial' } ) );
		},
	} );


	/* SIDEBAR TRASH
	 */
	$( '#sidebar-trash' ).droppable( { 
		accept: '.spell-group-list li',
		drop: function ( event, ui ) {
			$( ui.draggable ).tooltip( 'dispose' );
			$( ui.draggable ).remove();
		},
	} );
	$( '#sidebar-trash' ).draggable();
});

