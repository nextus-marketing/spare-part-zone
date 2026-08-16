<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CustomCaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($sequence)
    {
        $this->sequence = $sequence;
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
        $sequence = explode('-', $this->sequence);

        if ($sequence[1] == 1) {
            $calculated_value = abs($sequence[0] + $sequence[2]);
        }
        if ($sequence[1] == 2) {
            $calculated_value = abs($sequence[0] - $sequence[2]);
        }
        if ($sequence[1] == 3) {
            $calculated_value = abs($sequence[0] * $sequence[2]);
        }
        if ($sequence[1] == 4) {
            $calculated_value = abs($sequence[0] / $sequence[2]);
        }
        if ($calculated_value == $value) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'please provide a valid calulation output';
    }
}
