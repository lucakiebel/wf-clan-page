<?php require_once '../../../_assets/config.php'; ?>
<h2>Join Our Clan!</h2>
<hr>
<form class="recruit" action="https://formspree.io/<?=$wf_application_email?>" method="POST">
<?php foreach ($wf_application_fields as &$field ) { echo $field; } ?>
    <div class="sumbit-wrap">
        <input type="submit" value="<?php if( $wf_application_type === "join" ){ echo "Join!"; } elseif( $wf_application_type === "apply" ){ echo "Apply!"; } ?>">
    </div>
    <input type="hidden" name="_next" value="#" />
    <input type="text" name="_gotcha" style="display:none" />
</form>