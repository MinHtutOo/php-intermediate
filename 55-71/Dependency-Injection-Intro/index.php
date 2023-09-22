<?php

require_once "Player.php";

class Index{
    public function __construct()
    {
        /*
        # constructor injection
        $player = new Player("Music/", "Demon.mp4");
        $player->playNow();
        */
        $player = new Player();
        $player->setMusicPath("Music/");
        $player->setMusic("Thunder.mp4");

        $this->playNow($player->getMusicPath(),$player->getMusic());
    }

    public function playNow($path, $music)
    {
        echo "Playing " . $music . " from " . $path . " path.";
    }
        
    
}

$obj = new Index();

?>