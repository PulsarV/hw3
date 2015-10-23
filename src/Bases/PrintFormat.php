<?php
/**
 * Created by PhpStorm.
 * User: Volodymyr Kravchuk
 * Date: 23.10.15
 * Time: 17:16
 */

namespace Bases;

trait PrintFormat
{
    /**
     * @param array $inputArray
     * @return string
     */
    protected function formatText(Array $inputArray)
    {
        $s = '';
        foreach ($inputArray as $key=>$value) {
            if ($s == '') {
                $s = "<p><strong>" . $key . " \"" . $this->$value . "\":</strong></p>\n";
            } else {
                $s .= $key . ": " . $this->$value . "<br>\n";
            }
        }
        return $s;
    }
}