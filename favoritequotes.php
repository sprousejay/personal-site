<?php

	$currentPage = "Quotes";

  function isCurrentPage($pageName, $currentPage) {
   if ($pageName == $currentPage) {
    echo "pagesItem--currentPage";
   }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Favorite Quotes</title>
	<link rel="stylesheet" type="text/css" href="personal.css">
</head>
<body>
<div class="container">
<h1>Jay Sprouse</h1>


<h3>Favorite Quotations</h3>
<p>I have two favorite quotes and they are both from Wayne Gretzky. The first one is, "Skate to where the puck is going, not where it has been." The other quote is, "You miss 100% of the shots you don't take." I like these quotes because they both apply to hockey and in real life about taking chances to achieve your goals and try new things.</p>


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
</div>

</body>
</html>