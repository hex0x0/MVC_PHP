<?php

require __DIR__ . '/../vendor/autoload.php';

use Lucascorreia\Cursos\Controller\ListarCursos;
use Lucascorreia\Cursos\Controller\FormularioInsercaoCurso;
use Lucascorreia\Cursos\Controller\Inicio;



//Para que possamos acessar nosso site sem o .php devemos usar um frontController

switch (@$_SERVER['PATH_INFO']) {
  case '/listar-cursos':
    $controlador = new ListarCursos();
    $controlador->processaRequisicao();
    break;
  
  case '/novo-curso':
    $controlador = new FormularioInsercaoCurso();
    $controlador->processaRequisicao();
    break;

  case '':
  case '/':
  case '/index':
    $controlador = new Inicio();
    $controlador->processaRequisicao();
    break;

  default:
    echo "Erro 404 - Página não encontrada";
    //echo __dir__ . '\\..\\';
    break;

}
