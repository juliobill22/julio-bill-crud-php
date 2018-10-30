<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro de Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="cliente.php" method="post">
            <div class="control-group <?php echo!empty($nomeErro) ? 'error ' : ''; ?>">
                <label class="control-label">Nome</label>
                <div class="controls">
                    <input size= "50" name="nome" type="text" placeholder="Nome" required="" value="<?php echo!empty($nome) ? $nome : ''; ?>">
                    <?php if (!empty($nomeErro)): ?>
                        <span class="help-inline"><?php echo $nomeErro; ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </body>
</html>

<?php
require '../DAO/clienteDAO.php';

if (!empty($_POST)) {

    $nomeErro = null;
    $enderecoErro = null;
    $cidadeErro = null;
    $estadoErro = null;
    $validou = true;

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    if (empty($nome)) {
        $nomeErro = 'Por favor digite o seu nome!';
        $validou = false;
    }
    if (empty($endereco)) {
        $enderecoErro = 'Por favor digite o seu endereço!';
        $validou = false;
    }
    if (empty($cidade)) {
        $cidadeErro = 'Por favor digite a sua cidade!';
        $validou = false;
    }
    if (empty($estado)) {
        $estadoErro = 'Por favor digite o seu estado!';
        $validou = false;
    }

    if ($validou) {
        //metodo_banco
        header("Location: index.php");
    }
}
?>