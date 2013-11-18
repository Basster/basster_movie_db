<?php
/**
 * Created by PhpStorm.
 * User: basster
 * Date: 18.11.13
 * Time: 22:37
 */

namespace Basster\TmdbBundle\Tests\Api\Configuration;


class ConfigurationTest extends \PHPUnit_Framework_TestCase {

    public function testIfApiKeyIsDefined() {
        $this->assertTrue(defined('TMDB_API_KEY') && TMDB_API_KEY);
    }

    public function testIfLocaleIsDefined() {
        $this->assertTrue(defined('LOCALE') && LOCALE);
    }
} 