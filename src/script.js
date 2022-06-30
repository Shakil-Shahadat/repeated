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

function addTask()
{
	let newTask = 'task=' + document.querySelector( '.newTask' ).value;
	newTask += '&type=' + document.querySelector( '.taskType' ).value;

	fetch( 'add.php',
	{
		method: 'POST',
		headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
		body: newTask
	})
	.then( response => response.text() )
	.then( data => console.log( data ) )
	.catch( error => console.error( 'Error:', error ) );
}
