#!/bin/bash

sudo echo "
[Unit]
Description=mydns.jp basic auth

[Service]
Type=simple
ExecStart=/home/luna/src/git/github/php/basic_auth/run.sh

[Install]
WantedBy=multi-user.target
" > /usr/lib/systemd/system/mydnsjp_auth.service

sudo echo "
[Unit]
Description=Execute auth of mydns.jp every 10 minutes

[Timer]
OnCalendar=*-*-* *:10/00:00
Unit=mydnsjp_auth.service

[Install]
WantedBy=multi-user.target
" > /usr/lib/systemd/system/mydns.jp_auth.timer

sudo systemctl daemon-reload
sudo systemctl enable mydnsjp_auth.timer
sudo systemctl start mydnsjp_auth.timer
