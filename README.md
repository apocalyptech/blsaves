BL2/TPS/BL3/WL Savegames For Mod Testing
========================================

This is a collection of savegames which step through all quests, including
all DLCs, of Borderlands 2, Borderlands: The Pre-Sequel, Borderlands 3,
and Tiny Tina's Wonderlands.
I'd started archiving these when I was putting together my
[BL2 Mega TimeSaver XL](https://github.com/BLCM/BLCMods/tree/master/Borderlands%202%20mods/Apocalyptech/BL2%20Mega%20TimeSaver%20XL) and
[TPS Mega TimeSaver XL](https://github.com/BLCM/BLCMods/tree/master/Pre%20Sequel%20Mods/Apocalyptech/TPS%20Mega%20TimeSaver%20XL) mods,
because I needed an easy way to hop backwards in time pretty trivially
to test various animation sequences.  I figured since I was doing that
anyway, I may as well step through quests and things more carefully, too.

So basically, if you're looking to work on a mod which alters some specific
part of the game, and you don't have a savegame already near that point,
this archive could help you get right there with no hassle.

Once I was through collecting all the saves, I did some finagling with a 
save editor to duplicate mission state from NVHM into both TVHM and UVHM,
so all of these saves are at the exact same spot in the game in PT1, PT2,
and PT3.  Note that the level of any active mission, when loading into TVHM
or UVHM, would still be set to their value in Normal, but any new mission you
pick up from there should be scaled properly.  Obviously for Borderlands 3,
the mission state is only duplicated to TVHM, and Wonderlands doesn't even
have that concept.

The canonical URL for the web frontend of this is: https://apocalyptech.com/games/bl-saves

What Happened To The Repo?
--------------------------

If anyone had cloned this repo prior to September 17, 2022, you may notice
that your checkout no longer matches the github repo and can't be updated.
Basically, over the lifetime of generating the save archive for Borderlands
3, the maximum level for characters was raised a couple of times, and also my
save editor acquired improvements which changed how I processed those savegames
a bit.  Git isn't really the greatest place for binary data, though, and BL3/WL
saves are quite large compared to BL2/TPS.  Updating all the older BL3
savegames to match my "final" form would have about doubled the repo size and
taken up a lot more hard drive space than necessary.

Since it's unlikely anyone else has ever bothered checking this out directly,
I figured I'd just wipe the repo and re-import everything fresh, once I got
a Wonderlands save archive ready to go.  So, that's what I did.  The repo is
dead, long live the repo.

(And yeah, github still isn't really the proper place to be storing these, but
I'm at a bit of a loss for a *better* place, since I don't really want to store
this volume of data on my own host (for BL3/WL, anyway), and I don't want to
worry about data getting taken offline without warning.)

Generation for BL2/TPS
----------------------

The process for generating the archive is a *bit* hokey.  Obviously just
collecting the raw savegames is easy enough by copying 'em out of the
savegame dir at appropriate times while playing the game.

After collecting the full set of savegames, they need to be processed to
unlock UVHM, copy over NVHM mission states to TVHM/UVHM, and a few other
tweaks.  I've done that with
[`bl2_process_for_distribution.sh`](generation/bl2_process_for_distribution.sh) and
[`tps_process_for_distribution.sh`](generation/tps_process_for_distribution.sh),
which make use of "my" [BL2/TPS CLI save editor](https://github.com/apocalyptech/borderlands2)
*(really I just maintain a fork of someone else's work)*.
I'd also put some inactive code in there to generate a `save_index.txt` file
while looping through the files, which will contain info about what map
the file is currently in, all active missions, etc.  You can find that bit
around [line 1423](https://github.com/apocalyptech/borderlands2/blob/master/borderlands/savefile.py#L1423)
in that project; you'll have to update `if False:` to `if True:` to actually
enable that bit.  It's a bit hokey.

The raw save indexes can be found in here as well: [`save_index_bl2.txt`](generation/save_index_bl2.txt) and
[`save_index_tps.txt`](generation/save_index_tps.txt).  Note that I do also
tweak those manually, slightly - For BL2, I convert the initial `None`
value for the last-seen transporter to `GlacialIgloo`.  For TPS I convert the
`None` values on the first few saves to `MoonShotIntroToAirstrip`.

Once that's done, I've got processed save files ready for distribution, and
a couple files which describe the savegames in more detail.  I use a sandbox
script in my [FT/BLCMM Explorer](https://github.com/apocalyptech/ft-explorer)
project named [`gen_save_index.py`](https://github.com/apocalyptech/ft-explorer/blob/master/sandbox/gen_save_index.py)
to turn that "raw" text file into a prettier HTML table which I can then
embed on the web easily.

So yeah, that's it!

Generation for BL3/WL
---------------------

Generation for BL3 and WL is actually done a bit more simply than in BL2/TPS,
via a custom command in my [BL3 CLI SaveEdit](https://github.com/apocalyptech/bl3-cli-saveedit/)
and [TTWL CLI SaveEdit](https://github.com/apocalyptech/ttwl-cli-saveedit/)
apps.  There's a utility in there named `bl3-process-archive-saves` (or
`ttwl-process-archive-saves`) which does basically everything all at once:
massaging the savegame data into exactly the right state, and outputting the
HTML necessary to add to the table on the public website.  You can use
`-f`/`--filename` to have it operate on a single file, or `-d`/`--directory` to
have it process a whole directory of saves.  `-o`/`--output` controls the
directory where it'll store the updated savegames, and to generate the HTML
file, you'd use `-i`/`--info`.

