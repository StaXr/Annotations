<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM\Relation\Bidirectional;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields;

final class OneToManyInverse implements Annotation
{
    use AnnotationFields\Relation\TargetEntity;
    use AnnotationFields\Relation\InverseLink;
    use AnnotationFields\Relation\Fetch;
    use AnnotationFields\Relation\OrphanRemoval;
    use AnnotationFields\Relation\Cascade;
}