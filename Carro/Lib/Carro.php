<?php
	require './Veiculo.php';

	class Carro extends Veiculo

	{
	public function getVelocidade(){
	return $this->velocidade;
	}
	
	private function atualizarVelocidade(){
	 	$this->velocidade = ($this->rpm / 180) * $this->marcha;
	}
	
	public function getMarcha(){
	return $this->marcha;
	}
	
	public function trocarMarcha(){
	$this->marcha++;
	$this->atualizarVelocidade();
	}
	
	public function getRpm(){
	return $this->rpm;
	}
	
	public function acelerar($rpm){
	$this->rpm = $rpm;
	$this->atualizarVelocidade();
	}


	}

  $carro1 = new Carro();
  $carro1->acelerar(7500);
  $carro1->trocarMarcha();
  $carro1->trocarMarcha();
  $carro1->trocarMarcha();
  echo $carro1->getVelocidade();

	