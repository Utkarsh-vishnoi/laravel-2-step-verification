# laravel-2-step-verification
A laravel plugin to easily implement Google Authenticator.

# Installation
Install it via composer
    composer require utkarsh/laravel-two-step-verification

Then add the `TwoStepVerificationServiceProvider` to the `providers` array in `config/app.php`.
    Utkarsh\TwoStepVerification\Providers\TwoStepVerificationServiceProvider::class,

then add the `TwoStepVerification` alias to the aliases array in the same file.
    `'TwoStepVerification' => Utkarsh\TwoStepVerification\Facades\Authenticate::class,`

# Usage
Coming Soon!
