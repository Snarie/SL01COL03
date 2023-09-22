<?php
date_default_timezone_set("Europe/Amsterdam");



/**
 * Functions
 * We maken een functie die een unieke quote bij een teammember plaatst Dit gaan we displayen in de view
 */
function personQuotes($members , $quotes) {
    foreach($members as $member) {
        echo "<div><h3>" . $member . "</h3><p>";
        echo $quotes[array_rand($quotes)] . "</p></div> ";
    }
}


//variables
$quotes = [
    "When people ask me stupid questions, it is my legal obligation to give a sarcastic remark.",
    "I’m not saying I hate you, what I’m saying is that you are literally the Monday of my life.",
    "Silence is golden. Duct tape is silver.",
    "I am busy right now, can I ignore you some other time?",
    "Find your patience before I lose mine.",
    "It’s okay if you don’t like me. Not everyone has good taste.",
    "Do you think God gets stoned? I think so… look at the platypus.",
    "Light travels faster than sound. This is why some people appear bright until they speak."
];

$teammembers = ["arie", "stephan", "polina"];



/**
 * views
 */
require 'views/index.view.php';
