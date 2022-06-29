<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Repeated Tasks</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main class="container col-6 mt-3">

	<nav class="nav nav-tabs nav-justified">
		<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#daily">Daily</button>
		<button class="nav-link" data-bs-toggle="tab" data-bs-target="#weekly">Weekly</button>
		<button class="nav-link" data-bs-toggle="tab" data-bs-target="#monthly">Monthly</button>
		<button class="nav-link" data-bs-toggle="tab" data-bs-target="#yearly">Yearly</button>
	</nav>

	<div class="tab-content mt-3">

		<div class="tab-pane fade show active" id="daily">
		</div><!-- .tab-pane -->

		<div class="tab-pane fade" id="weekly">
		</div><!-- .tab-pane -->
		<div class="tab-pane fade" id="monthly">
		</div><!-- .tab-pane -->
		<div class="tab-pane fade" id="yearly">
		</div><!-- .tab-pane -->
	</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="src/script.js"></script>
</body>
</html>
