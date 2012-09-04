 <?php
     $football_teams = array(
    // $football_teams is an array of hashes detailing British football teams.
    
         array( // This is the 0th hash in the $football_teams array.
             'coach'    => 'Bobby McGoo',
             'teamname' => 'Strike Attack',
             'players'  => array( // 'players' is an array of hashes.
                 array('name'=>'Jill Scott',  'position'=>'goalie'),
                 array('name'=>'Willard Bee', 'position'=>'defense'),
                 array('name'=>'Ace Batord',  'position'=>'centre')
             ),
             'wins'    => 5,
             'loses'   => 2,
             
         ),
         array( // This is the 1st hash in the $football_teams array.
             'coach'    => 'Sam Smith',
             'teamname' => 'Running Scared',
             'players'  => array(
                 array('name'=>'Warren Lost', 'position'=>'goalie'),
                 array('name'=>'Jane Mayor',  'position'=>'defense'),
                 array('name'=>'Tim MacLand', 'position'=>'centre')
             ),
             'wins'    => 0,
             'loses'   => 4
         )
     );
     
   foreach($football_teams as $current_team) {
     echo "{$current_team['teamname']} is coached by {$current_team['coach']}.<br />";
     echo "The team has {$current_team['wins']} wins and
                    {$current_team['loses']} loses.<br />";
     echo "The team roster:<br />";
     foreach ($current_team['players'] as $current_player) {
         echo "* {$current_player['name']} plays {$current_player['position']}<br />";
     }
     echo "<br />";
   }
 ?>