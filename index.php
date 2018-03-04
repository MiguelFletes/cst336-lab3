
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
            
            $heartsUsed = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
            $clubsUsed = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
            $diamondsUsed = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
            $spadesUsed = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
            
            $allCards = array(
                $heartsUsed,
                $diamondsUsed,
                $spadesUsed,
                $clubsUsed
                );
            
            $allPlayers = array(
                $player1,
                $player2,
                $player3,
                $player4
                );
                
            $allPoints = array();
                
            function printGameState(&$allPlayers,&$allCards,&$allPoints){
                foreach($allPlayers as $player) {
                    echo "<img src='" . $player['imgUrl'] . "' width='100' height='150' />";
                    echo $player['name'] . "<br/>";
                    generateDeck($player,$allCards);
                    echo "<div id = gamePrint>";
                    displayhand($player);
                    echo "</div>";
                    array_push($allPoints, $player['points']);

                }   
                

            }
            
            function displayHand(&$player){
                
                for($i=0; $i<count($player['hand']); $i++){
                    echo "<img id='playerCards' src=" . $player['hand'][$i] . " />";
                }
        
                echo "\t\t" . $player['points'] . " points<br>";
            }
            
            function generateDeck(&$player,&$allCards)
            {
                $count = 0;
                
                while($player['points'] <= 38){
                    $again = true;
                    do{
                        $suit = rand(1,4);
                        $card = rand(1,13);
                        if($allCards[$suit-1][$card-1] == 0)
                        {
                            $again = false;
                            $allCards[$suit-1][$card-1] = 1;
                        }
                    }while($again);
                    

                    switch ($suit) {
                        case 1:
                            $player['hand'][$count] = "./img/cards/hearts/" . "$card" . ".png";
                            $player['points'] += $card;
                            break;
                        case 2:
                            $player['hand'][$count] = "./img/cards/diamonds/" . "$card" . ".png";
                            $player['points'] += $card;
                            break;
                        case 3:
                            $player['hand'][$count] = "./img/cards/spades/" . "$card" . ".png";
                            $player['points'] += $card;
                            break;
                        case 4:
                            $player['hand'][$count] = "./img/cards/clubs/" . "$card" . ".png";
                            $player['points'] += $card;
                            break;
                    }
                    $count++;
                }
            }
            
            function getWinner(&$allPoints, &$allPlayers){
                
                $possibleWinner = array();
                $index = array();
                $winnerTotal = 0;
                for($i = 0; $i < sizeof($allPoints); $i++)
                {
                    
                    $winnerTotal += $allPoints[$i];
                    if($allPoints[$i] < 43)
                    {
                        array_push($possibleWinner, $allPoints[$i]);
                        array_push($index, $i);
                    }
                }
                $max = $possibleWinner[0];
                $maxIndex = $index[0];
                for($i = 1; $i < sizeof($possibleWinner); $i++)
                {
                    if($possibleWinner[$i] > $max)
                    {
                        $max = $possibleWinner[$i];
                        $maxIndex = $index[$i];
                    }
                }
                
                $winnerTotal = $winnerTotal - $max;
                //echo "<h1><br>Winner is</h1>";
                echo $allPlayers[$maxIndex]['name'];
                echo " wins ";
                echo $winnerTotal;
                echo " points!!";
                
            }
            
            printGameState($allPlayers,$allCards, $allPoints);
            getWinner($allPoints, $allPlayers);
        ?>
    </body>
</html>