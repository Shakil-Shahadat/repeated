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
	document.querySelector( '.newTask' ).focus();
}

function addTask()
{
	let taskDetails = 'task=' + encodeURIComponent( document.querySelector( '.newTask' ).value );
	taskDetails += '&type=' + encodeURIComponent( document.querySelector( '.taskType' ).value );

	fetch( 'add.php',
	{
		method: 'POST',
		headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
		body: taskDetails
	})
	.then( response => response.text() )
	.then( data => location.reload() )
	.catch( error => console.error( 'Error:', error ) );
}
