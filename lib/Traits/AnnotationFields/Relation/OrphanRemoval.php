<?php

declare(strinct_types=1);

namespace StaXr\Annotations\Traits\AnnotationFields\Relation;

trait OrphanRemoval
{
    public bool $orphanRemoval = false;
}