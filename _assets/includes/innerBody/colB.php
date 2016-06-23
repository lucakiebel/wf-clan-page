<?php 
require_once '../../../_assets/config.php'; 
//require_once '../error/still_built.php';
//require_once '../error/constants_changed.php';

// TODO make the Blog Frontend and Backend
?>
<div class="upperBanner">
    <img src="../../../img/topBanner.png" class="topBanner" width="100%">
    <h1 class="clanName"><?=$website_head_name?></h1>
    <img src="<?=$wf_clan_logo?>" height="75%">
    <?php include_once 'blog/output.php'; ?>
    
</div>