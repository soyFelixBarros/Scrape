<?php

use Felix\Scraper\Url;

class UrlTest extends PHPUnit_Framework_TestCase
{
    public function testNormalizeUrl()
    {
        $urls = array(
            '/post-title',
            '//example.com/post-title',
            'http://example.com/post-title'
        );
        
        foreach ($urls as $url) {
            $this->assertEquals('http://example.com/post-title',  Url::normalize($url, 'http://example.com/'));
        }
    }
}
