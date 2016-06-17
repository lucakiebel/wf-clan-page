<?php
    //style and backend
    $domain_name                    = "your-warframe-clan.com";                             // Your Clan's Fully Qualified Domain Name (FQDN) (if you host it on a Subdomain e.g. your-clan.warframe-clans.com, then that's your FQDN)
    //$css_own_link                   = "../css/own.css";                                   // If you want to add own styles remove the two slashes in front of this line and add your stylesheets link here, if not, then don't ^^
    //$js_own_link                    = "../js/own.js";                                     // If you want to add own functions remove the two slashes in front of this line and add your js file link here, if not, then don't :P

    //head.php settings
    $website_head_name              = "Your Warframe Clan";                                 // Your Clan's Name (used in Header and Title)
    $website_head_pagename          = "Clan Website";                                       // Words behind the vertical bar in the Title

    //foot.php settings
    $website_foot_copyright         = "&copy; Your Warframe Clan 2015-2016";                // Your Clan's Copyright Notice

    //nav.php settings
    $website_nav_menu1              = "Menu 1";                                             // The first menu's name
    $website_nav_menu2              = "Menu 2";                                             // The second menu's name
    $website_nav_dropdown           = "Dropdown";                                           // Dropdown menu's name
    $website_nav_dropdown_inner1    = "Inner Menu 1";                                       // >∨
    $website_nav_dropdown_inner2    = "Inner Menu 2";                                       // The dropped down menu names
    $website_nav_dropdown_inner3    = "Inner Menu 3";                                       // >∧


    //warframe settings
    $wf_main_console                = "pc";                                                 // [pc/ps4/xb1] Used in the Alert Section to display your choice first
    $wf_application_email           = "apply@your-warframe-clan.com";                       // Email for your Visitors to apply using the form (you need to use the invite form for yourself first so it's initiated)
    $wf_application_type            = "join";                                               // [join/apply] Whether you want players to apply or not (mostly used by Event Clans)
    $wf_clan_logo                   = "http://i.imgur.com/ctbz62h.png";                     // Your clan logo (can also be an internal link like "/img/logo/logo.png" but has to end with a picture file extension)
    $wf_clan_logo_clicked           = "../../img/logo/lotus/navbar-brand-active.png";       // Your clan logo if hovered over it with the mouse pointer (I took a grey one as base and this one is white)
    //$wf_clan_trailer_mp4_link       = "";                                                 // Enter the URL of your Clan's trailer if you have one and remove the two slashes in front of this line (only with valid streamable video file extension (e.g. .mp4, .wmv, ...))
    //$wf_clan_trailer_yt_link        = "";                                                 // Enter the full YouTube Link to your Clan's trailer if you have remove the two slashes in front of this line one (and, yes, you guessed it, only youtube links this time ;) )
    $wf_warlord_names               = array("name1", "name2");                              // Enter the Names of your Clan Leaders / Warlords and their respective profile pictures in the same order in the next array, you can find the pics in the Forums

    $wf_warlord_imgs                = array("http://i.imgur.com/9xP6HRN.png", "http://i.imgur.com/W2njPgi.png");

    //constants, don't change 'em
    $alertFeed_pc                   = "http://content.warframe.com/dynamic/rss.php";        // Used in the Alert Section for PC Alerts
    $alertFeed_ps4                  = "http://content.ps4.warframe.com/dynamic/rss.php";    // Used in the Alert Section for PS4 Alerts
    $alertFeed_xb1                  = "http://content.xb1.warframe.com/dynamic/rss.php";    // Used in the Alert Section for XB1 Alerts
    $alertFeed_worldState           = "http://content.warframe.com/dynamic/worldState.php"; // Used for fetching news and the Void Trader stuff in the 3rd column 
