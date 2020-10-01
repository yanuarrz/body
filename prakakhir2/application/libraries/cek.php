<?php
class cek
{

    function usercek($user, $pass)
    {
        if ($user == 'andreaspecr' && $pass == '123') {
            return true;
        } else {
            return false;
        }
    }
}
