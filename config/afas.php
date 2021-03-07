<?php

return [

    // Connections to different AFAS servers
    'connections' => [

        'default' => [
            // The environment of the profit service. Ex: T11111AA
            'environment' => env('AFAS_ENVIRONMENT', null),

            // The authorization token to make requests to the profit service
            'token' => env('AFAS_TOKEN', null),

            /*
             * These are placeholders. Replace them with your connectors!
             *
             * You can name the key whatever you want. The value has to be the connector ID in AFAS Profit.
             * You can add as many connectors as needed, just don't forget to add them to your .env file
             */

            // List of all the getConnectors for the profit service
            'getConnectors' => [
                'contacts' => env('AFAS_CONTACTS_GETCONNECTOR')
            ],

            // List of all the updateConnectors for the profit service
            'updateConnectors' => [
                'persons' => env('AFAS_PERSONS_UPDATECONNECTOR')
            ]
        ]

    ]
];
