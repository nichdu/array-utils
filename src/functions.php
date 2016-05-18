<?php  

namespace ArrayUtils;

if (!function_exists('ArrayUtils\replaceKey')) {

    /**
     * Replaces array key by other Key
     * Inspired by http://stackoverflow.com/a/21299719
     * @param $array array Array with replacable key
     * @param $old_key mixed Key to replace
     * @param $new_key mixed ney key
     * @return array array with replaced key
     */
    function replaceKey( $array, $old_key, $new_key) {

        if( ! array_key_exists( $old_key, $array ) )
            return $array;

        $keys = array_keys( $array );
        $keys[ array_search( $old_key, $keys ) ] = $new_key;

        return array_combine( $keys, $array );
    }
}
