<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="stylebts.css">
    <script src="scriptbts.js" defer></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <div style="height:5px"></div>
        <div class="menu">
            <ul>
                <li>
                <a href="../index.php">
                    <img src="assets/Home.svg" alt="" class="gray-filtered">
                    <span>Home</span>
                </a>
                </li>
            </ul>
        </div>

            <hr width="100%">
            <div style="height: 0px;"></div>
        
        <div class="menu playlists">
            <ul>
                <li>
                    <a><h2>Favorite Artist</h2></a>
                </li>
                <li>
                    <a href="../Album - Alan Walker/indexalan.php">
                        <span>Alan Walker</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - Billie Eilish/indexbillie.php">
                        <span>Billie Eilish</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - Tulus/indextulus.php">
                        <span>Tulus</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - Rizky Febian/indexrizky.php">
                        <span>Rizky Febian</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - Tiara Andini/indextiara.php">
                        <span>Tiara Andini</span>
                    </a>
                </li>
    
                    <hr width="100%">
    
                <li>
                    <a><h2>K-POP</h2></a>
                </li>
                <li>
                    <a href="../Album - Black Pink/indexblack.php">
                        <span>Black Pink</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - EXO/indexexo.php">
                        <span>EXO</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - BTS/indexbts.php">
                        <span>BTS</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - NewJeans/indexnewj.php">
                        <span>Newjeans</span>
                    </a>
                </li>
                <li>
                    <a href="../Album - Seventeen/indexseven.php">
                        <span>Seventeen</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
                
        <div class="right">
            <div class="playlist-header">
            <div class="player">
            <div class="details">
               <div class="now-playing">PLAYING x OF y</div>
               <div class="track-art"></div>
               <div class="track-name">Track Name</div>
               <div class="track-artist">Track Artist</div>
            </div>

            <div class="slider_container">
               <div class="current-time">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                <div class="total-duration">00:00</div>
           </div>

           <div class="slider_container">
               <i class="fa fa-volume-down"></i>
                <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                <i class="fa fa-volume-up"></i>
           </div>

           <div class="buttons">
               <div class="random-track" onclick="randomTrack()">
                   <i class="fas fa-random fa-2x" title="random"></i>
               </div>
               <div class="prev-track" onclick="prevTrack()">
                    <i class="fa fa-step-backward fa-2x"></i>
                </div>
                <div class="playpause-track" onclick="playpauseTrack()">
                    <i class="fa fa-play-circle fa-5x"></i>
                </div>
                <div class="next-track" onclick="nextTrack()">
                    <i class="fa fa-step-forward fa-2x"></i>
                </div>
                <div class="repeat-track" onclick="repeatTrack()">
                    <i class="fa fa-repeat fa-2x" title="repeat"></i>
                </div>
           </div>

           <div id="wave">
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
            </div>
            </div>  
       </div>
   </div>

</body>
</html>