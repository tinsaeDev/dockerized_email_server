#!/bin/sh


# Start Clamv
freshclam -d &
sleep 60 && clamav-milter &
clamd  --foreground   


