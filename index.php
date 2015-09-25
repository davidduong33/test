
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
function Greetings ($hour = 0) {
    if ( $hour >= 0 and $hour <= 10 )
    return "Good Morning";
    elseif ( $hour > 10 and $hour <=16)
        return "Good Afternoon";
    elseif ($hour >16 and $hour <= 24)
        return "Good Night";
}

print "<p> Start </p>";
print Greetings (3);
    ?>

    </body>
</html>
