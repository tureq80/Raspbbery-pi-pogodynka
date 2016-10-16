# Raspberry pi pogodynka
Raspberry pi czyta aktualną pogodę za pomocą google TTS pobierając dane z API np. http://api.openweathermap.org

Za pomocą serwisu OPENWEATHERMAP możemy pobierać aktualne dane o pogodzie na całym świecie. Nie bedę omawiał jak wykorzystywać ten serwis do tego celu bo to można znaleźć na innych stronach.

Wystarczy przygotować parę odpowiednich plików by cieszyć się informacjami o pogodzie wymawianymi przez raspberry pi poprzez głośniki podłączone do jacka audio.

Potrzebne do tego zadania jest napisanie prostego skryptu np. pogoda.php gdzie raspberry pi będzie zamieniał pobrane dane z API openweathermap na tekst czytelny dla człowieka czyli dla google TTS (pani czytająca po polsku i nie tylko)

Następnie należy napisać również prosty skrypt bash np. pogoda.sh który wykorzysta przetworzone dane w pliku pogoda.php i przetworzy to na mowę.

# API OpenWeatherMap.org

Zarejestruj się by zdobyć dostęp do danych : http://openweathermap.org/appid

Przykłady pobrania danych o pogodzie: http://openweathermap.org/current
