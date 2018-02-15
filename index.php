<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            
<<<<<<< HEAD
            $player1 = array('name' => 'Chino', 'imgUrl' => './img/cards/clubs/13.png', 'hand' => array(), 'points' => 0);
            $player2 = array('name' => '', 'imgUrl' => '', 'hand' => array(), 'points' => 0);
=======
            $player1 = array('name' => 'Chino', 'imgUrl' => '', 'hand' => array(), 'points' => 0);
            $player2 = array('name' => 'Celina', 'imgUrl' => './img/user_pics/celina.jpg', 'hand' => array(), 'points' => 0);
>>>>>>> 487c8747a333193e42feb8a1a16c4e36966d454c
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