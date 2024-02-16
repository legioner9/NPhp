#!/bin/bash

cd "${REPO_PATH}"/NPhp/.d/.arb/man.arb/features.commandline.webserver.ram/.grot/exa.d/exa_1.d || plt_exit

kill -9 $(lsof -t -i:8000)
php -S localhost:8000 -t root.d &


