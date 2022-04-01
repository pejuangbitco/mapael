<?php

namespace App\Controllers;
use Symfony\Component\DomCrawler\Crawler;
use PHPHtmlParser\Dom;

class Home extends BaseController
{
	function __construct()
	{
		helper('url');
    $this->api = 'http://localhost:5000/api/inventory/';
		$this->client = \Config\Services::curlrequest();
	}

	public function index()
	{
		$response = $this->client->get($this->api);
		return view('layout', [
			'title' => 'Data Inventory',
      'page'  => 'content_inventory.php',
			'data'	=> json_decode($response->getBody(), true)
		]);
	}

	public function filter()
	{		
		$data = $this->request->getGet();
		$this->api .= 'filter';
		if ($data)
			$this->api .= '?&from='.$data['from'].'&to='.$data['to'];
			
		$response = $this->client->get($this->api);
		return view('layout', [
			'title' => 'Data Inventory',
      'page'  => 'content_inventory_filter.php',
			'data'	=> json_decode($response->getBody(), true)
		]);
	}

	public function test()
	{
		$url = 'https://product-selection-classic.grundfos.com/product-detail.product-detail.html?productnumber=98046408';
		$response = $this->client->get($url);
		$html = $response->getBody();
		
		$dom = new \PHPHtmlParser\Dom;
		$dom->loadStr($html);
		$name_product = $dom->find('#product-details-title')->text;
		$specifications = $dom->find('#specifications')->innerHtml;
		$image = $dom->find('#large_image')->src;
		dd($image);
		
		return view('layout', [
			'title' => 'test',
			'data'	=> json_decode($response->getBody(), true)
		]);
	}

	public function go()
	{
		# Use the Curl extension to query Google and get back a page of results
		

$url = 'https://product-selection-classic.grundfos.com/product-detail.product-detail.html?productnumber=98046408';
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$html = curl_exec($ch);
curl_close($ch);
preg_match("/<body[^>]*>(.*?)<\/body>/is", $html, $matches);
# Create a DOM parser object
$dom = new \PHPHtmlParser\Dom;
$dom->loadStr($matches[0]);
$a = $dom->find('#specifications');
d($a->innerHtml);
// foreach($a as $k) {
// 	d($a->innerHtml);
// }

// echo '1: '.count($a);
dd($matches);
# Parse the HTML from Google.
# The @ before the method call suppresses any warnings that
# loadHTML might throw because of invalid HTML in the page.
// @$dom->loadHTML($html);

# Iterate over all the <a> tags
// foreach($dom->getElementsByTagName('table') as $link) {
        # Show the <a href>
				// echo $link->getAttribute('href');
				// echo '123';
        // echo "<br />";
// }

	}

}
