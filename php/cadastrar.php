<?php 
    //Incluir conexão
    include("conexao.php");
    //Obter Dados
    $obterDados = file_get_contents("php://input");
    //Extrair Dados JSON
    $extrair = json_decode($obterDados);
    //Separar dados JSON
    $nomeCurso = $extrair->cursos->nomeCurso;
    $valorCurso = $extrair->cursos->valorCurso;
    //SQL
    $sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
    mysqli_query($conexao,$sql);
    //Exportar dados JSON
    $curso = [
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ]
    //TODO ERROR
    json_encode(['curso']=>$curso);


?>