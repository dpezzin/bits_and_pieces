mvc/2/README

David J. Malan
malan@harvard.edu

Improves upon mvc/1 by wrapping header and footer with a parameterized function.

ADDS helpers.php
<?php

    /**
     * Renders footer.
     */
    function renderFooter($data = [])
    {
        extract($data);
        require("footer.php");
    }

    /**
     * Renders header.
     */
    function renderHeader($data = [])
    {
        extract($data);
        require("header.php");
    }

?>


ADD TO---------------------------------------------------------------------------------------
header.php
<?= htmlspecialchars($title) ?>

- adds to title and <h1>

SAME-----------------------------------------------------------------------------------------
footer.php - pages' footer
header.php - pages' header
helpers.php - helper functions

index.php - home page - links to:
			-1) internal page lectures.php
			-2) external page syllabus
lectures.php - a list of weeks - links to:
			- internal page week0.php
			- internal page week1.php
week0.php - a choice of days - links to:
			- external link wednesday
			- external link friday
week1.php - a choice of days - links to:
			- external link monday
			- external link wednesday
