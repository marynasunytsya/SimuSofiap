<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/simu.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>

<div class="page_container">
<?php

if(!isset($_GET["page"]) ||  $_GET["page"] <= 0 || $_GET["page"] > 3) {
    header('Location: ?page=1');
}

if($_GET["page"] == 1) {
    include("pages/page1.php");
}

if($_GET["page"] == 2) {
    include("pages/page2.php");
}

if($_GET["page"] == 3) {
    include("pages/page3.php");
}

?>
</div>
    
</body>
