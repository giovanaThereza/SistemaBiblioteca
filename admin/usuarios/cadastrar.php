<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/UsuarioController.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";

    $usuarioController = new UsuarioController();
    
    $usuarioController->cadastrarUsuario();
?>

<main class="container mt-3 mb-3">
    <h1>Cadastrar Usuário</h1>

    <form action="cadastrar.php" method="post" class="row g-3">
        <div  class=" col-md-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="nome" name="nome" id="nome" class="form-control"
            required>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control"
            required>
        </div>

        <div class="col-md-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="senha" name="senha" id="senha" class="form-control"
            required>
        </div>

        <div class="col-md-6">
            <label for="perfil" class="form-label">Perfil</label>
            <select name="perfil" class="form-select" id="perfil" required>
                <option>Selecione o Perfil</option>
                <option value="usuario">Usuário</option>
                <option value="administrador">Administrador</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a> 
        </div>
    </form>

</main>

<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>