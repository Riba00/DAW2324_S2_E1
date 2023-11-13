<?php

if (isset($_POST['promptButton'])) {
    $topic = $_POST['promptText'];

    $api_url = 'http://fastapi:8000/generateImages';

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode(['topic' => $topic])
        ]
    ];

    $context = stream_context_create($options);

    $result = file_get_contents($api_url, false, $context);

    if ($result === false) {
        echo 'Error';
    } else {
        $imagesUrls = $result;
    }

    print_r($imagesUrls);

    header("Location: /Vistes/imageResult.php");
}