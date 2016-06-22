<?php require_once '../../../_assets/config.php';

if ($alertFeed_pc != "http://content.warframe.com/dynamic/rss.php" || $alertFeed_ps4 != "http://content.ps4.warframe.com/dynamic/rss.php" || $alertFeed_xb1 != "http://content.xb1.warframe.com/dynamic/rss.php" || $alertFeed_worldState != "http://content.warframe.com/dynamic/worldState.php")
{
    echo "<div class=\"alert alert-danger\">";
    echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
    echo "<strong>Constants Changed!</strong> In your config.php are some Constants not set properly, main Functions of the site may not work! <a href='mailto:$site_admin_email' target='_mail'>Contact the Site's Admin!</a>";
    echo "</div>";
}