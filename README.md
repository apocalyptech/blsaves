BL2/TPS Savegames For Mod Testing
=================================

Now that Borderlands 3 is out and practically everyone's moved on from
modding BL2/TPS, I figure it's a great time to release an archive of
savegames which might've been useful to modders a year or two ago.  This
is it!

This is a collection of savegames which step through all quests, including
all DLCs, of Borderlands 2 and Borderlands: The Pre-Sequel.  I'd started
archiving these when I was putting together my
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
pick up from there should be scaled properly.

The canonical URL for the web frontend of this is: http://apocalyptech.com/games/bl-saves

Generation
----------

The process for generating the archive is a *bit* hokey.  Obviously just
collecting the raw savegames is easy enough by copying 'em out of the
savegame dir at appropriate times while playing the game.

After collecting the full set of savegames, they need to be processed to
unlock UVHM, copy over NVHM mission states to TVHM/UVHM, and a few other
tweaks.  I've done that with
[bl2_process_for_distribution.sh](generation/bl2_process_for_distribution.sh) and
[tps_process_for_distribution.sh](generation/tps_process_for_distribution.sh),
which make use of "my" [BL2/TPS CLI save editor](https://github.com/apocalyptech/borderlands2) *(really I just maintain a fork of someone else's work)*.
I'd also put some inactive code in there to generate a `save_index.txt` file
while looping through the files, which will contain info about what map
the file is currently in, all active missions, etc.  You can find that bit
around [line 1423](https://github.com/apocalyptech/borderlands2/blob/master/borderlands/savefile.py#L1423)
in that project; you'll have to update `if False:` to `if True:` to actually
enable that bit.  It's a bit hokey.

The raw save indexes can be found in here as well: [save_index_bl2.txt](generation/save_index_bl2.txt) and
[save_index_tps.txt](generation/save_index_tps.txt).  Note that I do also
tweak those manually, slightly - For BL2, I convert the initial `None`
value for the last-seen transporter to `GlacialIgloo`.  For TPS I convert the
`None` values on the first few saves to `MoonShotIntroToAirstrip`.

Once that's done, I've got processed save files ready for distribution, and
a couple files which describe the savegames in more detail.  I use a sandbox
script in my [FT/BLCMM Explorer](https://github.com/apocalyptech/ft-explorer)
project named [gen_save_index.py](https://github.com/apocalyptech/ft-explorer/blob/master/sandbox/gen_save_index.py)
to turn that "raw" text file into a prettier HTML table which I can then
embed on the web easily.

So yeah, that's it!
