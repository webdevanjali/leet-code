<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack=[];
        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], ['{', '(', '['])){
                $stack[]=$s[$i];
            }
            elseif($s[$i] == '}'){
                if (end($stack) === '{') {
                    array_pop($stack); 
                }
                else{
                      return false;
                }
            }
            elseif($s[$i] == ')'){
                if (end($stack) === '(') {
                    array_pop($stack); 
                }
                else{
                      return false; 
                }
            }
            elseif($s[$i] == ']'){
                if (end($stack) === '[') {
                    array_pop($stack); 
                }
                else{
                      return false;
                }
            }
            
            
        }
        return empty($stack) ? true : false;
    }
}
