<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class TestHeaderParameters extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $headerParameters {
     *     @var string $testString 
     *     @var int $testInteger 
     *     @var float $testFloat 
     *     @var array $testArray 
     *     @var string $testRequired 
     *     @var string $testDefault 
     * }
     */
    public function __construct(array $headerParameters = array())
    {
        $this->headerParameters = $headerParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/test-header';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('testString', 'testInteger', 'testFloat', 'testArray', 'testRequired', 'testDefault'));
        $optionsResolver->setRequired(array('testRequired'));
        $optionsResolver->setDefaults(array('testDefault' => 'test'));
        $optionsResolver->addAllowedTypes('testString', array('string'));
        $optionsResolver->addAllowedTypes('testInteger', array('int'));
        $optionsResolver->addAllowedTypes('testFloat', array('float'));
        $optionsResolver->addAllowedTypes('testArray', array('array'));
        $optionsResolver->addAllowedTypes('testRequired', array('string'));
        $optionsResolver->addAllowedTypes('testDefault', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}