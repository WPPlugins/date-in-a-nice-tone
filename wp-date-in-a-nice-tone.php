<?php
/*
Plugin Name: Date in a nice tone
Version: 1.2
Plugin URI: http://mark-kirby.co.uk/2008/date-in-a-nice-tone-a-wordpress-plugin/
Author: Ribot
Author URI: http://www.ribot.co.uk
Description: Displays the amount of time since a post or page was written in a nice friendly manner. Simply use &lt;? wp_date_in_a_nice_tone(); ?&gt; to display the date in your theme.

Copyright 2008  Ribot mark.kirby@ribot.co.uk

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function wp_date_in_a_nice_tone() {
		
	$postTime = get_the_time("U");
    $currentTime = time();
    $timeDifference = $currentTime - $postTime;
    
    $minInSecs = 60;
    $hourInSecs = 3600;
    $dayInSecs = 86400;
    $monthInSecs = $dayInSecs * 31;
    $yearInSecs = $dayInSecs * 366;

    //if over 3 years
	if ($timeDifference > ($yearInSecs * 3)) {
		$dateWithNiceTone = "quite a long while ago…";

    //if over 2 years
	} else if ($timeDifference > ($yearInSecs * 2)) {
		$dateWithNiceTone = "over two years ago";

	//if over a year 
	} else if ($timeDifference > $yearInSecs) {
		$dateWithNiceTone = "over a year ago";

    //if over 355 days ago
    } else if ($timeDifference > ($dayInSecs * 355)) {
        $dateWithNiceTone = "around a year ago";

    //if over 9 months
    } else if ($timeDifference > ($monthInSecs * 9)) {
        $dateWithNiceTone = "almost a year ago";
                    
    //if over 6 months
    } else if ($timeDifference > ($monthInSecs * 6)) {
        $dateWithNiceTone = "about half a year ago";
    
	//if over a month	
	} else if ($timeDifference > $monthInSecs) {
	    $dateWithNiceTone = "more than a month ago";
	
	//if over 28 days ago
    } else if ($timeDifference > ($dayInSecs * 28)) {
	    $dateWithNiceTone = "around a month ago";

	//if equal to or more than 8 days ago
	} else if ($timeDifference >= ($dayInSecs * 8)) {
        $dateWithNiceTone = "in the last month";	    
	
	//if equal to or more than 5 days ago
    } else if ($timeDifference >= ($dayInSecs * 5)) {
	    $dateWithNiceTone = "around a week ago";        
    
    //if equal to or more than 3 days ago
    } else if ($timeDifference >= ($dayInSecs * 3)) {
	    $dateWithNiceTone = "a few days ago";
	       
    //if equal to or more than 2 days ago
    } else if ($timeDifference >= ($dayInSecs * 2)) {
        $dateWithNiceTone = "a couple of days ago";   
	
	//if more than an hour ago
	} else if  ($timeDifference > $hourInSecs) {
		$dateWithNiceTone = "freshly baked";
	
	//if less than or equal to an hour ago
	} else if  ($timeDifference <= $hourInSecs) {
		$dateWithNiceTone = "just now";
	}
	
    echo $dateWithNiceTone;
    	
}

add_filter('Posts', 'wp_date_in_a_nice_tone');
?>