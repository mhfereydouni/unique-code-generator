<?php

it('can generate code', function () {
    $uniqueCodeGenerator = new Mhfereydouni\UniqueCodeGenerator\UniqueCodeGenerator(7230323, 9006077);

    $this->assertEquals(
        'QDWQGD',
        $uniqueCodeGenerator
            ->characterList('LQJCKZMWDPTSXRGANYVBHF')
            ->outputLength(6)
            ->generate(4));
});
