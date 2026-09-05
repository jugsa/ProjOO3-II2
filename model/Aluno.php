<?php

class Aluno{

    private $nome;
    private $nota1;
    private $nota2;
    private $nota3;
    private $media;
    private $faltas;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNota1($nota1){
        $this->nota1 = $nota1;
    }

    public function getNota1(){
        return $this->nota1;
    }

    public function setNota2($nota2){
        $this->nota2 = $nota2;
    }

    public function getNota2(){
        return $this->nota2;
    }

    public function setNota3($nota3){
        $this->nota3 = $nota3;
    }

    public function getNota3(){
        return $this->nota3;
    }

    public function setMedia($media){
        $this->media = $media;
    }

    public function getMedia(){
        return $this->media;
    }

    public function setFaltas($faltas){
        $this->faltas = $faltas;
    }

    public function getFaltas(){
        return $this->faltas;
    }

    public function calcularMedia(){
        $this->media = ($this->nota1 + $this->nota2 + $this->nota3)/3;
    }

    public function mostrarResultado(){
        $resultado = "Reprovado";
        if($this->calcularPresenca()>75){
            if($this->media < 5){
                $resultado = "Reprovado";
            }elseif($this->media < 7){
                $resultado = "Recuperação";
            }else{
                $resultado = "Aprovado";
            }
        }
        return $resultado;
    }

    public function calcularPresenca(){
        return $this->faltas * 100/80;
    }



}