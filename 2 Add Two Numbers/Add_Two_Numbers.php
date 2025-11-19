<?php

class Solution {
    function addTwoNumbers($l1, $l2) {
        $dummy = new ListNode(0);
        $current = $dummy;
        $carry = 0;

        while ($l1 || $l2 || $carry) {
            $sum = ($l1 ? $l1 ->val : 0) + ($l2 ? $l2->val : 0) + $carry;
            $carry = (int)($sum/10);
            $sum %= 10;
            $current->next = new ListNode($sum);
            $current = $current->next;
            $l1 = $l1 ? $l1->next: null;
            $l2 = $l2 ? $l2->next: null;
        }
        return $dummy->next;
    }
}


