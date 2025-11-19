<?php

class Solution {
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }

        if ($x % 10 == 0 && $x != 0) {
            return false;
        }

        if ($x == 0){
            return true;
        }

        $original = $x;
        $reverved = 0;

        while ($x > 0) {
            $digit = $x % 10;
            $reserved = $reserved * 10 + $digit;
            $x = (int)($x/10);
        }
        return $original === $reserved;
    }
}