<?php

//Formet class
class Format
{
    public function formateDate($date)
    {
        return date('F j,Y, g:i a', strtotime($date));
    }
    
    public function textShorten($body,$limit = 400)
    {
       $body = $body." ";
       $body = substr($body,0,$limit);
       $body = $body."...";
       return $body;
    }
}
?>