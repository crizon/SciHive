1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
92
93
94
95
96
97
98
99
100
101
102
103
104
105
106
107
108
109
110
111
112
113
114
115
116
117
118
119
120
121
122
123
124
125
126
127
128
129
130
131
132
133
134
135
136
137
138
139
140
141
142
143
144
145
146
147
148
149
150
151
152
153
154
155
156
157
158
159
160
161
162
163
164
165
166
167
168
169
170
171
172
173
174
175
176
177
178
179
180
181
182
183
184
185
186
187
188
189
190
191
192
193
194
195
196
197
198
199
200
201
202
203
204
205
206
207
208
209
210
211
212
213
214
215
216
217
218
219
220
221
222
223
224
225
226
227
228
229
230
231
232
233
234
235
236
237
238
239
240
241
242
243
244
245
246
247
248
249
250
251
252
253
254
255
256
257
258
259
260
261
262
263
264
265
266
267
268
269
270
271
272
273
274
275
276
277
278
279
280
281
282
283
284
285
286
287
288
289
290
291
292
293
294
295
296
297
298
299
300
301
302
303
304
305
306
307
308
309
310
311
312
313
314
315
316
317
318
319
320
321
322
323
324
325
326
327
328
329
330
331
332
333
334
335
336
337
338
339
340
341
342
343
344
345
346
347
348
349
350
351
352
353
354
355
356
357
358
359
360
361
362
363
364
365
366
367
368
369
370
371
372
373
374
375
376
377
378
379
380
381
382
383
384
385
386
387
388
389
390
391
392
393
394
395
396
397
398
399
400
401
402
403
404
405
406
407
408
409
410
411
412
413
414
415
416
417
418
419
420
421
422
423
424
425
426
427
428
429
430
431
432
433
434
435
436
437
438
439
440
441
442
443
444
445
446
447
448
449
450
451
452
453
454
455
456
457
458
459
460
461
462
463
464
465
466
467
468
469
470
471
472
473
474
475
476
477
478
479
480
481
482
483
484
485
486
487
488
489
490
491
492
493
494
495
496
497
498
499
500
501
502
503
504
505
506
507
508
509
510
511
512
513
514
515
516
517
518
519
520
521
522
523
524
525
526
527
528
529
530
531
532
533
534
535
536
537
538
539
540
541
542
543
544
545
546
547
548
549
550
551
552
553
554
555
556
557
558
559
560
561
562
563
564
var Imported = Imported || {} ;
Imported.TS_Scripts = true;
 
var TS = TS || {};
TS.Scripts = TS.Scripts || {};
 
/*:
@title Thasuki Scripts
@version Ver. 4
@plugindesc Supplies scrip calls for some specific functionalities. Item
trading and party petrification methods are written with the assumption
that the game dev is using the HimeWorks PartyManager Plugin.
 
THERE'S GOOD MEAT HERE!
 
@author Thasuki01
@help
-------------------------------------------------------------------------
 
===== Terms of use =====
 
This plugin is free for commercial and non-commercial use, but requires
the user to give credit to the author, and send some feedback to 
Thasuki01 at gmail.com.
 
The HimeWorks SideviewActorEnemy plugin is required for sideview enemies
to be affected graphically for the petrification state.
 
Youtube https://wwww.youtube.com/Suboshi3
 
===== List of available methods =====
 
- helloWorld()
- autoSave()
- loadSave()
- autoLoadSave()
- killSaves()
- killCurrentSave()
- itemTrade([[itemId, quantity],...],[[itemId, quantity],...], multipleOfTrade)
- petrificationCheck()
- randomToggleSwitch()
- getPlayerPos()
- checkPlayerPos()
 
===== Plugin Parameters =====
 
- TradeNPCVar
 
===== To call the scripts =====
 
In your event, call the method by adding a new script call and type the
method name with any parameters they need.
 
For example:
 
autoSave();
itemTrade([[1,1],[2,1]],[[3,1],[4,1]], 2);
 
===== Method Descriptions =====
 
helloWorld() - is a simple sanity check method that prints "Hello World"
to the command console.
  
autoSave() - automatically saves the games progress using the current
loaded save or saves into the next available save slot if a new game has
been started.
 
loadSave() - loads the last used save slot. Best used when using the
HimeWorks custom GameOver events plugin, and calling the method on the
gameover map.
 
autoLoadSave() - automatically loads the last used save file without prompts
 
killSaves() - deletes all save files for the game when called and
the predeterminied kill switch is on. backup, config, and global save
files are also deleted.
 
killCurrentSave() - automatically delete the current save file when called
and the predetermined kill switch is on. Will also delete the config and
global save files if the deleted save file was the only save file available
 
itemTrade() - checks to see if the active party has the items and the
required quantities to receive a multiple of a set of items and their
specific quantities. This method requires to pass 2 2D arrays;
itemsToTrade, and itemsToGet. Each array needs to be in the form of:
    [[itemId,quantity], [itemId,quantity],....]
,... is to show that pattern repea Use the example above as a
reference when using this method. The multiple of the amount will
determine how many of the multiple quantities of the required items are
lost.
 
petrificationCheck() - checks the entire party and applies the battle
graphic to the actor based on the petrification condition.
 
Requirements:
    default SV Actor sprite sheet to named as: actorName Normal
    petrification Battle Sprite to be names as: actorName Stone
    For enemies
 
randomToggleSwitch() - randomly toggle a generic switch
 
getPlayerPos() - store the players' x and y position in designated
variables
 
checkPlayerPos() - compare the players' current position to the stored
coordinates
 
===== Plugin Paramter Descriptions =====
 
TradeNPCSwitch - a boolean value that's set by the item trade method to
indicate a successful or unsuccessful trade. This is to be used by the
game dev to use a reference to set responses based on the result of the
exchange.
 
DeathStates - a set of state IDs that will be set as death states
Example 1 - 5
Example 2 - 5,6,7
Example 3 - 5, 6 ,7
 
-------------------------------------------------------------------------
 
@param TradeNPCSwitch
@desc The switch where the npc responce is stored. Default is Switch 1.
@default 1
 
@param DeathStates
@desc A set of State IDs that will be considered as death states
@default 1
 
@param PetrificationStateID
@desc The state ID of the Petrification State
@default 1
 
@param GenericSwitchID
@desc ID of the generic switch used to randomly turn off or on
@default 2
 
@param PlayerXPosVar
@desc Variable to store the player's X position with getPlayerPos() function
@default 1
 
@param PlayerYPosVar
@desc Variable to store the player's Y position with getPlayerPos() function
@default 2
 
@param killSaveSwitchID
@desc Switch that will be used when conditions for deleting all save data
is met.
@default 3
*/
 
/**
* Sanity Check
**/
function helloWorld(){
    console.log("Hello World");
}
 
/**
* Sanity check to see if the Plugin Params can be retrieved
**/
function getPluginParam(){
    var params = PluginManager.parameters('Thasuki_Scripts');
     
    var tradeNPCSwitch = Number(params['TradeNPCSwitch'] || 1);
    var deathStates = Number(params['DeathStates'] || 1);
    var petrificationStateID = Number(params['PetrificationStateID'] || 1);
    var genericSwitchID = Number(params['GenericSwitchID'] || 1);
    var playerXPosVar = String(params['PlayerXPosVar'] || 1);
    var playerYPosVar = Number(params['PlayerYPosVar'] || 1);
    var killSaveSwitchID = String(params['killSaveSwitchID'] || 1);
    var killSaveMessageID = String(params['killSaveMessageID'] || 1);
     
    console.log(tradeNPCSwitch);
    console.log(deathStates);
    console.log(petrificationStateID);
    console.log(genericSwitchID);
    console.log(playerXPosVar);
    console.log(playerYPosVar);
    console.log(killSaveSwitchID);
    console.log(killSaveMessageID);
     
}
 
/**
* Auto saves the game in new slot if started new file, or overwrites the current loaded one
**/
function autoSave(){
    if (DataManager.lastAccessedSavefileId() !== 0){
        $gameSystem.onBeforeSave();
        DataManager.saveGame(DataManager.lastAccessedSavefileId());
    }
}
 
/**
* Automatically load the last used save file
**/
function autoLoadSave(){
    if($gameSystem._saveCount >= 1){
        DataManager.loadGameWithoutRescue(DataManager.lastAccessedSavefileId());
        $gamePlayer.reserveTransfer($gameMap.mapId(), $gamePlayer.x, $gamePlayer.y);
        $gamePlayer.setTransparent(0);
    }
}
 
/**
* Prompts to load the last save file loaded
* To be used upon custom gameover screen
**/
function loadSave(){
    $gamePlayer.setTransparent(1);
     
    if($gameSystem._saveCount >= 1){
        $gameMessage.clear();
        $gameMessage.add("Load last save?");
        $gameMap._interpreter.setWaitMode('message');
        $gameMessage.setChoices(["Yes","No"],0, 1);
        $gameMessage.setChoiceCallback(function(selection) {
            if(selection == 0){
                DataManager.loadGameWithoutRescue(DataManager.lastAccessedSavefileId());
                $gamePlayer.reserveTransfer($gameMap.mapId(), $gamePlayer.x, $gamePlayer.y);
                $gamePlayer.setTransparent(0);
            }else{
                SceneManager.push(Scene_Title);
            }
            }
        );
    }else{
        $gameMessage.clear();
        $gameMessage.add("Back to Title or Exit?");
        $gameMap._interpreter.setWaitMode('message');
        $gameMessage.setChoices(["Title","Exit"],0, 1);
        $gameMessage.setChoiceCallback(function(selection) {
            if(selection == 0){
                SceneManager.push(Scene_Title);
            }else{
                close();
            }
            }
        );
    }
}
 
/**
* Delete all save data for the game with a predetermined switch
*
* Checks for the max number of save files and checks to see if
* a save file exists for the slot as well for a backup before
* deletion
*
* Delete the global save data store and config files
* 
* Display a messsage to the player and return to title screen
**/
function killSaves(){
    var params = PluginManager.parameters('Thasuki_Scripts');
    var switchID = Number(params['killSaveSwitchID'] || 3);
    var fs = require('fs');
     
    //Loop through save files and delete them and their backups
    if ($gameSwitches.value(switchID) === true){
        for(i = 1; i <= DataManager.maxSavefiles(); i++){
            if(StorageManager.exists(i)){
                StorageManager.remove(i);
            }
            if(StorageManager.backupExists(i)){
                StorageManager.cleanBackup(i);
            }
        }
     
        //Delete the global.rpgsave file
        require('fs').unlink(StorageManager.localFileDirectoryPath() + 'global.rpgsave\\', (err) => {
            if (err) {
                //console.log("failed to delete local image:"+err);
            } else {
                //console.log('successfully deleted local image');                                
            }
        });
         
        //Delete the config.rpgsave file
        require('fs').unlink(StorageManager.localFileDirectoryPath() + 'config.rpgsave\\', (err) => {
            if (err) {
                //console.log("failed to delete local image:"+err);
            } else {
                //console.log('successfully deleted local image');                                
            }
        });
         
        SceneManager.push(Scene_Title);
    }
}
 
/**
* Delete the current save file on command
* 
* Needs to have the kill save switch active to execute
* 
* Will delete the config and global save files if there
* are no other save files available
**/
function killCurrentSave(){
    var params = PluginManager.parameters('Thasuki_Scripts');
    var switchID = Number(params['killSaveSwitchID'] || 3);
    var fs = require('fs');
    var fileID = DataManager.lastAccessedSavefileId();
     
    if ($gameSwitches.value(switchID) === true){
        if(StorageManager.exists(fileID)){
            StorageManager.remove(fileID);
        }
        if(StorageManager.backupExists(fileID)){
            StorageManager.cleanBackup(fileID);
        }
         
        //Delete the config and global save files if there was only 1 single save
        if(!checkSaves()){
            for(i = 1; i <= DataManager.maxSavefiles(); i++){
                if(StorageManager.backupExists(i)){
                    StorageManager.cleanBackup(i);
                }
            }
            //Delete the global.rpgsave file
            require('fs').unlink(StorageManager.localFileDirectoryPath() + 'global.rpgsave\\', (err) => {
                if (err) {
                    //console.log("failed to delete local image:"+err);
                } else {
                    //console.log('successfully deleted local image');                                
                }
            });
             
            //Delete the config.rpgsave file
            require('fs').unlink(StorageManager.localFileDirectoryPath() + 'config.rpgsave\\', (err) => {
                if (err) {
                    //console.log("failed to delete local image:"+err);
                } else {
                    //console.log('successfully deleted local image');                                
                }
            });
        }
         
        SceneManager.push(Scene_Title);
    }
}
 
function checkSaves(){
    var value = false;
    for(i = 1; i <= DataManager.maxSavefiles(); i++){
        if(StorageManager.exists(i)){
            value = true;
            break;
        }
    }
    return value;
}
 
/**
*
* Works with and without HimeWorks Party Manager plugin
*
* itemsToTrade is a 2D array of itemIds and required counts
* example: [[itemId1, reqCount], [itemId2, reqCount]]
*
* itemsToGet is the same as itemsToTrade
*
* amount is the amount desired to want to receive from the trade
**/
function itemTrade(itemsToTrade, itemsToGet, amount){
    /*
    * Fun notes! :3
    * _gold returns amount of gold in the active party
    * _items() returns the array of items
    * _items()[itemIndex] returns the item object
    * _items()[itemIndex].id returns the Id of the item
    * _lastItem returns the id of the last item used
    * _actors returns the array of actors
    */
     
    var params = PluginManager.parameters('Thasuki_Scripts');
    var tradeNPCSwitch = Number(params['TradeNPCSwitch'] || 1);
    var activeParty;
    //var regExp = /\d+/ig;
     
    if(Imported.TH_PartyManager){
        activeParty = $gameParties._parties[$gameParties._activeId];
    } else{
        activeParty = $gameParty;
    }
     
    $gameSwitches.setValue(tradeNPCSwitch, 0);
     
    if(amount == 0){
        if(this.hasAllRequiredItems(activeParty, itemsToTrade)){
            if(this.tradeAllItems(activeParty, itemsToTrade, itemsToGet)){
                $gameSwitches.setValue(tradeNPCSwitch, 1);
            }
        }
    }else{
        if(this.hasAllRequiredItems(activeParty, itemsToTrade)){
            if(this.hasAmountRequested(activeParty, itemsToTrade, amount)){
                if(this.tradeAmountedItems(activeParty, itemsToTrade, itemsToGet, amount)){
                    $gameSwitches.setValue(tradeNPCSwitch, 1);
                }
            }
        }
    }
}
 
function hasAllRequiredItems(activeParty, itemsToTrade){
    var result = true;
    for(i = 0; i < itemsToTrade.length; i++){
        if(activeParty.numItems($dataItems[itemsToTrade[i][0]]) < $dataItems[itemsToTrade[i][1]]){
            result = false;
            break;
        }
    }
    return result;
}
 
function hasAmountRequested(activeParty, itemsToTrade, amount){
    var result = true;
    for(i = 0; i < itemsToTrade.length; i++){
        if(activeParty.numItems($dataItems[itemsToTrade[i][0]]) < itemsToTrade[i][1] * amount){
            result = false;
            break;
        }
    }
    return result;
}
 
function tradeAllItems(activeParty, itemsToTrade, itemsToGet){
    //$gameParty.gainItem($dataItems[itemId], amount);
    //$gameParty.loseItem($dataItems[itemId], amount);
     
    //Get num items to give
    var numItemsToGet = parseInt(activeParty.numItems($dataItems[itemsToTrade[0][0]]) / itemsToTrade[0][1]);
    if(itemsToTrade.length > 1){
        for(i = 1; i < itemsToTrade.length; i++){
            if(numItemsToGet > parseInt(activeParty.numItems($dataItems[itemsToTrade[i][0]]) / itemsToTrade[i][1])){
                numItemsToGet = parseInt(activeParty.numItems($dataItems[itemsToTrade[i][0]]) / itemsToTrade[i][1]);
            }
        }
    }
     
    if (numItemsToGet > 0){
        //Give items
        for(i = 0; i < itemsToGet.length; i++){
            activeParty.gainItem($dataItems[itemsToGet[i][0]], itemsToGet[i][1] * numItemsToGet);
        }
         
        //Take away items
        for(i = 0; i < itemsToTrade.length; i++){
            activeParty.loseItem($dataItems[itemsToTrade[i][0]], itemsToTrade[i][1] * numItemsToGet);
        }
         
        return true;
    }else{
        return false;
    }
}
 
function tradeAmountedItems(activeParty, itemsToTrade, itemsToGet, amount){
    if(amount > 0){
        //Give items
        for(i = 0; i < itemsToGet.length; i++){
            activeParty.gainItem($dataItems[itemsToGet[i][0]], (itemsToGet[i][1] * amount));
        }
         
        //Take away items
        for(i = 0; i < itemsToTrade.length; i++){
            activeParty.loseItem($dataItems[itemsToTrade[i][0]], (itemsToTrade[i][1] * amount));
        }
         
        return true;
    }else{
        return false;
    }
}
 
/**
* Checks to see who's affected by the state and applies the graphic
* Checks to see if the battle hits a win or lose condition if in battle
* Actor battle sprites need to have the name format: actorName Battler
* Petrified Actor battle sprites need to have the name format: actorName Stone
**/
function petrificationCheck(){
    var params = PluginManager.parameters('Thasuki_Scripts');
    var petrificationId = Number(params['PetrificationStateID'] || 1);
    var activeParty;
     
    if(Imported.TH_PartyManager){
        activeParty = $gameParties._parties[$gameParties._activeId];
    } else{
        activeParty = $gameParty
    }
     
    //Change state affected actors Actor Image: [SV] Battler by ._battlerName
    for(i = 0; i < activeParty.members().length; i++){
        if(activeParty.members()[i]._states.contains(petrificationId)){
            activeParty.members()[i]._battlerName = activeParty.members()[i].name().concat(" Stone");
        }
        else{
            activeParty.members()[i]._battlerName = activeParty.members()[i].name().concat(" Battler");
        }
    }
     
    //In Battle for enemies
    if(activeParty._inBattle && Imported.SideviewActorEnemies){
        for(i = 0; i < $gameTroop.members().length; i++){
            if($gameTroop.members()[i]._states.contains(petrificationId) && $gameTroop.members()[i]._svActorName != ""){
                $gameTroop.members()[i]._svActorName = $gameTroop.members()[i]._svActorName.replace("Battler","Stone");
            }
            else{
                $gameTroop.members()[i]._svActorName = $gameTroop.members()[i]._svActorName.replace("Stone","Battler");
            }
        }
    }
}
 
/**
* Randomly generates a true false value to enable or disable a generic switch
**/
function randomToggleSwitch(){
    var params = PluginManager.parameters('Thasuki_Scripts');
    var switchID = Number(params['GenericSwitchID'] || 2);
    var value;
     
    if((Math.floor((Math.random() * 1000) + 1) % 2) == 1){
        value = true;
    }
    else{
        value = false;
    }
     
    $gameSwitches.setValue(switchID, value);
}
 
/**
* Store the players x and y positions in game variables
**/
function getPlayerPos(){
    var params = PluginManager.parameters('Thasuki_Scripts');
    var xPos = Number(params['PlayerXPosVar'] || 1);
    var yPos = Number(params['PlayerYPosVar'] || 2);
     
    $gameVariables.setValue(xPos, $gamePlayer.x);
    $gameVariables.setValue(yPos, $gamePlayer.y);
}
 
/**
* Check to see if the player position is the same as the stored position
**/
function checkPlayerPos(){
    var params = PluginManager.parameters('Thasuki_Scripts');
    var xPos = Number(params['PlayerXPosVar'] || 1);
    var yPos = Number(params['PlayerYPosVar'] || 2);
     
    if($gamePlayer.x == $gameVariables.value(xPos) &&
        $gamePlayer.y == $gameVariables.value(yPos)){
            return true;
    }
    else{
            return false;
    }
}