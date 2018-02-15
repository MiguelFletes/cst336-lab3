<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            
            $player1 = array('name' => 'Chino', 'imgUrl' => '', 'hand' => array(), 'points' => 0);
            $player2 = array('name' => '', 'imgUrl' => '', 'hand' => array(), 'points' => 0);
            $player3 = array('name' => '', 'imgUrl' => '', 'hand' => array(), 'points' => 0);
            $player4 = array('name' => '', 'imgUrl' => '', 'hand' => array(), 'points' => 0);
            
            $allPlayers = array(
                $player1,
                $player2,
                $player3,
                $player4
                );
                
            function printGameState($allPlayers){
                foreach($allPlayers as $player) {
                    echo "<img src='" . $player['imgUrl'] . "'/>";
                    echo $player['name'] . "<br/>";
                }
            }
        
            printGameState($allPlayers);
        ?>
    </body>
</html>