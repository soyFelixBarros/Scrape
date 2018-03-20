<?php

use Felix\Scraper\Url;

class UrlTest extends PHPUnit_Framework_TestCase
{
    public function testNormalizeUrl()
    {
        $urls = array(
            'post–title',
            '/post–title',
            '//example.com/notix2/post–title',
            'http://example.com/notix2/post–title'
        );
        
        foreach ($urls as $url) {
            $this->assertEquals('http://example.com/notix2/post%E2%80%93title',  Url::normalize($url, 'http://example.com/notix2/'));
        }
    }
}
