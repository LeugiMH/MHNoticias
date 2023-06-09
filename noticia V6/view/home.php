<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo URL; ?>recursos/css/bootstrap.min.css">
    <title>Etec News</title>
</head>
<body>

<?php include "menu.php"; ?>

<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-sm-4">
            <div class='card'>
                <div class='card-header'>
                    <a href="<?php echo URL.'inicio';?>" class="h5">
                        Categorias
                    </a>
                </div>
                <ul class='list-group list-group-flush'>
            <?php 
                foreach($dadosCategoria as $values)
                {
                    echo"
                    <a href='".URL."categoria/$values->idcategoria' class='text-decoration-none'>
                        <li class='list-group-item'>$values->nomecategoria</li>
                    </a> 
                    ";
                }
            ?>
                </ul>
            </div>
        </div>

        <div class="col-sm-8">
            <form action="<?php echo URL.'pesquisar'?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="titulo" class="form-control" placeholder="Pesquisar..." aria-label="Pesquisar..." aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Pesquisar</button>
                    </div>
                </div>
            </form>
            <?php
                foreach($dadosNoticia as $values)
                {
                    echo"
                        <div class='card mb-3'>
                            <img class='card-img-top' src='".URL."recursos/img/$values->imagem' alt='$values->imagem'>
                            <div class='card-body'>
                                <h5 class='card-title'>$values->titulo</h5>
                                <p class='card-text'>$values->conteudo</p>
                                <p class='card-text'><small class='text-muted'>Atualizado ". date('d-m-Y H:i',strtotime($values->data))."</small></p>
                            </div>
                        </div>
                    ";
                }
                if(count($dadosNoticia) == 0)
                {
                    echo "<div class='alert alert-warning p-3 text-center'>Sem Notícias adicionadas</div>";
                }
            ?>
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