<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields\DataType;

/**
 * Class Column
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target({"PROPERTY","ANNOTATION"})
 */
final class Column implements Annotation
{
    use DataType;

    public string $name;
    public int $length;
    public int $precision;
    public bool $unique = false;
    public bool $nullable = false;

}