<?php

namespace CodeManifesto\Mapping;

use Supporter;

class Mapping
{

	/**
	 * Gathers the address and lat + long, then updates the model
	 * @param  Illuminate\Queue\Jobs\SyncJob $job
	 * @param  Array $data
	 * @return void
	 */
	public function fire($job, $data)
	{
		$address = $this->getAddress($data);

		if($address) {
			$latLong = $this->getLatLong($address);

			$supporter = Supporter::find($data['id']);
			$supporter->latitude = $latLong['lat'];
			$supporter->longitude = $latLong['lng'];
			$supporter->save();
		}
	}

	/**
	 * Puts the address elements into a usable string
	 * @param  Array $data
	 * @return String
	 */
	public function getAddress($data)
	{
		$address = '';
		if(!empty($data['city']))
			$address .= $data['city'] . ', ';

		if(!empty($data['state']))
			$address .= $data['state'] . ', ';

		if(!empty($data['country']))
			$address .= $data['country'];

		return $address;
	}

	/**
	 * Queries Google's Geocode API with given address string
	 * @param  String $address
	 * @return Array
	 */
	public function getLatLong($address)
	{
		$client = new \Guzzle\Service\Client("https://maps.googleapis.com/");
		$response = $client->get("maps/api/geocode/json?address=$address&key=".getenv('GEOCODE_KEY'))->send();
		$latLong = $response->json()['results'][0]['geometry']['location'];
		return $latLong;
	}
	
}