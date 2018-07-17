#!/bin/bash

java -jar /home/jenkins/swarm-client-2.0-jar-with-dependencies.jar -name "slave" -password "iDirect" -username "admin" -master http://192.168.94.184:8080 -disableSslVerification  &> /home/jenkins/swarm-client.log &
