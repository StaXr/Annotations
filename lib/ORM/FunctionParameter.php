<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Traits\AnnotationFields\DataType;

/**
 * Class FunctionParameter
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("ANNOTATION")
 */
class FunctionParameter
{
    use DataType;

    public string $name;

}