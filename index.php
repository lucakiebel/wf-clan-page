<!DOCTYPE html>
<?php require_once '_assets/config.php'; ?>
<html lang="en">
    <head>
        <?php require_once '_assets/includes/head.php'; 
        header($website_head_name, "Home");
        ?>
    </head>
    <body>
        <?php include '_assets/includes/nav.php'; ?>
        <div class="content">
            <?php include '_assets/includes/body.php'; ?>
        </div>
        <div class="footer">
        <?php include_once('_assets/includes/foot.php'); ?>
        </div>
    </body>
</html>
