<!DOCTYPE html>
<?php require_once '_assets/config.php'; ?>
<html lang="en">
    <head>
        <?php require_once '_assets/includes/head.php'; ?>
    </head>
    <body>
        <?php include '_assets/includes/nav.php'; ?>
        <div class="content">

            <div class="col-md-3 cols">
                <h2 class="h-spacer"></h2>
                <h2>Join Our Clan!</h2>
                <hr>
                <form class="recruit" action="https://formspree.io/clan@tennobar.com" method="POST">
                    <label><span>Your Tenno Alias</span><input type="text" name="name"></label>
                    <label><span>Your Age</span><input type="number" name="age"></label>
                    <div class="sumbit-wrap">
                    <input type="submit" value="Join!">
                    </div>
                    <input type="hidden" name="_next" value="#" />
                    <input type="text" name="_gotcha" style="display:none" />
                </form>
            </div>
            <div class="col-md-6 cols">
                <h1>TennoBar Clan</h1>
                <hr>
                <div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Under Construction!</strong> This site is still being built, so don't expect all features to work properly!
                </div>
            </div>
            <div class="col-md-3 cols">
                <h2 class="h-spacer"></h2>
                <h2>PC Alerts</h2>
                <hr>
            </div>
        </div>
        <div class="footer">
        <?php include_once('_assets/includes/foot.php'); ?>
        </div>
    </body>
</html>
