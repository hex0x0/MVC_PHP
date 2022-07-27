<?php

namespace Lucascorreia\Cursos\Controller;

class FormularioInsercaoCurso implements InterfaceControladoraRequisicao
{

    public function processaRequisicao(): void
    {
        include_once __DIR__ . "/../../view/cursos/novo-curso.php";
    }

}