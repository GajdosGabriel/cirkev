<?php

namespace App\Rules;

use App\Services\SpamDetector;
use Illuminate\Contracts\Validation\Rule;

class SpamFree implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
        return ! resolve(SpamDetector::class)->detect($value);
        } catch (\Exception $e)
        {
            return false;
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Použili ste slová bez obsahu!';
    }
}
