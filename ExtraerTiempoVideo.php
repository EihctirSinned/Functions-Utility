<?php

echo 'Duracion del Video '. GetVideoDuration("C:\\Users\\Bishops\\Videos\\OJO.mp4","C:\\ffmpeg\\bin\\ffmpeg") ;


function GetVideoDuration($video, $ffmpeg) 
{

    $command = $ffmpeg . ' -i ' . $video . ' -vstats 2>&1';  
    $output = shell_exec($command);  

    $regex_duration = "/Duration: ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}).([0-9]{1,2})/";
    
    if (preg_match($regex_duration, $output, $regs)) 
    {
        $hours = $regs [1] ? $regs [1] : null;
        $mins = $regs [2] ? $regs [2] : null;
        $secs = $regs [3] ? $regs [3] : null;
        $ms = $regs [4] ? $regs [4] : null;
    }

    $miArrayDuration = array ($hours, $mins, $secs, $ms);

    $out='';

    foreach ($miArrayDuration as $k => $value) 
    {
        $out .= $value;

        if($k != 3) {$out .=':';}
    }

    return $out;

}
