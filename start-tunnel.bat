@echo off
title IERIICH 13 - Cloudflare Public Tunnel
echo ========================================================
echo  IERIICH 13 Exhibition - Live Cloudflare Tunnel
echo ========================================================
echo.
echo Starting Laravel app server in the background...
start /B php artisan serve --host=127.0.0.1 --port=8000 >nul 2>&1
timeout /t 2 /nobreak >nul
echo.
echo Connecting Cloudflare Tunnel to port 8000...
echo.
"C:\laragon\bin\cloudflared\cloudflared.exe" tunnel --url http://127.0.0.1:8000
pause
