#!/bin/bash
cd ${0%/*}

echo "Downloading media assets"
curl -LOk http://digm.drexel.edu/crs/IDM221/cdn/week5/fonts.zip
curl -LOk http://digm.drexel.edu/crs/IDM221/cdn/week8/media.zip
echo "Done"
echo ""
echo "Extracting assets"
mv fonts.zip ../examples/week5/.
mv media.zip ../examples/week8/.
cd ../examples/week5/
unzip fonts.zip
rm fonts.zip
cd -
cd ../examples/week8/
unzip media.zip
rm media.zip
echo "Done"
cd -
