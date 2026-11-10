@echo off
title IERIICH 13 - Cloudflare Public Tunnel
echo ========================================================
echo  IERIICH 13 Exhibition - Live Cloudflare Tunnel
echo ========================================================
echo.
echo Forwarding public traffic to http://ie-riich.test...
echo.
"C:\laragon\bin\cloudflared\cloudflared.exe" tunnel --url http://127.0.0.1:80 --http-host-header "ie-riich.test"
pause
