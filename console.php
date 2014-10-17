<?php
$current_version = '';
$s = 0; // seconds
$c = 0; // count
$delay = 0.2;
$i = 0;
$process = array();
$tu = array();
require_once('core/task.runner.php');
require_once('core/realtime.class.php');


$realtime = new real_time();
foreach(json_decode(file_get_contents('tasks.json')) as $key => $task):  $process[$i] = new task($task,$key); $i++; endforeach; // obtain tasks
foreach($process as $key=>$p): if($p->update): array_push($tu,$key); endif; endforeach; // task that require an update to run
while(true):
    $version = file_get_contents('.version');
    if($version == $current_version):
        // no update
    else:
        // we've updated
       foreach($tu as $k=>$r):
            $process[$k]->run();
            print("runnig task \n ");
        endforeach;
        //print(" \n The key has been updated \n ");
        $current_version = $version;
    endif;
    print('.');

    // for test sake: create every fifth rotation a new key, and return ammount of rotations and seconds delayed
    if(ctype_digit($c/5)):
        $realtime->newKey();
        print($s.'s delayed'."\n");
        print($c.' Rotations made'."\n");
    endif;


    $s+=$delay;
    $c++;
    sleep($delay);
endwhile;