#!/bin/bash
cd ${0%/*}

read -p "This action will reset all assignment submission info. Are you sure? " -n 1 -r
echo

if [[ $REPLY =~ ^[Yy]$ ]]
then
  for i in `seq 1 6`;
  do
    echo "" > ../assignments/data/assignment_submission_$i.json
  done
fi
