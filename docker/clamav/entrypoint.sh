#!/bin/sh


# Start Clamv
freshclam -d &
clamsmtpd &
clamd  --foreground   


