# docker-ubuntu-apache-php
This Dockerfile creates a simple container for running Apache/PHP using the latest Ubuntu base, and copies an index.php file into the web root directory.  The file display the client IP, container ID, and physical host ID passed as an environment variable at runtime.  

## Usage
Build the container image from current directory and give it a name.  In this example 'webserver'
- `docker build -t webserver:1.0 .`  

Run container and detach from terminal to run container in background with specific port mapped to the exposed port 80.  Additionally pass the hostname of the underlying server running docker as an environment variable.  
- ```docker run -d -e HOST_HOSTNAME=`hostname` -p 8888:80 --name=webserver webserver:1.0```

If you need to make changes to the index.php you can easily copy updates into the running container. 
- `docker cp index.php webserver:/var/www/html`
