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
}
