Real Time PHP
============

Before you al go like whatt?!
This is just a little expiriment i started in the train. I was thinking of a way to make PHP more realtime and more event based.

## What does it do?
Actualy at the moment
 - you can load in tasks
 - make the php file do stuff in loops
 - thats basicly it

Start the script by simply:

    php console.php




Add tasks by putting them in the tasks folder, and put the data in the json.
I kinda have an idea for it : but i'm working it out first :D.

### How does it work?
Well simple: we have an endless php loop that checks if there is an updated key value in the .version file.
Meanwhile the loop has the possebility to w/e it wants, and when there is a key your task will be ran.

Some examples comming soon: probably better code comming soon ;)


##### ps:
Should you use this? probably not..
Why not?
 - it's php (ever heard of real time php?)
 - it's slow (not in the mood as events are running slow, but more slow as in it's god damned slow in large tasks)
 - there are better alternatives (have you seen node & grunt :D ?)

have fun :)

