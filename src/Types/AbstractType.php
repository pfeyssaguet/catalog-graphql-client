<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\UnrequestedFieldException;
use ArrowSphere\Entities\AbstractEntity;
use ArrowSphere\Entities\Exception\EntitiesException;

/**
 * Class AbstractType
 */
abstract class AbstractType extends AbstractEntity
{
    /**
     * @var array
     */
    private $requestedFields;

    /**
     * @param array $data
     * @throws EntitiesException
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        $this->requestedFields = array_flip(array_keys($data));
    }

    /**
     * @param string $property
     * @return mixed
     * @throws UnrequestedFieldException
     */
    public function getProperty(string $property)
    {
        if (! isset($this->requestedFields[$property])) {
            throw new UnrequestedFieldException(
                sprintf(
                    'Field %s from type %s has not been requested',
                    $property,
                    static::class
                )
            );
        }

        return parent::getProperty($property);
    }

    /**
     * @param string $property
     * @param mixed $value
     * @return static
     */
    public function setProperty(string $property, $value): AbstractEntity
    {
        $this->requestedFields[$property] = true;

        return parent::setProperty($property, $value);
    }
}
