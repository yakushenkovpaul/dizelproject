<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Symfony\Component\DomCrawler\Crawler;
use DiDom\Document;

class Parser extends Controller
{
	public function index()
	{
		//https://github.com/Imangazaliev/DiDOM/blob/master/README-RU.md

		$document = new Document('https://piterkomtrans.ru/zapchasti/dongfeng/3525n49-010-klapan-raspredelitelnyj-dongfeng', true);

		$h1 = $document->first('h1::text');

		$images = $document->find('img[src$=jpeg]::attr(src)');

		var_dump($images);
	}

  // public function Crawler() {

	// 	$link = 'https://piterkomtrans.ru/zapchasti/dongfeng/3525n49-010-klapan-raspredelitelnyj-dongfeng';

	// 	// Get html remote text.
	// 	$html = file_get_contents($link);		

	// 	$crawler = new Crawler(null, $link);
	// 	$crawler->addHtmlContent($html, 'UTF-8');
		
	// 	foreach ($crawler as $domElement) {
	// 		var_dump($domElement->nodeName);
	// 	}
	// }
}
