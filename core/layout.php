<!DOCTYPE html>
<html lang="en">
<?php

$meta=[];
$meta['title']='Your Name';
$meta['description']='Stuff about me';
$content = <<<EOT

<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p class="lead">I build things and I do stuff.</p>
</div>
EOT;
require '../core/layout.php';
  <head>
      <meta charset="UTF-8">
      <title>Welcome from Qudamah</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/dist/main.css">
      <?php echo $content; ?>
    </head>
  <body>

    <div id="Wrapper">
        <nav class="top-nav">
            <a href="index.html" class="pull-left" href="/">Site Logo</a>
            <ul role="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, I am YOUR-NAME</div>
                <img src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm" alt="My Avatar" class="img-circle">
              </div>
            </div>
        </div>

        <div id="Footer" class="clearfix">
            <small>&copy; 2017 - MyAwesomeSite.com</small>
            <ul role="navigation">
                <li><a href="terms.html">Terms</a></li>
                <li><a href="privacy.html">Privacy</a></li>
            </ul>
        </div>
    </div>

  </body>

</html>