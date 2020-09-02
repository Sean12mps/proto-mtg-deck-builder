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

	$( '#spell-group-commander' ).droppable( { 
		accept: '.spell-group-list li',
		drop: function ( event, ui ) {
			var el = ui.draggable.find( '.spell' );

			$( el ).attr( 'size', 'medium' );

			$( this ).empty();
			$( this ).append( el );
			initializeToolTip();
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

	/* SEARCH */
	$( '#spell-search' ).on( 'submit', function( e ) {
		
		e.preventDefault();

		$( '#search-results .spell-group-list' ).empty();

		var searchText = $( '#search-value' ).val();

		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: {
				search_val: searchText,
			},
			dataType: "JSON",
			success: function (response) {
				
				if ( response.cards.length > 0 ) {

					$.each( response.cards, function ( i, card ) { 

						var li = $( '<li>'+ card +'</li>' );

						$( '#search-results .spell-group-list' ).append( li );
					});

					initializeToolTip();
					
					$( '#search-results .spell-group-list li' ).draggable( { 
						revert: 'invalid',
						connectToSortable: '.spell-group-list',
						start: function() {
							$( '[data-toggle="tooltip"]' ).tooltip( 'dispose' );
						},
						stop: function() {
							initializeToolTip();
						},
					});
				}
			},
		});
	} );
});

