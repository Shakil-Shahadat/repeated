<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Repeated Tasks</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="src/style.css">
</head>
<body>

<main class="container col-6 mt-3">

	<div class="card mb-4 d-none addForm">
		<div class="card-body">

			<div class="input-group">

				<div class="input-group-text">Task</div>
				<input type="text" class="form-control newTask">
				<select class="form-select taskType">
					<option>Daily</option>
					<option>Weekly</option>
					<option>Monthly</option>
					<option>Yearly</option>
				</select>
				<button class="btn btn-primary" onclick="addTask()">Add</button>

			</div><!-- .input-group -->

		</div><!-- .card-body -->
	</div><!-- .card -->

	<button class="btn btn-outline-primary plus-button" onclick="showAddForm()">
		+
	</button>

	<nav class="nav nav-tabs nav-justified">
		<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#daily">Daily</button>
		<button class="nav-link" data-bs-toggle="tab" data-bs-target="#weekly">Weekly</button>
		<button class="nav-link" data-bs-toggle="tab" data-bs-target="#monthly">Monthly</button>
		<button class="nav-link" data-bs-toggle="tab" data-bs-target="#yearly">Yearly</button>
	</nav>

	<div class="tab-content mt-3">

		<div class="tab-pane fade show active" id="daily">

			<?php
				$db = new SQLite3( 'data.db' );
				$result = $db->query( 'SELECT * FROM tasks WHERE type="Daily"' );

				while( $res = $result->fetchArray( SQLITE3_ASSOC ) )
				{
			?>
					<div class="card mb-3" onmouseenter="showButtons( this )" onmouseleave="hideButtons( this )">
						<div class="card-body row">

							<h3 class="card-title col"><?= $res[ 'task' ] ?></h3>

							<div class="button-group col-2 mt-2 d-none">
								<button class="btn btn-success btn-sm" onclick="doneTask( this )">Done</button>
								<button class="btn btn-danger btn-sm" onclick="delTask( this )">Delete</button>
							</div><!-- .button-group -->

						</div><!-- .card-body -->
					</div><!-- .card -->
			<?php
				} // while
			?>

		</div><!-- .tab-pane -->

		<div class="tab-pane fade" id="weekly">
		</div><!-- .tab-pane -->
		<div class="tab-pane fade" id="monthly">
		</div><!-- .tab-pane -->
		<div class="tab-pane fade" id="yearly">
		</div><!-- .tab-pane -->
	</div><!-- .tab-content -->

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="src/script.js"></script>
</body>
</html>
