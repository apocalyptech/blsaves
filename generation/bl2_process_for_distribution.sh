#!/bin/bash
# vim: set expandtab tabstop=4 shiftwidth=4:

mkdir dist
for file in *.sav*
do
    echo "Processing $file"
    ~/git/borderlands2/bl2_save_edit.py \
        --name "Mod Testing Convenience" \
        --level 80 \
        --itemlevels 90 \
        --copy-nvhm-missions \
        --unlock uvhm \
        --oplevel 10 \
        --quiet \
        $file \
        dist/$file >> save_index_bl2.txt
    RETVAL=$?
    if [ $RETVAL -ne 0 ]
    then
        exit
    fi
done

