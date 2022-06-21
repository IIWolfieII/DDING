<x-layout>
    <!-- Section 2 -->
    <div class="h-screen max-h-screen overflow-scroll grow">
        <section class="px-2 py-16 md:px-0 ml-4 text-white">
            <div class="container items-center px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap flex-row items-center flex- sm:-mx-3 w-full">
                    <?php
                    //print_r($manifest ?? '');
                    try {
//
//                        $url = 'https://www.bungie.net/common/destiny2_content/json/en/DestinyInventoryItemDefinition-16e0d647-9b20-4d5a-b955-aae4f5702edf.json';
//                        $ch = curl_init();
//                        curl_setopt($ch, CURLOPT_URL, $url);
//                        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("X-API-KEY{{env('BUNGIE_API_KEY')}}"));
//                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//                        dd($result = curl_exec($ch));
//                        curl_close($ch);
//                        $info = json_decode($result, true);
//                        print_r($info);
//
//
//                        $client = new \GuzzleHttp\Client();
//                        $apiRequest = $client->request(
//                            'GET',
//                            'https://www.bungie.net/common/destiny2_content/json/en/DestinyInventoryItemDefinition-16e0d647-9b20-4d5a-b955-aae4f5702edf.json',
//                            [
//                                'headers' => [
//                                    'X-API-Key' => env('BUNGIE_API_KEY'),*/
//                        'Accept' => '*/*',
//                        'Accept-Encoding' => 'gzip, deflate, br',
//                        'Connection' => 'keep-alive',
//                    ],
//                ]
//            );


                        //$response = json_decode($apiRequest->getBody());
                    } catch (Exception $e) {
                        echo $e;
                    }

                    for ($i = 0; $i <= 30; $i++) { ?>
                    <div class="rounded-sm h-16 w-16 m-1 cursor-pointer bg-center bg-no-repeat bg-cover"
                         style="background-image: url(https://www.bungie.net/{{ $item->icon ?? ''}});"></div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</x-layout>
