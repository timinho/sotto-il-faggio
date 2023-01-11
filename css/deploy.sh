#!/bin/bash
LOCAL_FOLDER="/Users/timinho/Webapps/sottoilfaggio"
REMOTE_FOLDER="/home/tim/sottoilfaggio"
USER="tim"
SERVER_IP="159.65.206.69"

cd $LOCAL_FOLDER

echo "Copying files to server"
rsync -avzr --delete $LOCAL_FOLDER/ $USER@$SERVER_IP:$REMOTE_FOLDER

echo "Website updated!"
