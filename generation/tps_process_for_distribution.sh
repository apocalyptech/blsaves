#!/bin/bash
# vim: set expandtab tabstop=4 shiftwidth=4:

mkdir dist
for file in *.sav*
do
    echo "Processing $file"
    ~/git/borderlands2/tps_save_edit.py \
        --name "Mod Testing Convenience" \
        --copy-nvhm-missions \
        --unlock uvhm \
        --quiet \
        $file \
        dist/$file >> save_index_tps.txt
    RETVAL=$?
    if [ $RETVAL -ne 0 ]
    then
        exit
    fi
done

