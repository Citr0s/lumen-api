<?php

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            'Hello World!', $this->response->getContent()
        );
    }
}
