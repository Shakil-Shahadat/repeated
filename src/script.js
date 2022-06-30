// Show buttons when mouse enter into a card
function showButtons( catchMe )
{
	catchMe.querySelector( '.button-group' ).classList.remove( 'd-none' );
}

// Hide buttons when mouse leave a card
function hideButtons( catchMe )
{
	catchMe.querySelector( '.button-group' ).classList.add( 'd-none' );
}

// Toggle add form view
function showAddForm()
{
	document.querySelector( '.addForm' ).classList.toggle( 'd-none' );
}
