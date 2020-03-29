<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-10 col-md-offset-2">
				<h1 class="text-center">Formulaire de Contact</h1>
				<form method="POST" action="">
					<div class="form-group">
						<label for="name" class="control-label sr-only">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter your name here..." class="form-control">
					</div>
					
					<div class="form-group">
						<label for="email" class="control-label sr-only">Email</label>
						<input type="email" name="email" id="email" placeholder="exemple@gmail.com" class="form-control">
					</div>
					
					<div class="form-group">
						<textarea cols="10" rows="10" class="form-control">Message</textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success form-control">Envoyer &raquo;</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>