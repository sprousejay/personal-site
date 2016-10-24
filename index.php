<?php

	$currentPage = "Home";

	function isCurrentPage($pageName, $currentPage) {
	 if ($pageName == $currentPage) {
		echo "pagesItem--currentPage";
	 }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jay Sprouse Homepage</title>
	<link rel="stylesheet" type="text/css" href="personal.css">
</head>
<body>

<h1>Jay Sprouse</h1>

<h3>Home</h3>

<p>Thank you for visiting my website. My name is Jay Sprouse. I am 27 years old. I live in Lincoln, NE. I enjoy sports, music, reading and hanging out with friends. For the last 5 years I have been working as an Industrial Radiographer. I am making a career change to get into coding. </p>


<div>
<div class="navigation">

    
    <ul class="pagesList">
      <li>
        <a class="pagesList__pagesItem <?php isCurrentPage("Home", $currentPage); ?> " href="index.php">
          Home
        </a>
      </li>

      <li>
        <a class="pagesList__pagesItem <?php isCurrentPage("Goals", $currentPage); ?> " href="goals.php">
          Goals
        </a>
      </li>

      <li>
        <a class="pagesList__pagesItem <?php isCurrentPage("Quotes", $currentPage); ?> " href="favoritequotes.php">
          Quotes
        </a>
      </li>

      <li>
        <a class="pagesList__pagesItem <?php isCurrentPage("GitHubProfile"); ?> " href="https://github.com/sprousejay">
          GitHub Profile
          </a>
      </li>

    </ul>
</div>

</body>
</html>