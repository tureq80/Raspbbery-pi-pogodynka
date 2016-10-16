# Raspberry pi pogodynka
Raspberry pi czyta aktualną pogodę za pomocą google TTS pobierając dane z API np. http://api.openweathermap.org

Za pomocą serwisu OPENWEATHERMAP możemy pobierać aktualne dane o pogodzie na całym świecie. Nie bedę omawiał jak wykorzystywać ten serwis do tego celu bo to można znaleźć na innych stronach.

Wystarczy przygotować parę odpowiednich plików by cieszyć się informacjami o pogodzie wymawianymi przez raspberry pi poprzez głośniki podłączone do jacka audio.

Potrzebne do tego zadania jest zainstalowany serwer APACHE2 + PHP5, napisanie prostego skryptu np. pogoda.php gdzie raspberry pi będzie zamieniał pobrane dane z API openweathermap na tekst czytelny dla człowieka czyli dla google TTS (pani czytająca po polsku i nie tylko)

przykład pobranego pliku JSON z API OpenWeathermap.org załączony do plików w repozytorium.

Na moim Raspberry pi adres do pliku pogoda.php wygląda tak: http://localhost/pogoda.php 

Wynik powinien pokazać się mniej więcej taki:

"Aktualna pogoda to 9°C, Pochmurno z przejaśnieniami, a ciśnienie wynosi 1032hPa."

Czyli mamy tekst do przeczytania przez google TTS.

Aby przetestować czy Raspberry pi potrafi wykorzystać google TTS proponuje wkleić coś takiego do konsoli:

<code>wget -q -U Mozilla -O mowa.mp3 "http://translate.google.com/translate_tts?ie=UTF-8&total=1&idx=0&textlen=32&client=tw-ob&q='dziś jest ładna pogoda'&tl=Pl-pl" && mplayer mowa.mp3</code>

Powinieneś usłyszeć piękną polską mowę przetworzoną przez google TTS.

Teraz już z górki, należy napisać również prosty skrypt bash np. pogoda.sh, który wykorzysta przetworzone dane w pliku pogoda.php i przetworzy to na mowę.

# API OpenWeatherMap.org

Zarejestruj się by zdobyć dostęp do danych : http://openweathermap.org/appid

Przykłady pobrania danych o pogodzie: http://openweathermap.org/current
