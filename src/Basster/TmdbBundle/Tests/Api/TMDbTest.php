<?php
/**
 * Created by PhpStorm.
 * User: basster
 * Date: 18.11.13
 * Time: 22:15
 */

namespace Basster\TmdbBundle\Tests\Api;


use Basster\TmdbBundle\Api\TMDb;

class TMDbTest extends \PHPUnit_Framework_TestCase {

    /** @var  TMDb */
    private $tmdb;

    public function setUp() {
        /** @noinspection PhpUndefinedConstantInspection */
        $this->tmdb = new TMDb(TMDB_API_KEY, LOCALE);
    }

    public function testClassCreation() {
        $this->assertInstanceOf('Basster\TmdbBundle\Api\TMDb', $this->tmdb);
    }
}
 