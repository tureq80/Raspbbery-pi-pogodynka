#!/bin/bash
//wrzucamy wynik ze strony www do pliku txt
curl "http://localhost/pogoda.php" > pogoda.txt 
echo "$(<pogoda.txt)"

//tworzymy zmienną say
say="$(<pogoda.txt)"

//teraz pobieramy za pomoca wget plik mp3 prosto od google
wget -q -U Mozilla -O pogoda.mp3 "http://translate.google.com/translate_tts?ie=UTF-8&total=1&idx=0&textlen=32&client=tw-ob&q=$say&tl=Pl-pl"

//odtwarzamy plik mp3 w mplayer
mplayer pogoda.mp3
