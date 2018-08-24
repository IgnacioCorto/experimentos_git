#!/bin/bash
ssh pi@`curl "http://lightsail.cortorreal.com/utils/raspberrypi/rbi-ip.php?last_public"`
