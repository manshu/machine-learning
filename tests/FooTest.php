<?php

// require __DIR__.'/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use Phpml\Association\Apriori;

class FooTest extends TestCase
{

    public function test_it_works()
    {
        $samples = [['1', '2', '3'], ['1', '2', '4'], ['1', '2', '3'], ['1', '2', '4']];
        $labels  = [];

        $associator = new Apriori($support = 0.5, $confidence = 0.5);
        $associator->train($samples, $labels);
        $result = $associator->predict(['1', '4']);
        var_dump($result);
    }
}
