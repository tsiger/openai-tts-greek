<?php

require __DIR__ . '/vendor/autoload.php';
$client = OpenAI::client('YOUR-OPENAI-API-KEY');

$response = $client->audio()->speech([
    'model' => 'tts-1',
    'input' => 'Όσον ηµπόρεσα έκαµα το χρέος µου. Είδα την πατρίδα µου ελεύθερη, είδα εκείνο όπου ποθούσα και εγώ και ο πατέρας µου και ο πάππος µου και όλη η γενιά µου καθώς και όλοι οι Έλληνες. Και έτσι απεφάσισα να πάω εις ένα περιβόλι, όπου είχα έξω από τ’ Ανάπλι. Επήγα, εκάθησα και απερνούσα τον καιρό µου καλλιεργώντας. Και ευχαριστούµην να βλέπω να προοδεύουν τα µικρά δένδρα που εφύτευα.',
    'voice' => 'shimmer', //Possible values: alloy, echo, fable, onyx, nova, shimmer
]); 

$audioFilePath = __DIR__ . '/speech.mp3';
file_put_contents($audioFilePath, $response);

?>
