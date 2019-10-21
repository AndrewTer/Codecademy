<?php
  function generateStory($singular_noun, $verb, $color, $distance_unit = 7)
  {
    $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\n
              But I have promises to keep,\n
              And ${distance_unit} to go before I ${verb},\n
              And ${distance_unit} to go before I ${verb}.\n";
  
    return $story;
  }

  echo generateStory("ball", "kick", "red", 31);
  echo generateStory("sun", "shine", "yellow", 12);
  echo generateStory("car", "drive", "blue");

?>
