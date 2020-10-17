<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Citation Generator</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>

    <div class="my-input">
  <form action="cite.php">
    <label for="nspace">Namespace</label>
    <input type="text" id="nspace" name="namespace" placeholder="Namespace to use...">

    <label for="rname">Reference Name</label>
    <input type="text" id="rname" name="refname" placeholder="The name of your reference...">

    <label for="nlink">Link</label>
    <input type="text" id="nlink" name="link" placeholder="Your reference link...">

    <label for="tlink">Link Display Text</label>
    <input type="text" id="tlink" name="linktext" placeholder="Text to be displayed for link...">

    <input type="submit" value="Submit">
  </form>
</div>

  </body>
</html>
