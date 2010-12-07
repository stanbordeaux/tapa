<?php

/**
 * @author Stan Bordeaux
 * @copyright 2010
 */

if (isset($_POST['submit']))
{
    $url_address = $_POST['url_address'];
    $url_link_txt = $_POST['url_link_txt'];
    $category = $_POST['category'];
    $now = mktime();
}

$textfile = 'url_links.txt';
if (file_exists($textfile) && is_readable($textfile))
{
    $data = file($textfile);
    $numrows = count($data);

}
 else
{
    $numrows = 0;
}

//open the file for writing
$fh = fopen("url_links.txt","a");

$counter = $numrows + 1;
//assemble the data into a line variable
$data = $url_address . "," . $url_link_txt . "," . $category . "," .$now. "," .$counter. "\n";

// write the data to the file
fwrite($fh, $data);

//close the file
fclose($fh);
header('Location: view_links_frm.htm');
?>