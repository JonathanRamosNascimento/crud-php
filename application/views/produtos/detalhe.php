<html>
    <head>

    </head>
    <body>
        Nome: <?= $produto['nome'] ?><br/>
        Preço: <?= $produto['preco'] ?><br/>
        Descrição: <?= $produto['descricao'] ?><br/>

        <?= anchor("produtos/index", "Voltar", array('class' => 'btn btn-primary')); ?>
    </body>
</html>