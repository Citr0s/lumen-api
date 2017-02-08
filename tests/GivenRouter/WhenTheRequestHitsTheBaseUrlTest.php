<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08/02/2017
 * Time: 14:14
 */

namespace tests\GivenRouter;

use TestCase;

class WhenTheRequestHitsTheBaseUrlTest extends TestCase
{
    public function testThenTheHelloWorldIsReturned()
    {
        $this->get('/');

        $this->assertEquals(
            'Hello World!', $this->response->getContent()
        );
    }
}