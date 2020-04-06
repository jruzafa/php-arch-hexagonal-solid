<?php
namespace Domain;

use Domain\ValueObject\StringValueObject;

final class PostId extends StringValueObject {

    public function __construct( string $value)
    {
        $this->validateValue($value);

        parent::__construct($value);
    }

    /**
     * @param string $value
     */
    private function validateValue( string $value )
    {
        if (is_null($value)) {

            throw new \InvalidArgumentException(sprintf('the field %s is empty', $value));
        }
    }
}
