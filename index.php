<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Travwords</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">
	<script src="javascript.js"></script>
	<?php include "validation.php" ?>

</head>

<body>
	<header>
		<h1>Travel + Password: Travword</h1>
    </header>

    <div class="main-content">

        <form class="form-basic" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="form-title-row">
                <h1>Make Your Own Travword</h1>
            </div>

			<div class="form-row">
	            <label>
	              	<span>How many words would you like?</span>
					<input type="text" name="numberOfWords">
					<span class="error"><?php echo $wordsError; ?></span>
	            </label>
		    </div>

		    <div class="form-row">
		    	<label>
		            <span>Want a number?</span>
		            <input type="checkbox" name="number">
		        </label>
		    </div>

			<div class="form-row">
				<label>
					<span>Want a symbol?</span>
					<input type="checkbox" name="symbol">
				</label>
			</div>

			<div class="form-row">
	        	<button type="submit">Submit Form</button>
	      	</div>

			</form>

		</div>

		<div class="form-basic">
			<div class="form-title-row">
				<h2><?php include 'words.php'; ?><?php include 'symbol.php'; ?><?php include 'number.php'; ?></h2>
            </div>
		</div>

</body>

</html>
