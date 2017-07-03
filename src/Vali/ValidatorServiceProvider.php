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
        \Validator::resolver(function($translator, $data, $rules, $messages) {
            return new CustomValidator($translator, $data, $rules, $messages);
        });

        $this->loadTranslationsFrom(__DIR__.'/resources/lang/', 'test-package');
        
    }

    /**
     * @return void
     */
    public function register()
    {
        //
    }
}