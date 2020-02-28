<?php // vim: set expandtab tabstop=4 shiftwidth=4:

function table_start($do_turn_in=true)
{
    ?>
    <table class="savetable">
    <tr>
    <th>Filename</th>
    <th>In Map</th>
    <th>Active Missions</th>
    <?php
    if ($do_turn_in)
    {
        ?>
    <th>Missions to Turn In</th>
        <?php
    }
    ?>
    </tr>
    <?php
}

function table_end()
{
    echo "</table>\n";
}

