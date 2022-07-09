<?php

declare(strict_types=1);

namespace Tests\Task1;

use PHPUnit\Framework\TestCase;

use function App\Task1\myTernary;

/**
 * Class MyTernaryTest
 *
 * @author Dzianis Kotau <me@dzianiskotau.com>
 */
class MyTernaryTest extends TestCase
{
    /**
     * @test
     * @dataProvider numbersProvider
     */
    public function compareNumber(int $num, string $output): void
    {
        $this->assertEquals($num . ' ' . $output, myTernary($num));
    }

    public function numbersProvider(): array
    {
        return [
            'greater than 30' => [40, 'greater than 30'],
            'greater than 20' => [22, 'greater than 20'],
            'greater than 10' => [19, 'greater than 10'],
            'less or equal to 10' => [9, 'less or equal to 10'],
        ];
    }
}
