<?php

namespace SwagPipelineExample\Test;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BasicTest extends KernelTestCase
{
    use IntegrationTestBehaviour;

    /** @var EntityRepositoryInterface */
    private $productRepository;

    protected function setUp(): void
    {
        $this->productRepository = $this->getContainer()->get('product.repository');
    }

    public function testItWorks()
    {
        $context = Context::createDefaultContext();

        $product = $this->productRepository->search(new Criteria(), $context)->first();

        $this->assertNotEmpty($product);
    }
}
