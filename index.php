<?php
if (!empty($_POST['a1']) && !empty($_POST['a2']) && !empty($_POST['a3']) && !empty($_POST['a4'])) {
    $solution = array("as well", "so", "also", "neither", "nor", "test", "test", "test", "test", "test", "test");
    $i = 0;
    $check = true;
    echo "<ol>";
    foreach ($_POST as $tmp) {
        $tmp = trim(filter_var($tmp, FILTER_SANITIZE_STRING));
        if ($tmp === $solution[$i]) {
            echo "<li class='correct'>$tmp &#10004;</li>";
        } else {
            echo "<li class='wrong'><s>$tmp</s> $solution[$i]</li>";
        }
        $i++;
    }
    echo "</ol>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <style>
        html, input {
            font-size: 20px;
            font-family: Arial, serif;
            margin: 5px;
        }

        .task {
            font-size: 22px;
            font-weight: bold;
        }

        .correct {
            color: green;
        }

        .wrong {
            color: red;
        }

        input[type=text] {
            border-top: none;
            border-left: none;
            border-right: none;
            background: lightgray;
            font-size: 18px;
        }

        input[type="submit"], #back {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            max-width: 500px;
        }
    </style>

</head>
<body>
<form method="post" <?php if ($check) {
    die("<div id='back' onclick='window.location = window.location.href;'><span>Zur&uuml;ck</span></div>");
} ?>>
    <ol>
        <p class="task">Put in <i>too, as well, also, so, either, neither, nor</i></p>
        <li>I'have got a bike like that <input type="text" name="a1" required>.</li>
        <li>John speaks French, and <input type="text" name="a2" required> does his sister.</li>
        <li>He has <input type="text" name="a3" required> been there.</li>
        <li>She isn't in the house, and she isn't in the garden <input type="text" name="a4" required> .</li>
        <li>I don't like Rihanna. - <input type="text" name="a5" required> do I.</li>
        <li>He likes playing golf, and he likes playing tennis <input type="text" name="a6" required> .</li>
        <li>Take this one <input type="text" name="a7" required> .</li>
        <li>The brown shoes didn't fit, and <input type="text" name="a8" required> did the black ones.</li>

        <p class="task">Replace <i>also</i> by <i>too or as well</i></p>
        <li>My daughter speaks <i>also</i> <input type="text" name="a9" required> speaks Italian.</li>
        <li>She is musical and <i>also</i> <input type="text" name="a10" required> artistic.</li>
        <li>You must <i>also</i> <input type="text" name="11" required> eat the vegetables.</li>

    </ol>
    <br>
    <input type="submit">
</form>
</body>
</html>