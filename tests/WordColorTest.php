<?php

namespace light\tests;

use light\WordColor;

class WordColorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider words
     */
    public function testTransfer($word, $except)
    {
        $this->assertEquals($except, WordColor::trans($word));
    }


    public function words()
    {
        return [
            ['words', 'rgb(188,174,18)'],
            ['你好', 'rgb(228,70,0)'],
        ];
    }
}
