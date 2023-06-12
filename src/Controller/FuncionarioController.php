<?php
namespace App\Controller;

use App\Entity\Funcionario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FuncionarioController extends AbstractController
{
    /**
     * @Route("/funcionario/mostra/{nome}")
     */
    public function mostraAction($nome)
    {
        $funcionario = new Funcionario();

        $funcionario->setNome($nome);
        $funcionario->setDataDenascimento(new \DateTime("26-01-1994"));
        $funcionario->setDataDeEntrada(new \DateTime("21-03-2012"));

        return $this->render('templates/Funcionario/mostra.html.twig',["funcionario" => $funcionario]);
    }
}

