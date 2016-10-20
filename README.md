Pharaoh Tools Toys and Templates
--------------------------------



Installation
--------------------------------
To run any of these, first [install Pharaoh Tools](http://pharaohtools.com/install "install Pharaoh Tools"). Then, go to
 the command line, clone this repository, and change into that directory.

    git clone https://github.com/PharaohTools/PharaohSnippets.git
    cd PharaohSnippets


Usage Examples
--------------------------------

Hello World

    ptconfigure auto x --af=hello_world/hello_world.dsl.php

Using a Variable in a DSL

    ptconfigure auto x --af=variables/variables.dsl.php --vars=variables/my_variable_file.php

Alternate Variable Syntax in a DSL

    ptconfigure auto x --af=variables/alternate-syntax.dsl.php --vars=variables/my_variable_file.php

Using a Parameter in a DSL

    ptconfigure auto x --af=parameters/parameters.dsl.php --my-test-parameter="Value From a Parameter"



Infrastructure
--------------------------------
Create a new single server on Digital Ocean

    ptconfigure auto x --af=create_a_new_server_digitalocean/new-server.dsl.php


Create a new single server on Rackspace

    ptconfigure auto x --af=create_a_new_server_rackspace/new-server.dsl.php


Create a new single server on AWS

Create a Load Balancer on Rackspace

Create a Manageable Domain on Rackspace

    ptconfigure auto x --af=ensure_domin_record_rackspace/ensure_domain.dsl.php


Create a DNS Record on Rackspace

    ptconfigure auto x --af=ensure_dns_record_rackspace/ensure_dns_record.dsl.php



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


SFTP put a file to a remote

    ptconfigure auto x --af=sftp/sftp-put-environment.dsl.php


SFTP get a file from a remote

    ptconfigure auto x --af=sftp/sftp-get-environment.dsl.php


Install a templated file

    ptconfigure auto x --af=templating/install-file.dsl.php


Create a New SSH Key without Passphrase

    ptconfigure auto x --af=system_detection/basic-info.dsl.php


Create a New SSH Key with Passphrase

    ptconfigure auto x --af=system_detection/basic-info.dsl.php


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


Enable Firewall for all but HTTP, HTTPS and SSH

    ptconfigure auto x --af=webserver_firewall/set_firewall.dsl.php




Deployment
------------------------------

Turn a directory into a Website

Check hostname


