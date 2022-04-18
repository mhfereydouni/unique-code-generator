<?php

namespace Mhfereydouni\UniqueCodeGenerator;

use ValueError;

class UniqueCodeGenerator
{
    /**
     * List of characters which are used to generate codes
     *
     * @var string
     */
    private string $characterList = '23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ';

    /**
     * A prime number which specifies maximum number which we can creat a unique code for it.
     *
     * @var int
     */
    private int $maxPrime;

    /**
     * A prime number which must be greater than maxPrime
     *
     * @var int
     */
    private int $obfuscatorPrime;

    /**
     * Length of generated codes
     *
     * @var int
     */
    private int $outputLength = 10;

    public function __construct(int $maxPrime, int $obfuscatorPrime)
    {
        $this->maxPrime = $maxPrime;

        $this->obfuscatorPrime = $obfuscatorPrime;
    }

    public function characterList(string $characterList): static
    {
        if (empty($characterList)) {
            throw new ValueError('Character list must not be empty');
        }

        $this->characterList = $characterList;

        return $this;
    }

    public function outputLength(int $outputLength = 10): static
    {
        if ($outputLength < 1) {
            throw new ValueError('Output length must be greater than 0');
        }

        $this->outputLength = $outputLength;

        return $this;
    }

    public function generate(int $number): string
    {
        return $this->encode($this->obfuscate($number));
    }

    private function encode(int $number): string
    {
        $listLength = strlen($this->characterList);

        $code = '';

        for ($i = 0; $i < $this->outputLength; $i++) {
            $digit = $number % $listLength;

            $code = $this->characterList[$digit] . $code;

            $number = intdiv($number, $listLength);
        }

        return $code;
    }

    private function obfuscate(int $number): int
    {
        return ($number * $this->obfuscatorPrime) % $this->maxPrime;
    }
}
