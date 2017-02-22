<?php require_once(dirname(__DIR__).'/vendor/autoload.php');
use PHPUnit\Framework\TestCase;
use Lib\MapFactory;
class Mapper extends TestCase{


    /**
     * Test whether or not the URI matchest (with static vals)
     */
    public function testUriMatch(){

        // Should succeed
        $test1 = MapFactory::Mapper('someurl',['someurl'=>'somenewurl'])->uriMatch();
        $this->assertTrue($test1); // should success


        // Should fail
        $test2 = MapFactory::Mapper('someOtherurl',['someurl'=>'somenewurl'])->uriMatch();
        $this->assertNotTrue($test2); // should fail.

    }

}