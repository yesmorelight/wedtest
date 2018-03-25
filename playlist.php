<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request a Song</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="script.js">
</head>

<body>

  <nav>
    <p id="menu-btn">=</p>
    <div class="menu-cont">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="rsvp.html">RSVP</a></li>
        <li><a href="directions.html">directions</a></li>
        <li><a href="accomodation.html">Accomodation</a></li>
      </ul>
    </div>
  </nav>
  
  <?php
if($_POST) {
    $name = $_POST['name'];
    $content = $_POST['commentContent'];
    $handle = fopen("comments.html","a");
    fwrite($handle,"<b>" . $name . "</b>:<br/>" . $content . "<br/>");
    fclose($handle);
    
}
?>


        <form action = "" method = "POST">
        Name: <input type = "text" name = "name"><br/>
        Comment: <textarea rows = "10" cols = "30" name = "commentContent"></textarea><br/>
        <input type = "submit" value = "Post"><br/>
        </form>
        <?php include "comments.html"; ?>
  
</body>
</html>