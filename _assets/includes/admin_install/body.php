<?php 
require_once '../../../_assets/config.php'; ?>

<?php
//variablen mit dem Wert Null definieren:
//website/domain settings
$domain_name = $website_head_name = $site_admin_email = $website_foot_copyright = "";
//owner settings
$imp_owner_name = $imp_owner_email = $imp_owner_address_street = $imp_owner_address_town_zip = "";
//warframe settings
$wf_main_console = $wf_application_email = $wf_application_type = $wf_clan_logo = $wf_clan_logo_clicked = $wf_warlord_names = $wf_warlord_imgs = "";
//application fields settings
$wf_application_field = "";
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Website/Domain Settings:</h1>
    <label><span>Your Domain Name / Subdomain Name</span><input type="url" name="domain_name"></label>
    <label><span>Your Website's Name</span><input type="text" name="website_head_name"></label>
    <label><span>Active SSL Certificate?</span><input type="checkbox" name="website_ssl" value="true"></label>
    <label><span>Website Admin Email</span><input type="email" name="site_admin_email"></label>
    <label><span>Copyright Notice</span><input type="text" name="website_foot_copyright"></label>
    <hr>
    <h1>Owner Settings:</h1>
    <label><span>The Owner's Real Name</span><input type="text" name="imp_owner_name"></label>
    <label><span>The Owner's Email Address</span><input type="email" name="imp_owner_email"></label>
    <label><span>The Owner's Street Name and House Number</span><input type="text" name="imp_owner_address_street"></label>
    <label><span>The Owner's Town Name and ZIP Code</span><input type="text" name="imp_owner_address_town_zip"></label>
    <hr>
    <h1>Warframe Settings:</h1>
    <label><span>Your Clan's Main Console</span><input type="text" name="wf_main_console" placeholder="[pc/ps4/xb1]"></label>
    <label><span>Your Clan's Application Email</span><input type="email" name="wf_application_email"></label>
    <label><span>Application Type</span><input type="text" name="wf_application_type" placeholder="[join/apply]"></label>
    <label><span>Your Clan's Logo URL</span><input type="text" name="wf_clan_logo"></label>
    <label><span>Your Clan's Logo URL after it has been Clicked</span><input type="text" name="wf_clan_logo_clicked"></label>
    <label><span>Your Clan's Warlord Names</span><input type="text" name="wf_warlord_names" placeholder='"player1", "player2", "player3"'></label>
    <label><span>Your Warlord's Profile Pictures</span><input type="text" name="wf_warlord_imgs" placeholder='"http://i.imgur.com/9xP6HRN.png", "../../../img/stdicon.png", "player3icon.png"'></label>
    <h3>Application Fields</h3>
    <label><span>Tenno Alias</span><input type="checkbox" name="wf_application_field" value='<label><span>Your Tenno Alias</span><input type="text" name="name"></label>'></label>
    <label><span>Tenno Age</span><input type="checkbox" name="wf_application_field" value='<label><span>Your Age</span><input type="number" name="age"></label>'></label>
    <label><span>Teamspeak</span><input type="checkbox" name="wf_application_field" value='<label><span>Teampeak?</span><input type="checkbox" name="ts"></label>'></label>
    <button class="btn"><input type="submit" value="Save Settings"></button>
</form>

<?php
//input testen:
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $domain_name = test_input($_POST["domain_name"]);
        $website_head_name = test_input($_POST["website_head_name"]);
        $website_ssl = test_input($_POST["website_ssl"]);
        $site_admin_email = test_input($_POST["site_admin_email"]);
        $website_foot_copyright = test_input($_POST["website_foot_copyright"]);
        $imp_owner_name = test_input($_POST["imp_owner_name"]);
        $imp_owner_address_street = test_input($_POST["imp_owner_address_street"]);
        $imp_owner_address_town_zip = test_input($_POST["imp_owner_address_town_zip"]);

    }

    if ($website_ssl == "true") {
        $f = fopen("../../../.htaccess", "a+") or die("Unable to open htaccess file!");
        fwrite($f, '
RewriteEngine On
RewriteCond %{HTTPS} !=on
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]');
        fclose($f);
    }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}