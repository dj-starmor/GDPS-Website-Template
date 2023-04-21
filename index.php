<?php
include 'config.php';
?>

<html>

<head>
    <title>GDPS</title>
    <link rel="stylesheet" type="text/css" href="files/style.css">
</head>

<body style="background: linear-gradient(#6D00FC, #330074);">
    <center>
        <img src="logo.png" style="max-width: 40%; height: auto;">

        <div>
            <br>
            <br>
            <br>
            <!-- Upper buttons -->
            <a href="<?php echo $windows; ?>.zip"download><img src="files/windows.png" width="200" hspace="12"></a>
            <a href="<?php echo $android; ?>.apk"download><img src="files/android.png" width="200" hspace="12"></a>
            <a href="<?php echo $tools; ?>"><img src="files/tools.png" width="200" hspace="12"></a>
            <!-- Add buttons below -->
        </div>

        <br>

        <div>
            <!-- Lower buttons -->
            <a href="<?php echo $youtube; ?>" target="_blank"><img src="files/youtube.png" width="200"
                    hspace="12"></a>
            <a href="<?php echo $discord; ?>" target="_blank"><img src="files/discord.png" width="200"
                    hspace="12"></a>
            <!-- Add buttons below -->
        </div>
        
        <br>
        <img src="files/about.png" style="max-width: 30%; height: auto;">
        
        <div class="text">
            <span class="white"><?php echo $about; ?></span>
        </div>

        <div class="text">
            <!-- Do not remove pls -->
            <span class="white">Template by <span class="blue"><u><a href="https://www.youtube.com/c/ParadoxGDPS"
                            target="_blank">Starmor</a>
        </div>
    </center>
</body>

</html>