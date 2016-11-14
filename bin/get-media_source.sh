#!/bin/bash
cd ${0%/*}

echo "Downloading media assets"
curl -LOk http://digm.drexel.edu/crs/IDM221/cdn/week8/source_media.zip
echo "Done"
echo ""
echo "Extracting assets"
mv source_media.zip ~/Desktop/.
cd ~/Desktop
unzip source_media.zip
rm source_media.zip
open .
echo "Done"
cd -
