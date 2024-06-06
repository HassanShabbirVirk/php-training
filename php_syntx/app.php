<?php
    function getTransectionFiles($dir_path) : array{

        $files = [];
        foreach(scandir($dir_path) as $file){
            if(is_dir($file)){
                continue;
            }

            $files[] = $dir_path.$file;
        }

        return $files;
    }

    function getTranssections($file_name):array{
        if(! file_exists($file_name)){
            trigger_error("File ".$file_name." does not found",E_USER_ERROR);
        }
        $open_file = fopen($file_name, 'r');
        $transections =[];
        fgetcsv($open_file);
        while(($transection = fgetcsv($open_file)) !== false){
            $transections[] = $transection;
        }

        return $transections;
    }

?>