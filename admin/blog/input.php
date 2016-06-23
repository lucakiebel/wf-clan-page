<?php
require_once '../../_assets/config.php';
?>

<div class="blogInput" id="entry">
    <form class="blogEntry" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label><span>Entry Title</span><input type="text" name="entry_title" placeholder="Topic:Data"></label>
        <label><span>Entry Summary</span><input type="text" name="entry_summary"></label>
        <label><span>Entry</span><textarea rows="4" cols="50" form="entry" name="entry_body"></textarea></label>
        <button class="btn"><input type="submit" value="Save Entry"></button>
    </form>
</div>

<?php
$entry_title = $entry_summary = $entry_body = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entry_title = input_testen($_POST["entry_title"]);
    $entry_summary = input_testen($_POST["entry_summary"]);
    $entry_body = input_testen($_POST["entry_body"]);
}

function input_testen($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require_once '../../_assets/includes/dbconnect.php';


