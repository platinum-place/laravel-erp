<?php

namespace App\Enums;

use Illuminate\Support\Arr;

trait EnumsTrait
{
    public static function values(): array
    {
        return Arr::pluck(static::cases(), 'value');
    }

    public static function names(): array
    {
        return Arr::pluck(static::cases(), 'name');
    }

    public function getLabel(string $src = ''): ?string
    {
        $label = is_string(value: $this->value) ? $this->value : $this->name;

        return $src ? __("$src.$label") : __($label);
    }

    public static function get($value): self
    {
        $values = Arr::where(static::cases(), function ($case) use ($value) {
            return $case->value == $value || $case->name == $value;
        });

        return reset($values);
    }
}
