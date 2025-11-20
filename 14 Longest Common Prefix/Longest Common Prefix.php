<?php

function longestCommonPrefix($strs) {
    if (empty($strs)) {
        return "";
    }

    $firstStr = $strs[0];
    $prefixLength = strlen($firstStr);

    for ($i = 1; $i < count($strs); $i++) {
        $currentStr = $strs[$i];
        $j = 0;

        while ($j < $prefixLength &&
            $j < strlen($currentStr) &&
            $firstStr[$j] === $currentStr[$j]) {
            $j++;
        }

        $prefixLength = min($prefixLength, $j);

        if ($prefixLength === 0) {
            return "";
        }
    }

    return substr($firstStr, 0, $prefixLength);
}