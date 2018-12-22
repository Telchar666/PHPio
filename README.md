The goal of this project is to create (or modify and compile existing) web interface from PHP code.

Why php code ? Because it is more simple for me, I'm not a codder and, for me, build a web-interface in php is easier than other methods.

So beggin by the beggining, I based my work on this project :

http://www.instructables.com/id/Simple-and-intuitive-web-interface-for-your-Raspbe/

But I changed the interface for a better one, more complex too.


```
sudo apt-get install apache2 phpgit-core
cd
git clone git://git.drogon.net/wiringPi
cd ~/wiringPi
git pull origin
cd ~/wiringPi
./build
sudo chmod 777 -R /var/www/html
```
Now we can host a webpage on the rpi and control gpio pins.

Whis part is optional but very useful to change the webinterface.
``` 	
sudo apt-get install samba samba-common-bin
sudo mv /etc/samba/smb.conf /etc/samba/smb.conf.old
sudo nano /etc/samba/smb.conf
```
This is what you can write in this file.
``` 
[global]
   workgroup = WORKGROUP
   server string = %h server
   netbios name = PHPio
   dns proxy = no
   log file = /var/log/samba/log.%m
   max log size = 1000
   syslog = 0
   panic action = /usr/share/samba/panic-action %d
   security = user
   encrypt passwords = true 
   passdb backend = tdbsam
   obey pam restrictions = yes
   unix password sync = yes
   passwd program = /usr/bin/passwd %u
   passwd chat = *Enter\snew\s*\spassword:* %n\n *Retype\snew\s*\spassword:* %n\n *password\supdated\ssuccessfully* .
   pam password change = yes
   map to guest = bad user
   usershare allow guests = yes

[Webinterface]
   path =/var/www/html
   read only = no
   locking = no
   guest ok = yes
   force user = pi
``` 

Now you just need to copy the interface in /var/www/html

```
cd
git clone https://github.com/Telchar666/PHPio.git
mv /var/www/html/index.html /var/www/html/index.html.old
cp -r ~/PHPio/interface/* /var/www/html/
```

