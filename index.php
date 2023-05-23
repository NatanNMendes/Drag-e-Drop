<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="pg.css"/>
        <title>Document</title>
    </head>
    <body>
        <form action="add_banco.php" method="POST" enctype="multipart/form-data">
            <input name="userfile" type="file" multiple>
            <p>Arraste sua imagem ou click nessa area</p>
            <button type="submit">Upload</button>
        </form>
    </body>
</html>
