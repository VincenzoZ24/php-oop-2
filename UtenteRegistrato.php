<?php
class UtenteRegistrato{
    private $email;
    private $name;
    private $indirizzo;
    private $cartaCredito;
    public function __construct($name, $cartaCredito, $email, $indirizzo)
	{
		$this->name = $name;
		$this->cartaCredito = $cartaCredito;
		$this->$email = $email;
        $this->$indirizzo = $indirizzo;
	}
   
}