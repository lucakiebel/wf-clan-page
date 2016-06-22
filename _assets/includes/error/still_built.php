<?php require_once '../../../_assets/config.php'; 

if ($website_ready === false) {
    echo "<div class=\"alert alert-warning\">";
    echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
    echo "<strong>Under Construction!</strong> $domain_name is still being built, so don't expect all features to work properly! <a href='mailto:$site_admin_email' target='_mail'>Contact the Site's Admin!</a>";
    echo "</div>";
}