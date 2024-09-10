<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');
        self::assertEquals('Belajar TIK', $youtube);
    }
    public function testDefaultEnv()
    {
        $author = Env::get('AUTHOR', 'Aceng Abdul Wahid');
        self::assertEquals('Aceng Abdul Wahid', $author);
    }
}