<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestañas</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <br>
    <br>
    <h1 class="col text-center">Pestañas</h1>
<br>
<div class="container mt-2 p-2">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>

        <li class="nav-item" role="presentation">
        <button class="nav-link" id="batman-tab" data-bs-toggle="tab" data-bs-target="#batman" type="button" role="tab" aria-controls="batman" aria-selected="false">Batman</button>
        </li>

        <li class="nav-item" role="presentation">
        <button class="nav-link" id="spawn-tab" data-bs-toggle="tab" data-bs-target="#spawn" type="button" role="tab" aria-controls="spawn" aria-selected="false">Spawn</button>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div>
  <div class="tab-pane fade" id="batman" role="tabpanel" aria-labelledby="batman-tab"></div>
  <div class="tab-pane fade" id="spawn" role="tabpanel" aria-labelledby="spawn-tab"></div>
</div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>