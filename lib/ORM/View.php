<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields\ReadOnly;

/**
 * Class View
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("CLASS")
 */
final class View implements Annotation
{
    use ReadOnly;

    public string $name;
    public string $query;
    public string $method;
}