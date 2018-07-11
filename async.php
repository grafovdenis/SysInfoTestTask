<?php include_once "systemInfo.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title>Text Exercise</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
<div id="cpu_usage">
    <button type="button" onclick="getInfo(this.id)" id="cpu">CPU info</button>
</div>
<br>
<div id="os_info">
    <button type="button" onclick="getInfo(this.id)" id="os">OS info</button>
</div>
<br>
<div id="ram_info">
    <button type="button" onclick="getInfo(this.id)" id="ram">RAM info</button>
</div>
<br>
<div id="rom_info">
    <button type="button" onclick="getInfo(this.id)" id="rom">ROM info</button>
</div>

<script>
    function getInfo(id) {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById(id).innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "systemInfo.php?q=" + id, true);
        xhttp.send(id)
    }
</script>

</body>
</html>