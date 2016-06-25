<?php 
require_once '../../../_assets/config.php';
?>


<?php
if (!isset($already_ran_admin_install)) {
    //variablen mit dem Wert Null definieren:
    //website/domain settings
    $domain_name = $website_head_name = $website_ssl = $site_admin_email = $website_foot_copyright = "";
    //owner settings
    $imp_owner_name = $imp_owner_email = $imp_owner_address_street = $imp_owner_address_town_zip = "";
    //warframe settings
    $wf_main_console = $wf_application_email = $wf_application_type = $wf_clan_logo = $wf_clan_logo_clicked = $wf_warlord_names = $wf_warlord_imgs = "";
    //application fields settings
    $wf_application_field1 = "";
    $wf_application_field2 = "";
    $wf_application_field3 = "";
    $website_ssl = "";
    $htaccess_passwd = $htaccess_user = "";
    $db_server = $db_user = $db_name = $db_passwd = "";
}
$already_ran_admin_install = "set";
?>

<form class="recruit" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Website/Domain Settings:</h1>
    <label><span>Your Domain Name / Subdomain Name</span><input type="url" name="domain_name" placeholder="your-clan.com"></label>
    <label><span>Your Clan's Name</span><input type="text" name="website_head_name" placeholder="Your Warframe Clan"></label>
    <label><span>Active SSL Certificate?</span><input type="checkbox" name="website_ssl" value="true"></label>
    <label><span>Admin Username</span><input type="text" name="htaccess_user" placeholder="Username, only Latin Characters"></label>
    <label><span>Admin Password</span><input type="password" name="htaccess_passwd" placeholder="Password, without slashes or &gt; or &lt;"></label>
    <label><span>Website Admin Email</span><input type="email" name="site_admin_email" placeholder="admin@your-clan.com"></label>
    <label><span>Copyright Notice</span><input type="text" name="website_foot_copyright" placeholder="Content &copy; Your Warframe Clan 2016"></label>
    <hr>
    <h1>Owner Settings:</h1>
    <label><span>The Owner's Real Name</span><input type="text" name="imp_owner_name" placeholder="Hayden Tenno"></label>
    <label><span>The Owner's Email Address</span><input type="email" name="imp_owner_email" placeholder="contact@your-clan.com"></label>
    <label><span>The Owner's Street Name and House Number</span><input type="text" name="imp_owner_address_street" placeholder="Larunda Str. 5"></label>
    <label><span>The Owner's Town Name and ZIP Code</span><input type="text" name="imp_owner_address_town_zip" placeholder="Mercury 20195"></label>
    <hr>
    <h1>Warframe Settings:</h1>
    <label><span>Your Clan's Main Console</span><input type="text" name="wf_main_console" placeholder="[pc/ps4/xb1]"></label>
    <label><span>Your Clan's Application Email</span><input type="email" name="wf_application_email" placeholder="apply@your-clan.com"></label>
    <label><span>Application Type</span><input type="text" name="wf_application_type" placeholder="[join/apply]"></label>
    <label><span>Your Clan's Logo URL</span><input type="text" name="wf_clan_logo" placeholder="http://i.imgur.com/9xP6Hao.png"></label>
    <label><span>Your Clan's Logo URL after it has been Clicked</span><input type="text" name="wf_clan_logo_clicked" placeholder="../../img/logo-clicked.png"></label>
    <label><span>Your Clan's Warlord Names</span><input type="text" name="wf_warlord_names" placeholder='"player1", "player2", "player3"'></label>
    <label><span>Your Warlord's Profile Pictures</span><input type="text" name="wf_warlord_imgs" placeholder='"http://i.imgur.com/9xP6HRN.png", "../../../img/stdicon.png", "player3icon.png"'></label>
    <h3>Application Fields</h3>
    <label><span>Tenno Alias</span><input type="checkbox" name="wf_application_field1" value='<label><span>Your Tenno Alias</span><input type="text" name="name"></label>'></label>
    <label><span>Tenno Age</span><input type="checkbox" name="wf_application_field2" value='<label><span>Your Age</span><input type="number" name="age"></label>'></label>
    <label><span>Teamspeak</span><input type="checkbox" name="wf_application_field3" value='<label><span>Teampeak?</span><input type="checkbox" name="ts"></label>'></label>
    <hr>
    <h1>Database Settings:</h1>
    <label><span>Your Databases Server</span><input type="text" name="db_server"></label>
    <label><span>Your Databases Username</span><input type="text" name="db_user"></label>
    <label><span>Your Databases Name</span><input type="text" name="db_name"></label>
    <label><span>Your Databases Password</span><input type="password" name="db_passwd"></label>
    <div class="alert alert-warning"><a href="#" data-dismiss="alert" aria-label="close">&times;</a> After you commit these changes the Interface will be secured by your Webserver and you will need your Admin Password and Username to Access it.</div>

    <button class="btn btn-primary"><input type="submit" value="Save Settings"></button>
</form>

<?php
//input testen:
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $domain_name = input_testen($_POST["domain_name"]);
        $website_head_name = input_testen($_POST["website_head_name"]);
        $website_ssl = input_testen($_POST["website_ssl"]);
        $site_admin_email = input_testen($_POST["site_admin_email"]);
        $website_foot_copyright = input_testen($_POST["website_foot_copyright"]);
        $imp_owner_name = input_testen($_POST["imp_owner_name"]);
        $imp_owner_address_street = input_testen($_POST["imp_owner_address_street"]);
        $imp_owner_address_town_zip = input_testen($_POST["imp_owner_address_town_zip"]);
        $db_name = input_testen($_POST["db_name"]);
        $db_server = input_testen($_POST["db_server"]);
        $db_user = input_testen($_POST["sb_user"]);
        $db_passwd = input_testen($_POST["db_passwd"]);
        $htaccess_passwd = input_testen($_POST["htaccess_passwd"]);
        $htaccess_user = input_testen($_POST["htaccess_user"]);

    }

    if ($website_ssl == "true") {
        $f = fopen("../../../.htaccess", "a+") or die("Unable to open htaccess-File!");
        fwrite($f, '
RewriteEngine On
RewriteCond %{HTTPS} !=on
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]');
        fclose($f);
    }

function input_testen($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require_once '../../../_assets/includes/dbconnect.php';
connectDatabase("CREATE TABLE MyBlog (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
entry_title VARCHAR(255) NOT NULL,
entry_summary TEXT(1500) NOT NULL,
entry_body TEXT(18000) NOT NULL,
post_date TIMESTAMP 
)");

$htaccess_passwd_secure = crypt($htaccess_passwd, base64_encode($htaccess_passwd));

    if (isset($htaccess_secure)){
        $f = fopen("../../../.htpasswd", "w+") or die("Unable to make the htpasswd-File!");
        fwrite($f, "$htaccess_user:$htaccess_passwd_secure");
        fclose($f);
    }