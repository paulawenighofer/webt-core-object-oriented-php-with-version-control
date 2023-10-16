<?php
require 'demo.php'; // Include your video class definitions

$youtubeVideos = [
    new YouTubeVideo("Breakfast Video 1", "6mH6ROMCEX0"),
    new YouTubeVideo("Breakfast Video 2", "NAmLwnjRH7s"),
    new YouTubeVideo("Lunch Video 1", "qmCV0TMKWw0"),
    new YouTubeVideo("Lunch Video 2", "oxXNklNgmbM"),
    new YouTubeVideo("Dinner Video 1", "UIOW18kRDEA"),
];

// Output the video previews as JSON
echo json_encode($youtubeVideos);


