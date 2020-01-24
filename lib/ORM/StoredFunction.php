<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields\ReturnType;

/**
 * Class StoredFunction
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("CLASS")
 */
final class StoredFunction implements Annotation
{
    use ReturnType;

    public string $name;
    /**
     * @var FunctionParameter[]
     */
    public array $parameters;
    public string $body;
}