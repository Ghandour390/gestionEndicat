<?php

namespace App\Enums;

enum Specialite
{
    case Java;
    case Python;
    case C;
    case php;
    case javascript;

    public  function label(): string
    {
        return match ($this) {
            self::Java => 'Java',
            self::Python => 'Python',
            self::C => 'C',
            self::php => 'PHP',
            self::javascript => 'JavaScript',
        };
    }
    public function value(): string
    {
        return match ($this) {
            self::Java => 'java',
            self::Python => 'python',
            self::C => 'c',
            self::php => 'php',
            self::javascript => 'javascript',
        };
    }
}
