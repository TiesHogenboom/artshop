<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		the_content();
    }



} ?>
</body>
</html>