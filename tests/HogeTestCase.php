<?php

namespace Tests;

use Orchestra\Testbench\TestCase;

class HogeTestCase extends TestCase
{

   /**
     * @param $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'Vali\ValidatorServiceProvider',
        ];
    }
    
    public function testZipCode() {
        $data = ['zipcode' => 0];
        $rules = ['zipcode' => 'jpZipCode'];
        $messages = ['zipcode' => 'zipcode'];
        $validation = $this->app->make('validator')->make($data, $rules, $messages);
        $this->assertFalse($validation->passes());
    }

    public function testCreditCard() {
        $data = ['creditcard' => 0];
        $rules = ['creditcard' => 'creditCard'];
        $validation = $this->app->make('validator')->make($data, $rules);
        $this->assertFalse($validation->passes());

        $data = ['creditcard' => 340316193809364];
        $validation = $this->app->make('validator')->make($data, $rules);
        $this->assertTrue($validation->passes());
    }
    
}
