<?php
// ustawiamy kodowanie znaków UTF-8
header('Content-Type: text/html; charset=utf-8');
// pobieramy plik json z serwisu api
$json = file_get_contents('http://api.openweathermap.org/data/2.5/find?q=warsaw&units=metric&lang=pl&APPID=_________API_KEY__________');
// plik json dekodujemy na obiekty 
$obj = json_decode($json);
// pobieramy z pliku json obiekt o nazwie temp i robimy z tego zmienną $temp
$temp = $obj->list[0]->main->temp;
// pobieramy opis pogody i robimy zmienną $chmury
$chmury = $obj->list[0]->weather[0]->description;
// pobieramy cisnienie i robimy zmienną $cisnienie
$cisnienie = $obj->list[0]->main->pressure;
// zaokrągramy temperaturę ze zmiennej $temp i robimy nową zmienną $temp2
$temp2 = round($temp,0);
// zaokrąglamy cisnienie ze zmiennej $cisnienie i robimy nową zmienną $cisnienie2
$cisnienie2 = round($cisnienie,0);


// teraz składamy wszystko w całość by utworzyć piękne i sensowne zdanie.

echo 'Aktualna pogoda to '.$temp2.'°C, ';
if(strpos($chmury, 'Umiarkowany deszcz' ) !== false) { echo 'przelotny deszcz'; } else { echo $chmury; }
echo ', a ciśnienie wynosi '.$cisnienie2.'hPa.';

// resultat powinien być taki
//Aktualna pogoda to 24°C, przelotny deszcz, a ciśnienie wynosi 1011hPa.

?>
