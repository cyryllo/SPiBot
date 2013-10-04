SpyPiBot - Panel do sterowania robotem
========
Aplikacja webowa do sterowania robotem

Instalacja na Raspbianie
========

1. Instalacja biblioteki pigpio w Raspbian

Pobieramy archiwum biblioteki za pomocą polecenia
	
wget abyz.co.uk/rpi/pigpio/pigpio.tar

następnie rozpakowujemy archiwum
	
tar -xvf pigpio.tar

przechodzimy do rozpakowanego katalogu
	
cd PIGPIO

następnie wykonujemy polecenie
	
cp libpigpio.a-hard libpigpio.a

a następnie budujemy i instalujemy bibliotekę
	
make & make install

uruchamiamy demona (trzeba uruchamiać za każdym razem po uruchomieniu systemu lub dodać do programów uruchamianych razem z systemem)

sudo pigpiod

2.  Instalacja panelu do sterowania robotem

W przygotowaniu....


EN:
SpyPiBot - Panel for robot control
========
Web application to control a robot

Installing on a clean Raspbian
========
Description in preparation...
