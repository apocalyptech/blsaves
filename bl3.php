<?php
include('../../inc/apoc.php');
include('savefunc.php');
$page->set_title('Borderlands 3 Savegames (for mod testing)');
$page->add_css('blsaves.css');
$page->add_changelog('February 27, 2020', 'Initial post');
$page->add_changelog('April 3, 2020', 'Updated with DLC2 saves (Guns, Love, and Tentacles)');
$page->add_changelog('April 28, 2020', 'Added Revenge of the Cartels saves');
$page->add_changelog('June 14, 2020', 'Added Guardian Takedown saves');
$page->add_changelog('July 1, 2020', 'Added DLC3 (Bounty of Blood) saves');
$page->add_changelog('October 3, 2020', array(
    'Added DLC4 (Psycho Krieg) saves',
    'Fixed links to my mods',
));
$page->add_changelog('October 24, 2020', 'Fixed a few broken links and reworded a few sections');
$page->add_changelog('April 12, 2021', 'Added DLC5 (Designer\'s Cut) and DLC6 (Director\'s Cut) saves');
$page->add_changelog('September 6, 2022', 'Link to github for downloads instead of hosting locally');
$page->add_changelog('September 17, 2022', array(
    'Standardized levelling across all saves',
    'Re-initialized github repo from scratch',
));
$page->apoc_header();
?>

<p>
Other versions: 
<a href="index.php">Borderlands 2</a>,
<a href="tps.php">Borderlands: The Pre-Sequel</a>,
<a href="wl.php">Wonderlands</a>.
</p>

<p>
This is a collection of savegames which step through all quests, including
all DLCs, of Borderlands 3 (up through DLC6: Director's Cut).  Given the
nature of the saves, they're mostly just useful for someone working on
<a href="https://borderlandsmodding.com/bl3/">BL3 modding</a>, when testing out
mods which rely on a specific point in the game.
</p>

<p>
Characteristics of the savegames:
</p>

<ul>
<li>Character: Amara</li>
<li>Level 72, with Level 72 gear (at Mayhem 10, if appropriate)</li>
<li>Crader's EM-P5 for a weapon, and Transformer as a shield</li>
<li>No skill points allocated</li>
<li>Maximum SDUs and Ammo</li>
<li>Guardian Rank is disabled</li>
<li>Run through in Normal, but TVHM is unlocked too.  The game state has
    been copied to TVHM in each save, so you should be able to choose which
    one you want to use.</li>
</ul>

<p>
I was making use of the following mods during the run:
</p>

<ul>
<li><a href="https://github.com/BLCM/bl3mods/wiki/Super%20Buff%3A%20Crader%27s%20EM-P5">Crader's EM-P5 Super Buff</a> -
    Vastly buffs the damage, doesn't consume ammo, perfect accuracy and
    handling, and improves its already-good firerate.  When testing mods I
    like to be able to trivially destroy enemies, so this does the trick.</li>
<li><a href="https://github.com/BLCM/bl3mods/wiki/Super%20Buff%3A%20Transformer">Transformer Super Buff</a> -
    Likewise, this vastly buffs the capacity and recharge rate of the
    Transformer, and gives it a 0 recharge delay.  Again, when I'm testing
    mods I like to be basically invulnerable.</li>
<li><a href="https://github.com/BLCM/bl3mods/wiki/Early%20Bloomer">Early Bloomer</a> -
    Possibly required on the earlier savegames to use the gear I've got
    equipped, though possibly you wouldn't actually need it.</li>
</ul>

<p>
In terms of any other gear, I would occasionally pick up a grenade mod,
artifact, or COM which seemed reasonable to pick up, but I largely ignored
gear.  The char should be OP enough in Normal so that just the gun+shield
is plenty, even without the mods above.  Given the
<a href="https://github.com/apocalyptech/bl3-cli-saveedit">proliferation</a>
<a href="https://github.com/FromDarkHell/BL3SaveEditor">of BL3</a>
<a href="https://github.com/ZakisM/bl3_save_edit">save editors</a>, you should
be able to gear them up however you like without too much trouble.
</p>

<p>
The saves have not completed any of the level-based challenges, such
as the Typhon logs, Claptrap salvages, Zer0 Assassination targets, etc.
Most won't even be revealed on the map yet, as I was mostly just taking
the straightest path to the next objective.
</p>

<p>
And so, without further ado, here's the savegames.  You can download them all
in one zipfile from <a href="https://github.com/apocalyptech/blsaves">the
main github repo</a>, either through the
<a href="https://github.com/apocalyptech/blsaves/archive/refs/heads/main.zip">Download ZIP option</a>
or by cloning the repo.
</p>

<?php
table_start(false);
require_once('save_index_bl3.html');
table_end();
?>

<? $page->apoc_footer(); ?>
