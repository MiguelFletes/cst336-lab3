<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $player1 = array('name' => 'Chino', 'imgUrl' => './img/user_pics/chino.png', 'hand' => array(), 'points' => 0);
            $player2 = array('name' => 'Celina', 'imgUrl' => './img/user_pics/celina.jpg', 'hand' => array(), 'points' => 0);
            $player3 = array('name' => 'Miguel', 'imgUrl' => './img/user_pics/miguel.jpg', 'hand' => array(), 'points' => 0);
            $player4 = array('name' => 'Oscar', 'imgUrl' => './img/user_pics/Oscar_Ramirez.jpg', 'hand' => array(), 'points' => 0);
            
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
            
            function getImgURLForCardIndex($index)
            {
                $suitIndex= floor($index/13);
                switch ($suitIndex) {
                    case 0:
                        // code...
                        break;
                    
                    default:
                        // code...
                        break;
                }
            }
            
            function generateDeck()
            {
                for ($i = 0; $i < 51; $i++) {
                     $card= array('imgURL' => "");
                }
            }
            
            function getHand()
            {
                
            }
        
            printGameState($allPlayers);
        ?>
    </body>
</html>