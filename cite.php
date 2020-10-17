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
      <?php echo "<code>[($namespace:$refname>)]</code>"; ?>
     <br>
     <h2>Code to use at the page bottom:</h2>
     <br>
     <?php echo "<code>[($namespace:$refname>[[$link|$linktext]])]</code>"; ?>
     <br>

     </div>

  </body>
</html>
