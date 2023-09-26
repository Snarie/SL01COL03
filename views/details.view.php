<?php
/**
 * Created by: Stephan Hoeksema 2023
 * SL01COL03
 */
include($_SERVER['DOCUMENT_ROOT'].'\\index.php');
$t=$_GET['var'];
displayComplexArray($team[$t]);

function displayComplexArray($array, $indent = 0)
{
    foreach ($array as $key => $value) {
        //extra break, because why not
        if($indent == 0) {echo"<br>";}
        //indentation for display
        echo str_repeat("&nbsp; &nbsp;", $indent);

        if (is_array($value)) {
            // if the value is an array, recursion :P
            echo "$key:<br>";
            displayComplexArray($value, $indent + 1);
        } else {
            // if it's not an array, display as normal
            echo "$key: $value<br>";
        }
    }
}/**/

echo "het werkt!";