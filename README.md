Pharaoh Tools Toys and Templates
--------------------------------


To run any of these, first [install Pharaoh Tools](http://pharaohtools.com/install "install Pharaoh Tools"). Then, go to
the directory containing this repo at the command line

    git clone https://github.com/PharaohTools/PharaohSnippets.git
    cd PharaohSnippets


Hello World

    ptconfigure auto x --af=hello_world/hello_world.dsl.php



Infrastructure
--------------------------------
Create a new single server on Digital Ocean

    ptconfigure auto x --af=create_a_new_server_digitalocean/new-server.dsl.php


Create a new single server on Rackspace

    ptconfigure auto x --af=create_a_new_server_rackspace/new-server.dsl.php


Create a new single server on AWS

Create a Load Balancer on Rackspace

Create a Manageable Domain on Rackspace

Create a DNS Record on Rackspace



Development
------------------------------

Create a Virtual Machine

Save a Virtual Machine

Package and Deploy a Virtual Machine

Use a Packaged Virtual Machine



Configuration
------------------------------

Kill a Process

    ptconfigure auto x --af=kill_a_process/kill_process.dsl.php


Copy a file locally

    ptconfigure auto x --af=copy/copy.dsl.php


SFTP a file to a remote

Install a templated file

Create a New SSH Key

Show Basic Node Information

    ptconfigure auto x --af=system_detection/basic-info.dsl.php


Show Detailed Node Information


Ping a Machine

    ptconfigure auto x --af=ping/ping.dsl.php


Test if a port is responding

    ptconfigure auto x --af=port/port-responding.dsl.php


See which process is running on a port

    ptconfigure auto x --af=port/port-process.dsl.php


Ensure a Service is running

    ptconfigure auto x --af=service_running/service-running.dsl.php


Ensure a Service will run after reboot

    ptconfigure auto x --af=service_reboots/service-reboots.dsl.php




Deployment
------------------------------

Turn a directory into a Website

Check hostname


