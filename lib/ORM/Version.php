<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;

/**
 * Class Version
 * @package StaXr\Annotations\ORM
 */
final class Version implements Annotation
{
    public string $value;
}