<?php
class Ecommerce
{
    protected $prezzo;
	protected $data_spedizione;

	public function __construct($prezzo, $data_spedizione)
	{
		$this->prezzo = $prezzo;
		$this->data_spedizione = $data_spedizione;
	}


}

	

?>