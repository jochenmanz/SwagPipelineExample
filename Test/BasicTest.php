<?php

namespace PayonePayment\Test;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BasicTest extends KernelTestCase
{
    use IntegrationTestBehaviour;

    public function testItWorks()
    {
        /** @var EntityRepositoryInterface $productRepository */
        $productRepository = $this->getKernel()->getContainer()->get('product.repository');

        $context = Context::createDefaultContext();

        $product = $productRepository->search(new Criteria(), $context)->first();

        $this->assertNotEmpty($product);
    }
}
