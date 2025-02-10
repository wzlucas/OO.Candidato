<?php

require_once("util/Conexao.php");
require_once("modelo/Candidato.php");
require_once("dao/CandidatoDAO.php");

//teste de conexao
//$con = Conexao::getCon();
//print_r($con);

do{
    echo "\n==============CADASTRO DE CANDIDATO================\n";
    echo "                1 - Cadastrar Candidato\n";
    echo "                2 - Listar Candidatos\n";
    echo "                3 - Buscar Candidato\n";
    echo "                4 - Excluir Candidato\n";
    echo "                0 - Sair";
    echo "\n=================================================\n";

    $opcao = readline("Informe a opção: ");
    switch ($opcao) {

        case 1:
            
            $candidato = new Candidato();
            $candidato->setNome(readline("Informe o nome:"));
            $candidato->setEmail(readline("Informe o email: "));
            $candidato->setCpf(readline("Informe o CPF: "));
            $candidato->setNumero(readline("Informe o número:"));
            $candidato->setEndereco(readline("Informe o endereço:"));
            $candidato->setDescricao(readline("Informe uma descrição:"));

            $candidatoDAO = new CandidatoDAO;
            $candidatoDAO->inserirCandidato($candidato);
            echo "Candidato cadastrado com sucesso!\n\n";
            break;

        case 2:

            $candidatoDAO = new CandidatoDAO();
            $candidatos = $candidatoDAO->listarCandidatos();
            break;

        case 3:
            
            $id = readline("Informe o ID do candidato: ");

            $candidato = new CandidatoDAO();
            $candidato = $candidatoDAO->buscarPorId($id);

            if ($candidato != null)
                echo $candidato;
            else
                echo "Candidato não encontrado";
            break;

        case 4:
            $candidatoDAO = new CandidatoDAO();
            $candidato = $candidatoDAO->listarCandidatos();
            foreach ($candidato as $c) {
                echo $c;
            }

            $id = readline("\nInforme o número do ID do candidato: ");

            $candidato = $candidatoDAO->removerPorId($id);

            echo "\nCandidato exluido com sucesso!";
            break;
            
        case 0:

            echo "Encerrando Programa..."; 
            break;
        
        default:
            break;
    }

} while ($opcao != 0);