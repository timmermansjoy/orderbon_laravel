<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class timeFormat implements Rule
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
        if(is_numeric($value)){
            return true;
        }
        if(strpos($value, ':') !== false || (strpos($value, '.') !== false)){
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Time has not the correct format.';
    }
}
