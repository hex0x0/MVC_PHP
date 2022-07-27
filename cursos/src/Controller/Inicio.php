<?php

namespace Lucascorreia\Cursos\Controller;

class Inicio implements InterfaceControladoraRequisicao
{
    public function processaRequisicao(): void
    {
        $titulo = 'Gerenciador de cursos';
        include_once __DIR__ . '/../../view/inicio.php';
    }   
}