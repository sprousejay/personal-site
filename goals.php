<?php

	$currentPage = "Goals";

  function isCurrentPage($pageName, $currentPage) {
   if ($pageName == $currentPage) {
    echo "pagesItem--currentPage";
   }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Goals</title>
	<link rel="stylesheet" type="text/css" href="personal.css">
</head>
<body>

<h1>Jay Sprouse</h1>

<h3>Goals</h3>
<p>My goal for this class is to better understand how websites work and how to build them on my own. After this class is over I would like to carry on to the next boot camp class.  My goal is to be proficient enough in coding to be able to get a new job in the coding field. In order for me to achieve my professional goals i need to make smaller goals like being more organized and disciplined with my work throughout the day.</p>


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