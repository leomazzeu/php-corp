<?php
require "operador-class.php";

class Application {
  private $listaGerentes = [];
  private $listaOperadores = [];
  private $appName = "PHP Corporate Manager";

  public function __construct() {
    $opTeste = new Operador("0001", "João da Silva", "00000000001", 2000.00, "002");
    $this->addOperador($opTeste);

    $opTeste2 = new Operador("0401", "Joe Die", "00000000001", 2000.00, "002");
    $this->addOperador($opTeste2);
  }

  public function getAppName() {
    return $this->appName;
  }

  public function addGerente(Funcionario $grt) {
    array_push($this->listaGerentes, $grt);
  }

  public function addOperador(Funcionario $opr) {
    array_push($this->listaOperadores, $opr);
  }

  public function getListaGerentes() {
    return $this->listaGerentes;
  }

  public function getListaOperadores() {
    return $this->listaOperadores;
  }

  public function mostraTelaCadastro() {

  }

  public function mostraTelaConsulta() {

  }

  public function mostraTelaHome() {
    
  }
}