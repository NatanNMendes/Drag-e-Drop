<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <?php
            include "config.php";
            $uploaddir = '_img/';
            $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);//PEGAR NOME DO ARQUIVO
            $extensao = pathinfo($uploadfile,PATHINFO_EXTENSION);


            if($extensao == "jpg" or $extensao == "gif" or $extensao == "png"){
            move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile);
            $sql = "INSERT INTO imagem (imagem) VALUES ('$uploadfile')";
            $query = $mysqli->query($sql);
            echo "Seu arquivo foi adicionado";
        ?>
            <script language="javascript">
                Swal.fire({
                title: 'Salvo',
                text: 'Seu arquivo foi adicionado',
                icon: 'success',
                confirmButtonText:'Ok'
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                        
                if (result.isConfirmed) {
                    location.href="index.php";
                    }
                })
            </script>
        <?php    
            }else{
        ?>
            <script language="javascript">
                Swal.fire({
                title: 'Ops :/',
                text: 'seu arquivo não pode ser adicionado.',
                icon: 'error',
                confirmButtonText:'Ok'
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    location.href="index.php";
                }
            })
            </script>
        <?php } ?>
    </body>
</html>