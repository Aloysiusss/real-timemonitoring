 start "" "C:\Program Files\VideoLAN\VLC\vlc.exe" --loop -I dummy rtsp://admin:admin123456@172.20.10.3:8554/profile0 :sout=#transcode{vcodec=VP80,vb=800,scale=Auto,acodec=vorb,ab=128,channels=2,samplerate=44100,scodec=none}:http{mux=webm,dst=:8080/} :no-sout-all :sout-keep

