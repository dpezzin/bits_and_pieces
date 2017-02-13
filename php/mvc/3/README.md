mvc/3/README

David J. Malan
malan@harvard.edu

Improves upon mvc/2 by generalizing header and footer as templates.

CHANGES helpers.php from:
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

TO:

<?php

    /**
     * Renders template.
     */
    function render($template, $data = [])
    {
        $path = $template . ".php";
        if (file_exists($path))
        {
            extract($data);
            require($path);
        }
    }

?>

SAME---------------------------------------------------------------------------------------
header.php
footer.php - pages' footer
header.php - pages' header

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
