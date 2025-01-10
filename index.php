<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Tabs Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <div class="border rounded bg-white p-3">
            <h2>Ejemplo de Pestañas</h2>
            <br>
            <br>
            <button id="loadTabs" class="btn btn-primary">Mostrar Pestañas</button>
            <button id="hideTabs" class="btn btn-secondary" style="display: none;">Ocultar Pestañas</button>
            <br>
            <br>
            <div id="tabsContainer" style="display: none;">
                <ul class="nav nav-tabs border rounded" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" data-url="./views/home.php">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="menu1-tab" data-bs-toggle="tab" data-bs-target="#menu1" type="button" role="tab" aria-controls="menu1" aria-selected="false" data-url="./views/menu1.php">Spawn</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="menu2-tab" data-bs-toggle="tab" data-bs-target="#menu2" type="button" role="tab" aria-controls="menu2" aria-selected="false" data-url="./views/menu2.php">Batman</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    </div>
                    <div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
                    </div>
                    <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/ajax.js"></script>
</body>
</html>
