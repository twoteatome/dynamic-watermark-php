<?php
// Add your heroku server url with "/" at end of url (Example: https://example.herokuapp.com/image/)
$ngaychan = array("");
$ngayle = array("");

if (intval(date("d")) % 2 == 0)
{
    $ranindex = rand(0, count($ngaychan) - 1);
    if (empty($_GET['q']))
    {
        $imageString = file_get_contents($ngaychan[$ranindex] . $_GET['imageid']);
        header("content-type: image/webp");
        print $imageString;
    }
    else
    {
        $imageString = file_get_contents($ngaychan[$ranindex] . $_GET['imageid'] . "?q=" . $_GET['q']);
        header("content-type: image/webp");
        print $imageString;
    }
}
else
{
    $ranindex = rand(0, count($ngayle) - 1);
    if (empty($_GET['q']))
    {
        $imageString = file_get_contents($ngayle[$ranindex] . $_GET['imageid']);
        header("content-type: image/webp");
        print $imageString;
    }
    else
    {
        $imageString = file_get_contents($ngayle[$ranindex] . $_GET['imageid'] . "?q=" . $_GET['q']);
        header("content-type: image/webp");
        print $imageString;
    }
}
?>
