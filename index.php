<?php

$numberErr = $rowErr = $titleErr = $fgErr = $bgErr = $bgtitleErr = "";

$number = $row = $title = $fg = $bg = $bgtitle = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {

if (empty($_GET["number"])) {

$numberErr = "Number is Missing";

}

else {

$number = $_GET["number"];

}

if (empty($_GET["rows"])) {

$rowErr = "Number of Row is Missing";

$row = 10;

}

else {

$row = $_GET["rows"];

}

if (empty($_GET["title"])) {

$titleErr = "Title is Missing";

}

else {

$title = $_GET["title"];

}

if (!isset($_GET["fg"])) {

$fgErr = "foreground color is missing";

}

else {

$fg = $_GET["fg"];

}

if (empty($_GET["bg"])) {

$bgErr = "background color is missing";

}

else {

$bg = $_GET["bg"];

}

if (empty($_GET["bgtitle"])) {

$bgtitleErr = "background title color is missing";

}

else {

$bgtitle = $_GET["bgtitle"];

}

}

echo $numberErr . "\n" . $titleErr . "\n" . $fgErr . "\n" . $bgErr . "\n" . $bgtitleErr . "\n" ;

?>

<html>

<body>

<p style="color:red"><?php echo $rowErr; ?></p>

<table style="border: 1px solid black">

<tr style=<?php echo "background-color:".$bgtitle; ?>>

<td>Count</td>

</tr>

<?php for($i = 0 ; $i< $row ; $i++){ ?>

<tr style=<?php echo "background:".$bg; ?>>

<td style=<?php echo "color:".$fg; ?>><?php echo $number. " * " . ($i+1) . " = " . $number*($i+1); ?></td>

</tr>

<?php } ?>

</table>

</body>

</html>