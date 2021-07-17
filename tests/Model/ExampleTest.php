<?php declare(strict_types=1);

namespace Symfona\PaginationBundle\Tests\Model;

use Symfona\Pagination\Query;
use Symfona\PaginationBundle\Tests\App\Model\Example;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class ExampleTest extends KernelTestCase
{
    public function testPagination(): void
    {
        self::bootKernel();

        /** @var Example $model */
        $model = self::getContainer()->get(Example::class);

        $query = new Query(skip: 2, limit: 2);
        $storage = new \ArrayObject([1, 2, 3, 4, 5]);
        $result = $model->getResult($query, $storage);

        $this->assertSame(5, $result->count);
        $this->assertSame([3, 4], $result->items);
    }
}
