# FLARE LINUX WEBSITE
*********************

https://flarelinux.xyz

## Run a Flare server node on your computer now!
*******************************************

### Requirements:

* Docker is installed on your computer: https://docs.docker.com/get-docker/,
* An additional 1 Gb of RAM for each Node server you wish to run on your computer,
* 20 Gb of storage (HDD or SSD),

### Follow these steps:

* Open a Bash or a ZSH terminal (Mac or Linux), or a Powershell CLI (Windows),
* Enter the following command in the terminal, and wait for the server to finish bootstrapping (approx. 5 minutes):

$ docker run -it --rm -p 9650:9650 --name my_flare_server asclinux/flarelinux:1.0.0-beta flare --coston

**PLEASE NOTE** : You can run the server in detached mode by adding the 'd' option, like so: docker run -dit [...]

### Start testing the Flare API:

* Use Postman (https://www.postman.com/) to start querying your server's API: https://youtu.be/NPvu6xJ7tsk?t=2447,
* Make sure the "P" and "C" chains are bootstrapped, before making other queries!

### Validate a real XRP transaction:

* Open ANOTHER Bash or a ZSH terminal (Mac or Linux), or ANOTHER Powershell CLI (Windows),
* Enter the following command:

$ docker exec -it my_flare_server /bin/bash

* Once you are inside the Docker container, enter these commands to validate an XRP transaction:

$ cd /root/flare/client

$ $( ./bridge.sh xrp ) &

$ node --no-warnings prove xrp FFB44382D074CB37B63AC9D3EB2D829C1D1FE4D54DC1A0BCC1D23BAE18D53272 2>/dev/null

* Once you are done testing, you can exit the container by typing 'exit'.
* To stop the Flare server, please enter the following command:

$ docker stop my_flare_server

# Enjoy your new Flare server!
