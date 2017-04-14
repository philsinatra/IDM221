#!/bin/bash
cd ${0%/*}

echo "Downloading media assets"
curl -LOk http://digm.drexel.edu/crs/IDM221/cdn/05-css/fonts.zip
curl -LOk http://digm.drexel.edu/crs/IDM221/cdn/08-media/media.zip
echo "Done"
echo ""
echo "Extracting assets"
mv fonts.zip ../examples/05-css/.
mv media.zip ../examples/08-media/.
cd ../examples/05-css/
unzip fonts.zip
rm fonts.zip
cd -
cd ../examples/08-media/
unzip media.zip
rm media.zip
echo "Done"
cd -
