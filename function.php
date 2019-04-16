<?php

function randImg(){
  $arr = [
    "http://www.technocrazed.com/wp-content/uploads/2014/09/Famous-Hackers-Who-Brought-World-Governments-To-Their-Knees-11.jpg",
    "https://thumbor.forbes.com/thumbor/1280x868/https%3A%2F%2Fb-i.forbesimg.com%2Fsingularity%2Ffiles%2F2013%2F04%2FKevin-Mitnick.jpg",
    "https://cdn.rbth.com/all/2017/01/10/tass_104649_b.jpg",
    "https://i.ytimg.com/vi/1MgyY5iH2lU/maxresdefault.jpg",
    "https://media.wired.com/photos/5aac37c02ba43111d1213e6f/master/pass/AdrianLamoObit_111220146869.jpg"
  ];

  $rand = rand(0,4);
  $randImg = $arr[$rand];

  return $randImg;
}

// RICHIAMO FUNZIONE
$img = randImg();

?>
