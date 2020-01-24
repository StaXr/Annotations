<?php

declare(strinct_types=1);

namespace StaXr\Annotations\Traits\AnnotationFields\Relation;

trait Cascade
{
    /** @var string[] */
    public array $cascade = [];
}