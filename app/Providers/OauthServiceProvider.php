<?php

namespace App\Providers;

use Dingo\Api\Auth\Auth;
use Dingo\Api\Auth\Provider\OAuth2;
use Illuminate\Support\ServiceProvider;

class OAuthServiceProvider extends OauthSErviceProvider
{
	public function boot(){
		$this->app[Auth::class]->extend('oauth', function($app){
			$provider = new OAuth2($app['oauth2-server.authorizer']->getChecker());

			$provider->setUserResolver(function($id){

			});

			$provider->setClientResolver(function ($id){

			});
			return $provider;
		});
	}

	public function register(){

	}
}