<?php declare(strict_types=1);

namespace Test\Fixtures\SharingFixture;

use PHPUnit\Framework\TestCase;
use PDO;

/**
 * Example 5.4 uses the setUpBeforeClass() and tearDownAfterClass()
 * template methods to connect to the database before the test case class’ first test and to disconnect from the database after the last test of the test case, respectively.
 */
class DatabaseTest extends TestCase
{
    private static $dbh;

    public static function setUpBeforeClass(): void
    {
        self::$dbh = new PDO('mysql:host=localhost;dbname=my_db', 'root', '', []);
    }

    public function testConnection(): void
    {
        $this->assertInstanceOf(PDO::class, self::$dbh);
    }

    public static function tearDownAfterClass(): void
    {
        self::$dbh = null;
    }
}