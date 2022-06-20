<x-layout>
    <!-- Section 2 -->
    <div class="h-screen max-h-screen overflow-scroll grow">
        <section class="px-2 py-16 md:px-0 ml-4 text-white">
            <div class="container items-center px-8 mx-auto xl:px-5">
                <div class="flex flex-wrap flex-row items-center flex- sm:-mx-3 w-full">
                    <?php

                    //GET Gjallahorn Request
                    $apiKey = 'a863ec719720455aafa2a1c2f9c1082b';
                    try {
                        $client = new GuzzleHttp\Client();

                        $apiRequest = $client->request(
                            'GET',
                            'https://www.bungie.net/platform/Destiny2/Manifest/InventoryItem/1274330687/',
                            [
                                'headers' => [
                                    'Accept' => 'application/json',
                                    'Content-Type' => 'application/json',
                                    'X-API-Key' => $apiKey
                                ]
                            ]
                        );

                        $response = json_decode($apiRequest->getBody());
                        $data = $response->Response->data;
                        $item = $data->inventoryItem;
                        var_dump($data);
                    } catch (Exception $e) {
                        // For handling exception.
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
