<?php 
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

// Firestore 클라이언트 초기화
$firestore = new FirestoreClient([
    'keyFilePath' => dirname(__FILE__) . '/testti-fcb1e-firebase-adminsdk-cmql4-7982850397.json',
]);

// Firestore 작업 수행
$collection = $firestore->collection('test');
$document = $collection->document('Ll3k0YnYDiIJA8ziNxGS');
$snapshot = $document->snapshot();

if ($snapshot->exists()) {
    $data = $snapshot->data();
    var_dump($data);
} else {
    echo 'Document does not exist';
}