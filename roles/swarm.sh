#!/bin/bash
# This file is used to create a jenkins slave with the swarm client with the username and password
# for the server as mentioned
java -jar /home/jenkins/swarm-client-2.0-jar-with-dependencies.jar -name "slave" -password "password" -username "admin" -master server "server-ip" -disableSslVerification  &> /home/jenkins/swarm-client.log &
