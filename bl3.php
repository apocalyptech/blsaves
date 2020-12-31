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
$page->apoc_header();
?>

<p>
Other versions: 
<a href="index.php">Borderlands 2</a>,
<a href="tps.php">Borderlands: The Pre-Sequel.</a>
</p>

<p>
This is a collection of savegames which step through all quests, including
all DLCs, of Borderlands 3 (up through DLC4: Psycho Krieg and the Fantastic Fustercluck).  Given the
nature of the saves, they're mostly just useful for someone working on
<a href="http://borderlandsmodding.com/bl3/">BL3 modding</a>, when testing out
mods which rely on a specific point in the game.
</p>

<p>
These saves were all run through in Normal mode, with Amara.  No skill
points were allocated during the run.  The saves will have Guardian Rank
disabled.  Amara will have a Crader's EM-P5 for a weapon,
and Transformer as shield.  Max level ammo and backpack SDUs have been
added in as well, though the max SDU count for a few have risen over time,
so the earlier saves are no longer necessarily maxed.  TVHM has been
unlocked for all saves, and the TVHM gamestate should be identical to
Normal, so you should be able to choose whichever one you want and be at
the same place in the game.
</p>

<p>
In terms of levelling:
</p>

<ul>
<li>Through DLC1, the saves were edited so that Amara is at level 53,
    and the EM-P5 and Transformer are also be level 53.</li>
<li>Through DLC2, the saves are at level 57, though the EM-P5 and
    Transformer are still level 53.</li>
<li>Through the Revenge of the Cartels, all gear is level 57, and
    the EM-P5 has the Mayhem 10 part.</li>
<li>Through DLC3, Amara and her gear are at level 60.</li>
<li>Through DLC4, Amara and her gear are at level 65.</li>
</ul>

<p>
I was making use of the following mods during the run:
</p>

<ul class="spaced-ul">
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
<a href="https://github.com/sandsmark/borderlands3-save-editor">of</a>
<a href="http://www.bl3editor.com/">BL3</a>
<a href="https://github.com/cfi2017/bl3-save">save editors</a>, you should
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
in one zipfile from here: <tt><a href="bl3/bl3_all_saves.zip">bl3_all_saves.zip</a></tt>,
or hand-pick from the table below.  Alternatively, you can clone the github
repo which also stores all these saves: <a href="https://github.com/apocalyptech/blsaves">apocalyptech/blsaves</a>.
</p>

<?php
table_start(false);
require_once('save_index_bl3.html');
table_end();
?>

<? $page->apoc_footer(); ?>
