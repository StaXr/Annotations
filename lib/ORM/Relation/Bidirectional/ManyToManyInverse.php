<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM\Relation\Bidirectional;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields;

/**
 * Class ManyToManyInverse
 * @package StaXr\Annotations\ORM\Relation\Bidirectional
 */
final class ManyToManyInverse implements Annotation
{
    use AnnotationFields\Relation\TargetEntity;
    use AnnotationFields\Relation\InverseLink;
    use AnnotationFields\Relation\RelationTableName;
    use AnnotationFields\Relation\Fetch;
    use AnnotationFields\Relation\OrphanRemoval;
    use AnnotationFields\Relation\Cascade;
}