<?php

use App\Models\Fund;
use App\Repositories\FundsRepository;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase as TestCase;

class CheckFundDuplicatedTest extends TestCase
{
    public function test_checkIfFundIsDuplicated_returns_true_when_fund_is_duplicated(): void
    {
        // Arrange
        $fund1 = Fund::factory()->create();
        $fund2 = Fund::create([
            'name' => $fund1->name,
            'fund_manager_id' => $fund1->fund_manager_id,
            'alias' => 'some_alias',
            'start_year' => $fund1->start_year,
        ]);
        $repository = new FundsRepository();

        // Act
        $isDuplicated = $repository->checkIfFundIsDuplicated($fund2);

        // Assert
        $this->assertTrue($isDuplicated);
    }

    public function test_checkIfFundIsDuplicated_returns_false_when_fund_is_not_duplicated(): void
    {
        // Arrange
        $fund1 = Fund::factory()->create();
        $fund2 = Fund::create([
            'name' => 'some other name',
            'fund_manager_id' => $fund1->fund_manager_id,
            'alias' => 'some,other,alias',
            'start_year' => $fund1->start_year,
        ]);
        $repository = new FundsRepository();

        // Act
        $isDuplicated = $repository->checkIfFundIsDuplicated($fund2);

        // Assert
        $this->assertFalse($isDuplicated);
    }
}