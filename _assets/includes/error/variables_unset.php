<?php require_once '../../../_assets/config.php'; 

if (!isset($website_ready, $domain_name, $bs_css_link, $bs_js_link, $bs_jq_link, $website_head_name, $website_head_page, $website_foot_copyright, $wf_main_console, $wf_application_email, $wf_application_type, $wf_clan_logo, $wf_clan_logo_clicked, $wf_warlord_names, $wf_warlord_imgs, $wf_application_fields))
{
    echo "<div class=\"alert alert-danger\">";
    echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
    echo "<strong>Variables Unset!</strong> In your config.php are some Variables not set that need to be set for the Site to work properly. <a href='mailto:$site_admin_email' target='_mail'>Contact the Site's Admin!</a>";
    echo "</div>";
}