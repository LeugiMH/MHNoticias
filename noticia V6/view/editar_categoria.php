<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo URL; ?>recursos/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Notícias Etec</title>
</head>
<body>
<?php include "menuadm.php"; ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-8 mx-auto">

            <div class="card">
                <div class="card-header bg-primary text-white">
                Editar Categoria
                    <a href="<?php echo URL;?>consultar-categoria" class="btn btn-secondary btn-sm float-right"><i class="fa fa-arrow-left"></i> Consultar categorias</a>
                </div>
                <div class="card-body">
                <form action="<?php echo URL . 'atualizar-categoria'; ?>" method="post">
                    
                    <input type="hidden" name="idcategoria" value="<?php echo $dadosCategoria->idcategoria;?>">    

                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="nomecategoria" class="form-control" value="<?php echo $dadosCategoria->nomecategoria;?>" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Gravar">
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- JS Query--> 
<script type="text/javascript" charset="utf8" src="<?php echo URL;?>recursos/js/jquery-3.5.1.js"></script>
<!-- JS Bootstrap --> 
<script src="<?php echo URL; ?>recursos/js/popper.min.js"></script>
<script src="<?php echo URL; ?>recursos/js/bootstrap.min.js"></script>
</body>
</html>