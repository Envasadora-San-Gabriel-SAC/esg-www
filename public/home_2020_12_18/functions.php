<?php
    function base_url(){
        $baseURL = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $baseURL .= "://".$_SERVER['HTTP_HOST'];
        if (!isset($_SERVER['ORIG_SCRIPT_NAME']))
        {
          $baseURL .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
        }
        else
        {
          $baseURL .= str_replace(basename($_SERVER['ORIG_SCRIPT_NAME']),"",$_SERVER['ORIG_SCRIPT_NAME']);
        }
        return sprintf(
            $baseURL
        );
    }
?>