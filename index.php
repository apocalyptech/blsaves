<?php
include('../../inc/apoc.php');
include('savefunc.php');
$page->set_title('Borderlands 2 Savegames (for mod testing)');
$page->add_css('blsaves.css');
$page->add_changelog('November 16, 2019', 'Initial post');
$page->add_changelog('September 17, 2022', 'Re-initialized github repo from scratch');
$page->apoc_header();
?>

<p>
Other versions:
<a href="tps.php">Borderlands: The Pre-Sequel</a>,
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
all DLCs, of Borderlands 2.  I'd started archiving these when I was putting
together my <a href="https://github.com/BLCM/BLCMods/tree/master/Borderlands%202%20mods/Apocalyptech/BL2%20Mega%20TimeSaver%20XL">BL2 Mega TimeSaver XL</a>
mod, because I needed an easy way to hop backwards in time pretty trivially
to test various animation sequences.  I figured since I was doing that
anyway, I may as well step through quests and things more carefully, too.
</p>

<p>
So basically, if you're looking to work on a mod which alters some specific
part of the game, and you don't have a savegame already near that point,
this archive could help you get right there with no hassle.
</p>

<p>
These BL2 saves were all run through in Normal mode, with Maya, at level
80.  UVHM/OP10 is unlocked and her gear is level 90.  I was making use
of the following mods during my runthrough:
</p>

<ul>
<li><a href="https://github.com/BLCM/BLCMods/tree/master/Borderlands%202%20mods/Apocalyptech/mods_for_testing_mods/Shredifier%20Super%20Buff">Shredifier Super Buff</a> -
    The savegames have a collection of four Shredifiers, and with that mod,
    they'll one-shot practically anything in the game.  Since the mod I was
    working on didn't affect combat at all, I wanted to be able to just power
    through any battle as quickly as possible.</li>
<li><a href="https://github.com/BLCM/BLCMods/tree/master/Borderlands%202%20mods/Apocalyptech/mods_for_testing_mods/Neogenator%20Super%20Buff">Neogenator Super Buff</a> -
    Likewise, the savegames will have a Neogenator shield, which in conjunction
    with that mod will make you basically invulnerable.  Again, I wasn't
    combat-focused, so getting past fights quickly was a goal.</li>
<li><a href="https://github.com/BLCM/BLCMods/blob/master/Borderlands%202%20mods/Aaron0000/Miscellaneous/EarlierMissions.txt">Aaron0000's Earlier Missions</a> -
    Potentially the most controversial choice, given that I'd intended for
    these saves to be globally useful, but this mod unlocks missions as soon
    as possible, rather than waiting for a sometimes arbitrary-feeling point
    in the plot.  For instance, Terramorphous is unlocked as soon as you get
    to Thousand Cuts, and the first few Monster Mash missions are available
    as soon as you get to Sanctuary.</li>
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
in one zipfile from here: <tt><a href="bl2/bl2_all_saves.zip">bl2_all_saves.zip</a></tt>,
or hand-pick from the table below.  Alternatively, you can clone the github
repo which also stores all these saves: <a href="https://github.com/apocalyptech/blsaves">apocalyptech/blsaves</a>.
</p>

<?php
table_start();
require_once('save_index_bl2.html');
table_end();
?>

<? $page->apoc_footer(); ?>
