#!/bin/bash

echo "Inside the entrypoint file"

postfix start-fg

echo "starting postfix"
exec $@


wait -n