<?php require_once '../../../_assets/config.php'; ?>
<h2>Join Our Clan!</h2>
<hr>
<form class="recruit" action="https://formspree.io/clan@tennobar.com" method="POST">
    <label><span>Your Tenno Alias</span><input type="text" name="name"></label>
    <label><span>Your Age</span><input type="number" name="age"></label>
    <!-- you can add more to the form by using this template -> "<label><span>TITLE</span><input type="[number/text]" name="NAME DISPLAYED IN THE RESULTING EMAIL"></label>" -->
    <div class="sumbit-wrap">
        <input type="submit" value="<?php if( $wf_application_type === "join" ){ echo "Join!"; } elseif( $wf_application_type === "apply" ){ echo "Apply!"; } ?>">
    </div>
    <input type="hidden" name="_next" value="#" />
    <input type="text" name="_gotcha" style="display:none" />
</form>