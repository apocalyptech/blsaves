<?php // vim: set expandtab tabstop=4 shiftwidth=4:

function table_start()
{
    ?>
    <table class="savetable">
    <tr>
    <th>Filename</th>
    <th>In Map</th>
    <th>Active Missions</th>
    <th>Missions to Turn In</th>
    </tr>
    <?php
}

function table_end()
{
    echo "</table>\n";
}

