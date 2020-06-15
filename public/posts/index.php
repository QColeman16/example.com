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

<DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>BootStrap Baby!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
      </head>
    
      <body>
          <!-- Nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Welcome!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Resume.html">Resume</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
          </nav>
          <!--content of webpage --> 
    <div class="container">
           <p>Building these webpages and repositories have really opened my mind to the amount of information that must be stored in order to create an informal and robust page. I am happy I am learning this skill and hope to apply myself soon.</p>
           <div class="jumbotron">
            <h1 class="display-4">Creativity is Key!</h1>
            <p class="lead">Working with Microtrain was a great step for my career. Coming from an entirely different backround and mediocre computer skills, I am able to learn web development through the help of my instructor.</p>
            <hr class="my-4">
            <p>If you would like to learn how I got started you should click below!.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Click</a>
           </div>
           <div class row>
             <div class="col-md-4">Dreams are made from these</div>
            <div class="card" style="width: 18rem;">
             <img src="https://assets.newatlas.com/dims4/default/afd8412/2147483647/strip/true/crop/857x509+0+0/resize/1714x1018!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2Farchive%2Fhennesseyvenomf5.png" class="card-img-top" alt="...">
             <div class="card-body">
                <h5 class="card-title">Could you handle this?</h5>
                <p class="card-text">I bet you would try even though you know you can't. Because I would too!.</p>
                <a href="#" class="btn btn-primary">Follow your Dreams</a>
              </div>
              <div class="card">
                  <div class="card-header">
                    
              <div class="col-md-4">Center Column</div>
              </div>
              <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>
      
    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      </body>
    </html>