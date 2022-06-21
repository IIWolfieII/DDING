<?php

    namespace App\Http\Controllers;

    use Exception;
    use Illuminate\Http\Request;
    use GuzzleHttp\Client;

    class BungieController extends Controller {
        function base(): \Illuminate\Contracts\View\View {
            return view('home')->with('manifest', $this->getManifest());
        }

        function getManifest() {
            try {
                $client = new Client();

                $apiRequest = $client->request(
                    'GET',
                    'https://www.bungie.net/platform/Destiny2/Manifest/',
                    [
                        'headers' => [
                            'X-API-Key' => env('BUNGIE_API_KEY'),
                            'Accept' => '*/*',
                            'Accept-Encoding' => 'gzip, deflate, br',
                            'Connection' => 'keep-alive',
                        ],
                    ]
                );

                $response = json_decode($apiRequest->getBody());
                return $response->Response;
            } catch (Exception $e) {
                echo $e;
            }
            return null;
        }
    }
