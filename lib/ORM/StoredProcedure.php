<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;

/**
 * Class Procedure
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("CLASS")
 */
final class StoredProcedure implements Annotation
{
    public string $name;
    public string $body;
}