<!DOCTYPE html>

<html lang="es">

<head>

    <title>Ejemplo - Aumentar y disminuir la fuente de nuestra web con javascript</title>

    <meta charset="utf-8">

    <script>

        var fontSize = 1;
        // funcion para aumentar la fuente

        function zoomIn() {
            fontSize += 0.1;
            document.body.style.fontSize = fontSize + "em";

        }

        // funcion para disminuir la fuente

        function zoomOut() {
            fontSize -= 0.1;
            document.body.style.fontSize = fontSize + "em";

        }
    </script>

 

    <style>
        header span {
            margin:5px;
            width:150px;

            text-align:center;

            border:1px solid;

            background:#ccc;

            padding:10px;

            display:inline-block;

            font-size:1em;

            cursor:pointer;

        }

        .fuente1 {font-size:14px;}

        .fuente2 {font-size:1em;}

    </style>

</head>

 

<body>

    <header>

        <span onclick="zoomIn()">Aumentar<br>Fuente</span> <span onclick="zoomOut()">Disminuir<br>Fuente</span>

    </header>

 

    <div class="fuente1">

        <h2>Fuente establecida con <strong>px</strong></h2>

        Esta fuenta esta establecida con pixeles, por lo que no se modificara su tamaño

    </div>

 

    <div class="fuente2">

        <h2>Fuente establecida con <strong>em</strong></h2>

        Esta fuente esta establecida con em, por lo que su tamaño sera modificado con javascript

    </div>

</body>

</html>
