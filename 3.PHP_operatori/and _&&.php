<?php

echo "AND is not the same like &&";

// for example:

// $a && $b || $c;
// is not the same like

// $a AND $b || $c;

// the first thing is
// (a and b) or c

// the second
// a and (b or c)

// 'cause || has got a higher priority than and, but less than &&

// of course, using always [ && and || ] or [ AND and OR ] 
//would be okay, but than you should at least respect the following:

// $a = $b && $c;
// $a = $b AND $c;

// the first code will set $a to the result of the comparison $b with $c,
// both have to be true, while the second code line will set $a like $b 
// and THAN - after that - compare the success of this with the value of $c