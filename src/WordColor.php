<?php

namespace light;

/**
 * WordColor.
 *
 * ```
 * echo WordColor::trans('words'); //rgb(188,174,18)
 *
 * echo WordColor::trans('你好'); //rgb(228,70,0)
 * ```
 *
 * @version 1.0.0
 * @author lichunqaing <light-li@hotmail.com>
 */
class WordColor
{

    const MAGIC_NUMBER = 5;
    const COLOR_LIMITE = 242;

    /**
     * Get hash number.
     *
     * @param  string $char
     *
     * @return integer
     */
    public static function getAHashNum($char)
    {
        return (int) ((static::charCodeAt($char) << static::MAGIC_NUMBER) % static::COLOR_LIMITE);
    }

    /**
     * Get the radio
     *
     * @param  integer $level
     *
     * @return integer
     */
    public static function getRatio($level)
    {
        return pow(static::MAGIC_NUMBER, $level);
    }

    /**
     * Transfer the word to rgb.
     *
     * @param  string $word
     *
     * @return srring
     */
    public static function trans($word)
    {
        $rgb = static::getRGB($word);
        return 'rgb(' . implode(',', $rgb) . ')';
    }

    /**
     * Get the rgb.
     *
     * @param  string $word
     *
     * @return array
     */
    public static function getRGB($word)
    {
    	$word = trim($word);
    	$rgb = [0, 0, 0];
    	$len = mb_strlen($word, 'UTF-8');
    	for ($i=0; $i < $len; $i++) {
    		$level = (int) ($i / count($rgb));

    		$rgb[$i % 3] += (int) (static::getAHashNum(mb_substr($word, $i, 1, 'UTF-8')) / static::getRatio($level));
    	}

    	array_walk($rgb, function(&$j) {
    		if ($j > 255) {
    			$j = 255;
    		}
    	});

    	return $rgb;
    }

    /**
     * The similar function like javascript `charCodeAt()`
     *
     * @param  string  $str
     * @param  integer $index
     *
     * @return integer
     */
    public static function charCodeAt($str, $index = 0)
    {
        $char = mb_substr($str, $index, 1, 'UTF-8');

        if (mb_check_encoding($char, 'UTF-8')) {
            $ret = mb_convert_encoding($char, 'UTF-32BE', 'UTF-8');
            return hexdec(bin2hex($ret));
        } else {
            return ord($str);
        }
    }

}

