<?php

namespace Vali;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function boot()
    {
	$this->app['validator']->resolver(function($translator, $data, $rules, $messages, $customAttributes) {
   	    return new CustomValidator($translator, $data, $rules, $messages, $customAttributes);
	});
    }

    /**
     * @return void
     */
    public function register()
    {
        //
    }
}