<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Citation generator</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <?php

    $namespace = htmlspecialchars($_GET['namespace']);
    $refname = htmlspecialchars($_GET['refname']);
    $link = htmlspecialchars($_GET['link']);
    $linktext = htmlspecialchars($_GET['linktext']);

     ?>


     <div id ="citation">
       <h2>Code to use in the document text:</h2>
       <br>
      <?php echo "<textarea rows='2' cols='30'>[($namespace:$refname>)]</textarea>"; ?>
     <br>
     <h2>Code to use at the page bottom:</h2>
     <br>
     <?php echo "<textarea rows='2' cols='30'>[($namespace:$refname>[[$link|$linktext]])]</textarea>"; ?>
     <br>

     </div>

  </body>
</html>
