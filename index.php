<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repeated Tasks</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

	<div class="tab-content mt-3 d-none">

		<div class="tab-pane fade show active" id="daily">

			<?php
				$db = new SQLite3( 'data.db' );
				$result = $db->query( 'SELECT * FROM tasks WHERE type="Daily" AND done=0' );

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

				echo '<h3 class="pt-4">Done</h3><hr>';

				$result = $db->query( 'SELECT * FROM tasks WHERE type="Daily" AND done=1' );

				while( $res = $result->fetchArray( SQLITE3_ASSOC ) )
				{
			?>
					<div class="card mb-3" onmouseenter="showButtons( this )" onmouseleave="hideButtons( this )">
						<div class="card-body row">

							<h3 class="card-title col"><?= $res[ 'task' ] ?></h3>

							<div class="button-group col-2 mt-2 d-none">
								<button class="btn btn-success btn-sm" onclick="resetTask( this )">Reset</button>
								<button class="btn btn-danger btn-sm" onclick="delTask( this )">Delete</button>
							</div><!-- .button-group -->

						</div><!-- .card-body -->
					</div><!-- .card -->
			<?php
				} // while
			?>

		</div><!-- .tab-pane #daily -->

		<div class="tab-pane fade" id="weekly">

			<?php
				$result = $db->query( 'SELECT * FROM tasks WHERE type="Weekly" AND done=0' );

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

				echo '<h3 class="pt-4">Done</h3><hr>';

				$result = $db->query( 'SELECT * FROM tasks WHERE type="Weekly" AND done=1' );

				while( $res = $result->fetchArray( SQLITE3_ASSOC ) )
				{
			?>
					<div class="card mb-3" onmouseenter="showButtons( this )" onmouseleave="hideButtons( this )">
						<div class="card-body row">

							<h3 class="card-title col"><?= $res[ 'task' ] ?></h3>

							<div class="button-group col-2 mt-2 d-none">
								<button class="btn btn-success btn-sm" onclick="resetTask( this )">Reset</button>
								<button class="btn btn-danger btn-sm" onclick="delTask( this )">Delete</button>
							</div><!-- .button-group -->

						</div><!-- .card-body -->
					</div><!-- .card -->
			<?php
				} // while
			?>

		</div><!-- .tab-pane #weekly -->

		<div class="tab-pane fade" id="monthly">

			<?php
				$result = $db->query( 'SELECT * FROM tasks WHERE type="Monthly" AND done=0' );

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

				echo '<h3 class="pt-4">Done</h3><hr>';

				$result = $db->query( 'SELECT * FROM tasks WHERE type="Monthly" AND done=1' );

				while( $res = $result->fetchArray( SQLITE3_ASSOC ) )
				{
			?>
					<div class="card mb-3" onmouseenter="showButtons( this )" onmouseleave="hideButtons( this )">
						<div class="card-body row">

							<h3 class="card-title col"><?= $res[ 'task' ] ?></h3>

							<div class="button-group col-2 mt-2 d-none">
								<button class="btn btn-success btn-sm" onclick="resetTask( this )">Reset</button>
								<button class="btn btn-danger btn-sm" onclick="delTask( this )">Delete</button>
							</div><!-- .button-group -->

						</div><!-- .card-body -->
					</div><!-- .card -->
			<?php
				} // while
			?>

		</div><!-- .tab-pane #monthly -->

		<div class="tab-pane fade" id="yearly">

			<?php
				$result = $db->query( 'SELECT * FROM tasks WHERE type="Yearly" AND done=0' );

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

				echo '<h3 class="pt-4">Done</h3><hr>';

				$result = $db->query( 'SELECT * FROM tasks WHERE type="Yearly" AND done=1' );

				while( $res = $result->fetchArray( SQLITE3_ASSOC ) )
				{
			?>
					<div class="card mb-3" onmouseenter="showButtons( this )" onmouseleave="hideButtons( this )">
						<div class="card-body row">

							<h3 class="card-title col"><?= $res[ 'task' ] ?></h3>

							<div class="button-group col-2 mt-2 d-none">
								<button class="btn btn-success btn-sm" onclick="resetTask( this )">Reset</button>
								<button class="btn btn-danger btn-sm" onclick="delTask( this )">Delete</button>
							</div><!-- .button-group -->

						</div><!-- .card-body -->
					</div><!-- .card -->
			<?php
				} // while
			?>

		</div><!-- .tab-pane #yearly -->

	</div><!-- .tab-content -->

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="src/script.js"></script>
</body>
</html>
