use App\Repositories\FundsRepository;
use PHPUnit\Framework\TestCase;

class FundsRepositoryTest extends TestCase
{
    public function test_checkIfFundIsDuplicated_returns_true_when_fund_is_duplicated(): void
    {
        // Arrange
        $fund = new Fund(); // Replace with your actual Fund object
        $repository = new FundsRepository(); // Replace with your actual repository instance

        // Act
        $isDuplicated = $repository->checkIfFundIsDuplicated($fund);

        // Assert
        $this->assertTrue($isDuplicated);
    }

    public function test_checkIfFundIsDuplicated_returns_false_when_fund_is_not_duplicated(): void
    {
        // Arrange
        $fund = new Fund(); // Replace with your actual Fund object
        $repository = new FundsRepository(); // Replace with your actual repository instance

        // Act
        $isDuplicated = $repository->checkIfFundIsDuplicated($fund);

        // Assert
        $this->assertFalse($isDuplicated);
    }
}