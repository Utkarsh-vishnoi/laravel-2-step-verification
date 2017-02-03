<?php

namespace Utkarsh\TwoStepVerification\Facades;

use Illuminate\Support\Facades\Facade;

class Authenticate extends Facade {

    protected static function getFacadeAccessor() { return 'TwoStepVerification'; }

}