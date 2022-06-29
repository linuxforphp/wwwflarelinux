# FLARE LINUX WEBSITE
*********************

https://flarelinux.xyz

## Run a Flare server node on your computer now!
*******************************************

### Requirements:

* Docker is installed on your computer: https://docs.docker.com/get-docker/,
* An additional 8 Gb of RAM for each Node server you wish to run on your computer,
* 100 Gb of storage (HDD or SSD),

### Follow these steps:

* Open a Bash or a ZSH terminal (Mac or Linux), or a Powershell CLI (Windows),
* Enter the following command in the terminal, and wait for the server to finish bootstrapping (approx. 5 minutes):

$ docker run -dit --rm -e FLARE_BIND_ADDRESS=0.0.0.0 -p 9650:9650 --name my_flare_server asclinux/flarelinux:1.0.0 flare --coston

**PLEASE NOTE** : You can run the server in detached mode by adding the 'd' option, like so: docker run -dit [...]

### Start testing the Flare API:

* Use Postman (https://www.postman.com/) to start querying your server's API: https://youtu.be/NPvu6xJ7tsk?t=2447,
* Make sure the "C" chain is bootstrapped, before making other queries!
* Once you are done testing, you can exit the container by typing 'exit'.
* To stop the Flare server, please enter the following command:

$ docker rm -f my_flare_server

# Enjoy your new Flare server!
