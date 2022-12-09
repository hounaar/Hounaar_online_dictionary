<?php
include_once "D:/Install/code/xamp/htdocs/dict/src/php/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="D:/Install/code/xamp/htdocs/dict/src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hounaar Dict</title>
</head>
<body>
    <header class="header">
        <nav class="navbar justify-content-end">
                <i class="bi bi-list" data-bs-toggle="modal" data-bs-target="#modal"></i>
          </nav>
    </header>
   <div class="container-md">
        <section class="main mt-2 mr-4 ml-4">
            <img src="D:/Install/code/xamp/htdocs/dict/src/pics/logo.png" class="img-fluid" width="400" height="450" alt="">
            <form class="form-group mt-2" method="GET" action="search.php">
            
                <input type="text" name="q" required class="form-control search"  placeholder="Enter Your word"><br/>
                
                <a href=""><button class="btn btn-primary">Search</button></a>
            </form>
        </section>
   </div>


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x-circle"></i>
            </button>
            <ul>
                <a href="/expressions/"><li>Expressions</li></a>
                <a href="/ielts-writing-samples/"><li>IELTS Writing Samples</li></a>
            </ul>
        </div>
      </div>
    </div>
  </div>



</body>
</html>