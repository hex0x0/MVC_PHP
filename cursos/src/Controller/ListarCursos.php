<?php

namespace Lucascorreia\Cursos\Controller;

class ListarCursos implements InterfaceControladoraRequisicao
{

    public function processaRequisicao(): void
    {
        include_once __DIR__ . "/../../view/cursos/listar-cursos.php";
    }

}