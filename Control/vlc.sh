raspivid -o - -t 999999 -hf -w 640 -h 480 -fps 25|cvlc -vvv stream:///dev/stdin --sout '#standard{access=http,mux=ts,dst=:8090}' :demux=h264
