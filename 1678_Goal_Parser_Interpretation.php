<?php
class Solution {

    /**
     * @param String $command
     * @return String
     */
    function interpret($command) {
            $replacements = [
                '()' => 'o',
                '(al)' => 'al',
            ];

            // Perform the replacements
            foreach ($replacements as $search => $replace) {
                $command = str_replace($search, $replace, $command);
            }

         return $command;
    }
}
