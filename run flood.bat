@echo off

REM Run XAMPP
cd /d C:\xampp
start xampp-control.exe
start apache_start.bat
start mysql_start.bat

REM Run WEB APP 
cd /d C:\Users\Aloy\Desktop\RFMDIv1\rfmdi
start "" php artisan serve --host=0.0.0.0 --port=8000   

REM Run OCR 
cd /d C:\Users\Aloy\Desktop\RFMDIv1
start include_jupyter.bat

REM Run VLC Stream
start vlc_start_stream_ipcam.bat

REM Open default browser to localhost:8000
start http://localhost:8000

exit
