
<html>
<head>
<title>2</title>
</head>
<body>

<?php
$marks = 90;
if($marks >= 90)
{
echo "A+";
}
else if($marks < 90 && $marks >=80)
{
echo "A";
}
else if($marks < 80 && $marks >=70)
{
echo "B";
}
else if($marks < 700 && $marks >=60)
{
echo "C";
}
else
{
echo "F";
}
?>