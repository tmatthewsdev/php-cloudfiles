<?php
# common test utility functions
#

# Specify a word length and any characters to exlude and return
# a valid UTF-8 string
#
function genUTF8($len=10, $excludes=array())
{
    # generates a random iso-8859-1 string and converts it to utf-8
    # skips a few bad eggs.  Some names should exclude other characters,
    # for example, Containers can't contain a '/' character, so that can
    # be passed in with the $excludes array.
    $invalid_chars = array(
        127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,
        143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,
        );
    $r = "";
    while (strlen($r) < $len) {
        $c = rand(32,255);
        if (in_array($c, $invalid_chars)) { continue; }
        if (in_array($c, $excludes)) { continue; }
        $r .= chr($c);
    }
    return utf8_encode($r);
}

?>