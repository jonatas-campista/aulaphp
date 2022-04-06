<?php
    include 'conexao.php';

    $idProduto = $_GET['idProduto'];

    $excluir = mysqli_query($conn,"delete from produto 
    where idProduto = $idProduto");

    
    if ($excluir) {
        echo "<script>alert('Excluído com Sucesso')
        location.href='../backs/telas/consultarProduto.php'
        </script>";
    }else {
        echo "<script>alert('Erro ao Excluir')
        location.href='../backs/telas/consultarProduto.php'
        </script>";
    }

?>