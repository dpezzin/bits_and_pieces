#!/bin/env php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Getting info from a database</title>
  </head>
  <body>
    <h1>Getting info from a database into PHP</h1>

<?php

//
// Step 1: Connecting to the database server
//
print ("<h2>Step 1: Connecting to the database server</h2>\n");
print ("<p>First we need to connect to the database server:</p>\n");

//
// Try connecting to the database server... you'll need to replace
// your database server, username and password!
//
$result = mysql_connect("__", "__", "__");

//
// We'll check to make sure that the connect worked using an if-statement
// Once the page is successfully displaying the desired results, we can
// simply comment out all these 'if' statements that check for errors.
//
if (!$result)
{
  print("<h2>Failed to connect to database!</h2>");
}
else
{
  print("<p>Connection established</p>");
}

//
// Step 2: Selecting the database
//
print ("<h2>Step 2: Selecting the database</h2>\n");
$result = mysql_select_db("__");

if (!$result)
{
  print("<h2>Failed to select database!</h2>");
}
else
{
  print("<p>Database selected successfully</p>");
}

//
// Step 3: Run an SQL query!
// First create the query in a variable of our own called $sql, then
// run the query using the special mysql function
//
print("<h2>Step 3: Run an SQL query!</h2>");

$sql = "SELECT * from ____ WHERE ";
$result = mysql_query($sql);

// As usual, check to make sure that it worked:
if (!$result)
{
  print("<h2>Failed to run the query! Error is:" . mysql_error(). "</h2>");
}
else
{
  print("<p>Query ran successfully!</p>");
}


//
// Step 4: Process the results
// This part is the tricky part... lots of new learning... have a coffee
// before getting through this.
//
print("<h2>Step 4: Process the results</h2>\n");


//
// Get the first row from the result of our query. Note, mysql_fetch_array()
// returns a value of false if there's no more results left.
//
$row_array = mysql_fetch_array($result);

while ($row_array != false)
{
  // print out whatever we want from this row
  print("<p>Filename: " . $row_array["filename"] . ".</p>\n");
  
  // before trying to get the next row!
  $row_array = mysql_fetch_array($result);
}

print("<h2>Step 5: Close the connection to the database server</h2>\n");
mysql_close();

?>

  </body>
</html>