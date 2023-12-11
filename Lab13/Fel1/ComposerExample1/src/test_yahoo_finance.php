<?php
require_once '../vendor/autoload.php';

use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;
use GuzzleHttp\Client;

// Create a new client from the factory
$client = ApiClientFactory::createApiClient();

// Returns an array of Scheb\YahooFinanceApi\Results\HistoricalData
$historicalData = $client->getHistoricalQuoteData(
    "AAPL",
    ApiClient::INTERVAL_1_DAY,
    new \DateTime("-14 days"),
    new \DateTime("today")
);

echo "<pre>";
//print_r($historicalData);
echo $historicalData[0]->getClose();
echo "</pre>";

$dividendData = $client->getHistoricalDividendData(
    "AAPL",
    new \DateTime("-5 years"),
    new \DateTime("today")
);

echo "<pre>";
print_r($dividendData);
echo "</pre>";
