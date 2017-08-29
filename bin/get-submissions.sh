#!/bin/bash
cd ${0%/*}

# Retrieve assignment submission JSON data.
cd ../assignments/data/

COUNTER=1
while [ $COUNTER -lt 7 ]; do
  curl -O http://digm.drexel.edu/crs/IDM221/assignments/data/assignment_submission_{$COUNTER}.json
  let COUNTER=COUNTER+1
done

cd -
