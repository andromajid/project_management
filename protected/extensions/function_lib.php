<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of function_lib
 *
 * @author arkananta
 */
class function_lib {
    //put your code here
    /**
     * fungsi buat ngecek data  rentang interval tanggal
     * @param date $date_start tanggal mulai
     * @param date $date_end tanggal selesai
     * @return Int Berapa hari
     */
    public static function getDateInterval($date_start, $date_end) {
        $date_start_unix = strtotime($date_start);
        $date_end_unix = strtotime($date_end);
        $date_interval_unix = $date_end_unix - $date_start_unix;
        return floor($date_interval_unix/86400);
    }
}

?>
