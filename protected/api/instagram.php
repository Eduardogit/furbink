<?php
//returns a big old hunk of JSON from a non-private IG account page.
function scrape_insta($username) {
	$insta_source = file_get_contents('https://www.instagram.com/'.$username);
	$shards = explode('window._sharedData = ', $insta_source);
	$insta_json = explode(';</script>', $shards[1]); 
	$insta_array = json_decode($insta_json[0], TRUE);
	return $insta_array;
}
//Supply a username
$my_account = 'furbyalbertodiaz'; 
//Do the deed
$results_array = scrape_insta($my_account);
//An example of where to go from there
		//echo "<pre>";
		//print_r($results_array);
		//echo "</pre>";
$latest_array = $results_array['entry_data']['ProfilePage'][0]['user']['followed_by'];
$likes = $latest_array['count'];
