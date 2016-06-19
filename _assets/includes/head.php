<?php require_once "../config.php"; ?>
<meta charset="utf-8">
<meta http-equiv="cache-control" content="no-cache" />
<title><?=$website_head_name?> | <?=$website_head_pagename?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="/img/logo/favicon/logo.png">
<link rel="stylesheet" href="<?=$bs_css_link?>">
<link rel="stylesheet" href="../../css/main.css.php">
<?php
    if(isset($css_own_link)){
        echo "<link rel=\"stylesheet\" href=\"$css_own_link\">";
    }

    if(isset($js_own_link)){
        echo "<script src=\"$js_own_link\"></script>";
    }
?>
<script src="<?=$bs_jq_link?>"></script>
<script src="<?=$bs_js_link?>"></script>
<script src="/js/app.js" charset="utf-8"></script>
