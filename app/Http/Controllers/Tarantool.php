<?php

namespace App\Http\Controllers;
use Tarantool\Client\Client;
use Tarantool\Client\Schema\Criteria;

use Illuminate\Http\Request;

class Tarantool extends Controller
{
	public function index() {

		$client = Client::fromOptions([
			'uri' => ENV('TARANTOOL_URL'),
			'username' => ENV('TARANTOOL_USER'),
			'password' => ENV('TARANTOOL_PASSWORD')
		]
	);

		$space = $client->getSpace(ENV('TARANTOOL_SPACE'));
		$result = $space->select(Criteria::key([4]));

		print('<pre>');
		print_r($result);

 }
}
