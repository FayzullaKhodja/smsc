<?php
namespace Khodja\Smsc\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Smsc extends Facade {
 
    protected static function getFacadeAccessor() {
    	return 'smsc';
    }
 
}