<?php

return [
    'media_library' => [
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads/'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Local'),
    ],
];
