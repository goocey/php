<?php
$file = file('worktime.txt');
$year = '2012';
$write_file = fopen('work.csv', 'w');
foreach ($file as $line) {
    if (preg_match("/^[ |]*({$year}年.*)/",$line,$match_line) == 1) {
        var_dump($match_line[1]);
        $line_args = explode(' ', $match_line[1]);
        if (isset($line_args)) {
            if (preg_match("/\d?:\d?/", $line_args[2], $match_line) == 1 && 
                preg_match("/\d?:\d?/", $line_args[3], $match_line) == 1) {
                    $start = strtotime('2012-10-01 ' . $line_args[1] . ':00');
                    $end   = strtotime('2012-10-01 ' . $line_args[2] . ':00');
                    $time  = $end - $start;
                    $work_time_str = gmdate('H:i', $time);
                    $work_time_array = explode(':', $work_time_str);
                    $work_time = intval($work_time_array[0]) * 60 + intval($work_time_array[1]);

                    fwrite($write_file, $line_args[0] . "\t");
                    fwrite($write_file, date('H:i', $start) . "\t");
                    fwrite($write_file, date('H:i', $end) . "\t");
                    fwrite($write_file, $work_time_str . "\t");
                    fwrite($write_file, $work_time);
                    fwrite($write_file, "\n");
                }
        }

    }
}
