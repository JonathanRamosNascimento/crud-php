<html>
    <head>
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css")?>">
        <title>Video</title>
    </head>
    <body>
        <div class="container">

            <?php if ($this->session->flashdata("success")): ?>
            <p class="alert alert-success"><?=$this->session->flashdata("success")?></p>
            <?php endif?>

            <?php if ($this->session->flashdata("danger")): ?>
            <p class="alert alert-danger"><?=$this->session->flashdata("danger")?></p>
            <?php endif?>

            <?php if ($this->session->userdata("usuario_logado")): ?>

            <h1>Produtos</h1>
            <table class="table">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?=$produto['nome']?></td>
                    <td><?=$produto['descricao']?></td>
                    <td><?=reais($produto['preco'])?></td>
                </tr>
                <?php endforeach?>
            </table>

            <?= anchor("produtos/formulario", "Novo Produto", array("class" => "btn btn-primary")) ?>
            <?= anchor("login/logout", "Sair", array("class" => "btn btn-primary")) ?>

            <?php else: ?>

            <h1>Login</h1>
            <?php
echo form_open("login/autenticar");

echo form_label("Email", "email");
echo form_input(array(
    "name" => "email",
    "id" => "email",
    "class" => "form-control",
    "maxlength" => "255",
));

echo form_label("Senha", "senha");
echo form_password(array(
    "name" => "senha",
    "id" => "senha",
    "class" => "form-control",
    "maxlength" => "255",
));

echo form_button(array(
    "class" => "btn btn-primary",
    "type" => "submit",
    "content" => "Login",
));

echo form_close();
?>

            <h1>Cadastro</h1>
            <?php
echo form_open("usuarios/novo");

echo form_label("Nome", "nome");
echo form_input(array(
    "name" => "nome",
    "id" => "nome",
    "class" => "form-control",
    "maxlength" => "255",
));

echo form_label("Email", "email");
echo form_input(array(
    "name" => "email",
    "id" => "email",
    "class" => "form-control",
    "maxlength" => "255",
));

echo form_label("Senha", "senha");
echo form_password(array(
    "name" => "senha",
    "id" => "senha",
    "class" => "form-control",
    "maxlength" => "255",
));

echo form_button(array(
    "class" => "btn btn-primary",
    "type" => "submit",
    "content" => "Cadastrar",
));

echo form_close();
?>

<?php endif ?>
        </div>
    </body>
</html>