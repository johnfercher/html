README
======

> Pay Attention and Follow All The Steps Bellow to Install and Configure your Raspberry PI 2 Server

Raspberry Installation (Needed once)
------------------------------------
```
$ sudo apt-get update
$ sudo apt-get install arduino
$ sudo apt-get install apache2
$ sudo php5 libapache2-mod-php5 
```


Arduino Configuration (Needed once)
-----------------------------------
1. Connect Arduino via USB with Raspberry
1. Open the Arduino Software;
1. Copy (utils/arduino/arduino_receive.ino) and Paste on Software;
1. Upload the code



Raspberry and Arduino Configuration (Always when startup)
---------------------------------------------------------
> Be sure that arduino is connected via USB with Raspberry

1. Open the Arduino Software and Select The Port "/dev/ttyACM0"
1. Open the Serial Monitor (If you want to see what Arduino Receives)
1. Close the software

```
$ service apache2 start
$ sudo chmod a+rw /dev/ttyACM0
$ /bin/stty -F /dev/ttyACM0 9600
```

