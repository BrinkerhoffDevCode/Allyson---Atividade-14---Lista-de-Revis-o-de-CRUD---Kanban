<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
             <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="novo-usuario.php">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listar-usuario.php">Listar Usuário</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<h1>Listar Usuários</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res -> num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Data de Nascimento</th>";
            print "<tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<tr>";
        }
        print "</table>"; 
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }

?>

<!-- 37:32 --!>