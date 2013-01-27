<?php
/**
name: Shorty
url: http://adampatterson.ca
version: 1.0
description: Returns a shortened URL
author:
   name: Adam Patterson
   url: http://adampatterson.ca
 */

#event::on('theme_content', 'shorty::get', 1);

class shorty
{
    public $shorty = 'http://tcms.me/';

    static function get( )
    {

    }
}
