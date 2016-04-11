<?php
class Flight
{
    public function __construct()
    {
        
    }

    public function search()
    {
		$departure_date = date("Y-m-d H:i:s");
        $data = file_get_contents("http://api.ezytravel.co.id/flight/1.0.0/index.php/search_availability?from=CGK&to=SIN&departure_date=2016-03-01&return_date=2016-03-10&adult=1&child=1&infant=1&type=OW&username=ezytravel&password=3zytr4v3L1&supplier=7");
		
		return $data;
	}
}

?>