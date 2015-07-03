#!/bin/bash

echo "
[Unit]
Description=mydns.jp basic auth

[Service]
Type=simple
ExecStart=/home/luna/src/git/github/php/basic_auth/run.sh

[Install]
WantedBy=multi-user.target
" > /usr/lib/systemd/system/mydnsjp_auth.service

echo "
[Unit]
Description=Execute auth of mydns.jp every 10 minutes

[Timer]
OnCalendar=*-*-* *:10/10:00
Unit=mydnsjp_auth.service

[Install]
WantedBy=multi-user.target
" > /usr/lib/systemd/system/mydnsjp_auth.timer

systemctl daemon-reload
systemctl enable mydnsjp_auth.timer
systemctl start mydnsjp_auth.timer
