<?php 
    header('Content-type: text/css');
    require_once '../_assets/config.php';
    $font = "Roboto, sans-serif";
?>
/* Global Formats */
body{
    font-family: <?=$font?>;
}

h1,h2{
    font-style: normal;
    text-align: center;
}

/* NavBar Brandname formats */
.navbar-link{
    padding-left: 100px;
    padding-bottom: 20px;
    padding-top: 20px;
    background-image: url(<?=$wf_clan_logo?>);
    background-size: contain;
    background-repeat: no-repeat;
}
.navbar-link:hover{
    background-image: url(<?=$wf_clan_logo_clicked?>);
}

/* NavBar font-size */
.navbar-nav{
    font-size: 13pt;
}

/* Message Form */
form.recruit{
    max-width: 300px;
    margin: 0 auto 50px;
}

form input{
    border: 2px solid #333;
    width: 100%;
    padding: 10px;

}

form input:focus{
    outline: none;
    border-color: #333;
}

form label{
    display: block;
    margin-bottom: 20px;

}

label span{
    display: block;
}

input[type="submit"]{
    background-color: #333;
    color: #fff;
    width: 33%
}

.submit-wrap{
    text-align: right;
}


/* h-spacer for pull-down*/
 .h-spacer{
     margin-bottom: 150px;
 }

 @media (max-width: 980px){
     
 }
