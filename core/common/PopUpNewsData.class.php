<?php
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full icense text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2010, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/

class PopUpNewsData extends CodonData
{	 
    public static function popupnewsitem($id)
    {
        $query = 'SELECT *
                 FROM ' . TABLE_PREFIX .'news
                 WHERE id=' . $id . ' ';

        return DB::get_row($query);
    }
}