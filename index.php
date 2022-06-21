<?php
    //testo di partenza e sua lunghezza
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do dolor tempor incididunt ut labore et dolore magna aliqua. Ut dolor ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut dolor ex ea commodo consequat. Duis aute irure dolor in reprehenderit in dolor velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $textLength = strlen($text);
    //badwordws
    $_GET = ["badword"];
    $censoredText = str_replace("dolor", "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BAD WORDS</title>
</head>

<!-- <form action="post">
    <input type="text" name="badword">
    <button type="submit">submit</button>
</form> -->
 <h1>testo</h1>
 <div>
    <p> <?php echo $text ?></p>
    <span> Il testo e' lungo: <?php echo $textLength?> caratteri</span>
 </div>
  <div>
    <p> <?php echo $censoredText ?></p>
 </div>

<body>
    
</body>
</html>