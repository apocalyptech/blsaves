<?php
include('../../inc/apoc.php');
include('savefunc.php');
$page->set_title('Borderlands: The Pre-Sequel Savegames (for mod testing)');
$page->add_css('blsaves.css');
$page->add_changelog('November 16, 2019', 'Initial post');
$page->add_changelog('September 17, 2022', 'Re-initialized github repo from scratch');
$page->apoc_header();
?>

<p>
Other versions:
<a href="index.php">Borderlands 2</a>,
<a href="bl3.php">Borderlands 3</a>,
<a href="wl.php">Wonderlands</a>.
</p>

<p>
Now that Borderlands 3 is out and practically everyone's moved on from
modding BL2/TPS, I figure it's a great time to release an archive of
savegames which might've been useful to modders a year or two ago.  This
is it!
</p>

<p>
This is a collection of savegames which step through all quests, including
all DLCs, of Borderlands: The Pre-Sequel.  I'd started archiving these when
I was putting together my <a href="https://github.com/BLCM/BLCMods/tree/master/Pre%20Sequel%20Mods/Apocalyptech/TPS%20Mega%20TimeSaver%20XL">TPS Mega TimeSaver XL</a>
mod, because I needed an easy way to hop backwards in time pretty trivially
to test various animation sequences.  I figured since I was doing that
anyway, I may as well step through quests and things more carefully, too.
These TPS saves especially get very fine-grained in a few parts, such as
the Felicity construction sequence, since there were so many animations
to go through.
</p>

<p>
So basically, if you're looking to work on a mod which alters some specific
part of the game, and you don't have a savegame already near that point,
this archive could help you get right there with no hassle.
</p>

<p>
These TPS saves were all run through in Normal mode, with Aurelia, at level
70.  I was making use of the following mods during my runthrough:
</p>

<ul>
<li><a href="https://github.com/BLCM/BLCMods/tree/master/Pre%20Sequel%20Mods/Apocalyptech/mods_for_testing_mods/Proletarian%20Revolution%20Super%20Buff">Proletarian Revolution Super Buff</a> -
    The savegames have a collection of five Proletarian Revolutions, and with
    that mod, they'll one-shot practically anything in the game.  Since the
    mod I was working on didn't affect combat at all, I wanted to be able to
    just power through any battle as quickly as possible.</li>
<li><a href="https://github.com/BLCM/BLCMods/tree/master/Pre%20Sequel%20Mods/Apocalyptech/mods_for_testing_mods/Reogenator%20Super%20Buff">Reogenator Super Buff</a> -
    Likewise, the savegames will have a Reogenator shield, which in conjunction
    with that mod will make you basically invulnerable.  Again, I wasn't
    combat-focused, so getting past fights quickly was a goal.</li>
</ul>

<p>
Once I was through collecting all the saves, I did some finagling with a 
save editor to duplicate mission state from NVHM into both TVHM and UVHM,
so all of these saves are at the exact same spot in the game in PT1, PT2,
and PT3.  Note that the level of any active mission, when loading into TVHM
or UVHM, would still be set to their value in Normal, but any new mission you
pick up from there should be scaled properly.
</p>

<p>
And so, without further ado, here's the savegames.  You can download them all
in one zipfile from here: <tt><a href="tps/tps_all_saves.zip">tps_all_saves.zip</a></tt>,
or hand-pick from the table below.  Alternatively, you can clone the github
repo which also stores all these saves: <a href="https://github.com/apocalyptech/blsaves">apocalyptech/blsaves</a>.
</p>

<?php
table_start();
require_once('save_index_tps.html');
table_end();
?>

<? $page->apoc_footer(); ?>
