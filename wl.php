<?php
include('../../inc/apoc.php');
include('savefunc.php');
$page->set_title("Tiny Tina's Wonderlands Savegames (for mod testing)");
$page->add_css('blsaves.css');
$page->add_changelog('September 17, 2022', 'Initial post');
$page->apoc_header();
?>

<p>
Other versions: 
<a href="index.php">Borderlands 2</a>,
<a href="tps.php">Borderlands: The Pre-Sequel</a>,
<a href="bl3.php">Borderlands 3</a>.
</p>

<p>
This is a collection of savegames which step through all quests, including
all DLCs, of Tiny Tina's Wonderlands.  Given the nature of the saves, they're
mostly just useful for someone working on
<a href="https://borderlandsmodding.com/wl/">Wonderlands modding</a>, when
testing out mods which rely on a specific point in the game.
</p>

<p>
Characteristics of the savegames:
</p>

<ul>
<li>Character Class: Stabbomancer</li>
<li>Manual Transmission for a weapon, Transistor as a shield, and Goblin
    Pickaxe as melee weeapon</li>
<li>Items at character level, as "Ascended" gear</li>
<li>No skill/hero points allocated</li>
<li>Maximum SDUs and Ammo</li>
<li>Chaos Mode is unlocked but not active</li>
</ul>

<p>
Unlike in past games, enemies in Wonderlands always level up to your
character's level, so there's no real point in setting the savegames to
maximum level, as I've done on the other savegame archives here.  Instead,
the character starts out at level 1 and is allowed to level up normally
throughout the game.  The Ascended gear should make combat pretty trivial,
though, even without the use of mods.  Regardless, I'd recommend making
use of these to make mod-testing as trivial as possible:
</p>

<ul>
<li><a href="https://github.com/BLCM/wlmods/wiki/Super%20Buff%3A%20Manual%20Transmission">Super Buff: Manual Transmission</a> -
    Vastly buffs the damage, doesn't consume ammo, perfect accuracy and
    handling, and improves its already-good firerate.  When testing mods I
    like to be able to trivially destroy enemies, so this does the trick.</li>
<li><a href="https://github.com/BLCM/wlmods/wiki/Super%20Buff%3A%20Goblin%20Pickaxe">Super Buff: Goblin Pickaxe</a> -
    Likewise, vastly buffs the damage, and improves the attack speed.  This
    isn't super necessary given the Manual Transmission buff, but it felt
    nice to have anyway.</li>
<li><a href="https://github.com/BLCM/wlmods/wiki/Super%20Buff%3A%20Transistor">Super Buff: Transistor</a> -
    Likewise, this vastly buffs the capacity and recharge rate of the
    Transistor, and gives it a 0 recharge delay.  Again, when I'm testing
    mods I like to be basically invulnerable.</li>
<li><a href="https://github.com/BLCM/wlmods/wiki/Early%20Bloomer">Early Bloomer</a> -
    Possibly required on the earlier savegames to use the gear I've got
    equipped, though possibly you wouldn't actually need it.</li>
</ul>

<p>
In terms of other gear, I did keep around the first instance of elemental gear
that I got while running through the game -- one for each element.  There's no
point in the game which requires any specific damage type, and on my runthrough
I never used them, but they'll get levelled to the character regardless.  The
rest of the character gear (armor, rings, amulet, spell, etc) are just the first
instances of those that I picked up.
</p>

<p>
The saves have not completed any of the level-based challenges, such
as Rune Switch Puzzles, Poetry Pages, Lost Marbles, etc.  Most won't even be
revealed on the map yet, as I was mostly just taking the straightest path to the
next objective.  The saves <em>do</em> collect all the shrine pieces on the
Overworld map, though.
</p>

<p>
And so, without further ado, here's the savegames.  You can download them all
in one zipfile from <a href="https://github.com/apocalyptech/blsaves">the
main github repo</a>, either through the
<a href="https://github.com/apocalyptech/blsaves/archive/refs/heads/main.zip">Download ZIP option</a>
or by cloning the repo.
</p>

<?php
table_start(false, true);
require_once('save_index_wl.html');
table_end();
?>

<? $page->apoc_footer(); ?>
