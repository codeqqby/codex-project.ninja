#!/usr/bin/env bash

sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl restart codex:*