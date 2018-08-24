#!/bin/bash
cd /home/pi/ipfresh
/sbin/ifconfig eth0 &> ifconfig.txt
RASPBIAN_REMOTE=`curl "http://lightsail.cortorreal.com/utils/raspberrypi/rbi-ip.php?public"`
RASPBIAN_LOCAL=`/sbin/ifconfig eth0 | grep "inet addr" | /usr/bin/awk -F: '{print $2}' | /usr/bin/awk '{print $1}'`
RASPBIAN_POST_DATA="remote=$RASPBIAN_REMOTE&local=$RASPBIAN_LOCAL"
echo $RASPBIAN_POST_DATA > current_ip.txt
echo '--- printing file: ---'
cat current_ip.txt
echo '--- posting: ---'
curl -d $RASPBIAN_POST_DATA "http://lightsail.cortorreal.com/utils/raspberrypi/rbi-ip.php"

## 'en0' for 'eth0' ; 'inet addr' for 'inet' ;
## rm -rf send-ip.sh ;  wget http://lightsail.cortorreal.com/utils/raspberrypi/send-ip.sh ; chmod +x send-ip.sh ; ./send-ip.sh
## CRONTAB:  */5 * * * * /home/pi/ipfresh/send-ip.sh
