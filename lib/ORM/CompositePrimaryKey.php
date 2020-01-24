<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;

/**
 * Class CompositePrimaryKey
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("CLASS")
 */
final class CompositePrimaryKey implements Annotation
{
    public string $name;
    public array $fields =[];
}