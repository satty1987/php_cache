
<?php
$filename = './products.json';

if (file_exists($filename)) {
    $local = file_get_contents($filename);
    echo $local;
} else {
    $url = 'https://ng-simranias.herokuapp.com/api/products';

    $str = file_get_contents($url);
    
    if (json_decode($str) != null) {
        $file = fopen('products.json', 'w');
        fwrite($file, $str);
        fclose($file);
        echo $str;

    } else {
        echo "Response Error";
    }
}
?>