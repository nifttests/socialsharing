<?php
// php code

// include the facebook sdk
require_once('resources/facebook-php-sdk-master/src/facebook.php');

// connect to app
$config = array();
$config['appId'] = '1723775431210958';
$config['secret'] = '88a6eb87981610d1e267aaabbafd041a';
$config['fileUpload'] = false; // optional

// instantiate
$facebook = new Facebook($config);

// set page id
$pageid = "YOUR_PAGE_ID";

// now we can access various parts of the graph, starting with the feed
$pagefeed = $facebook->api("/" . $pageid . "/feed");

// set counter to 0, because we only want to display 10 posts
$i = 0;
foreach($pagefeed['data'] as $post) {

    echo $post['type'] . "<br/>";

    $i++; // add 1 to the counter

    //  break out of the loop if counter has reached 10
    if ($i == 10) {
        break;
    }
}

if ($post['type'] == 'status' || $post['type'] == 'link' || $post['type'] == 'photo') {

    // do something
    $i++; // add 1 to the counter if our condition for $post['type'] is met

}


?>
