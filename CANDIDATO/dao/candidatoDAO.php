<?php

require_once("modelo/Candidato.php");

class CandidatoDAO
{

    public function inserirCandidato(Candidato $candidato)
    {
        $sql = "INSERT INTO candidato (nome, email, numero, cpf, descricao, endereco)
        VALUES
        (?, ?, ?, ?, ?, ?)";
    
        $con = Conexao::getCon();

        $stm = $con->prepare($sql);
        if($candidato instanceof Candidato) {

        
        $stm->execute(array($candidato->getNome(),
                            $candidato->getEmail(),
                            $candidato->getNumero(),
                            $candidato->getCpf(),
                            $candidato->getDescricao(),
                            $candidato->getEndereco()
                            ));
        } 
    }

    public function listarCandidatos(){
        $sql = "SELECT * FROM candidato";

        $con = Conexao::getCon();

        $stm = $con->prepare($sql);
        $stm->execute();
        $registros = $stm->fetchAll();

        $candidato = $this->mapCandidato($registros);
        return $candidato;
    }

    public function buscarPorId(int $idCandidato){
        $con = Conexao::getCon();

        $sql = "SELECT * FROM candidato WHERE id = ?";

        $stm = $con->prepare($sql);
        $stm->execute([$idCandidato]);

        $registros = $stm->fetchAll();

        $candidato = $this->mapCandidato($registros);
        if (count($candidato) > 0) {
            return $candidato[0];

        return null;
        } 
    }

    public function removerPorId(int $idCandidato){
        $con = Conexao::getCon();

        $sql = "DELETE FROM candidato WHERE id = ?";

        $stm = $con->prepare($sql);
        $stm->execute([$idCandidato]);

        $registros = $stm->fetchAll();

        $candidato = $this->mapCandidato($registros);
        if (count($candidato) > 0) {
            return $candidato[0];

        return null;
        } 
    }

    private function  mapCandidato(array $registros){
        $candidatos = array();
        foreach($registros as $reg){
            $candidato = null;
          
                $candidato = new candidato();
                $candidato->setNome($reg['nome']);
                $candidato->setCpf($reg['cpf']);
                $candidato->setNumero($reg['numero']);
                $candidato->setEmail($reg['email']);
                $candidato->setEndereco($reg['endereco']);
                $candidato->setId($reg['id']);
                $candidato->setEmail($reg['descricao']);

        array_push($candidatos, $candidato);
        };
        return $candidato;
    }
}

