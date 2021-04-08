<?php
# getting and hitting an external enpoint!
# localhost:port -> our service
$authorID = "1";
$url = "https://jsonplaceholder.typicode.com/posts/{$authorID}";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
$resultInfo = curl_getinfo($ch);
curl_close($ch);
// decode the JSON and use a Factory to instantiate an Author object
$authorJSON = json_decode($response);
print_r($authorJSON);
$newAuthor = new Author($authorJSON);

