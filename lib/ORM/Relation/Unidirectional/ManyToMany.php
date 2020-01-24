<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM\Relation\Unidirectional;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields;

final class ManyToMany implements Annotation
{
    use AnnotationFields\Relation\TargetEntity;
    use AnnotationFields\Relation\DirectLink;
    use AnnotationFields\Relation\InverseLink;
    use AnnotationFields\Relation\RelationTableName;
    use AnnotationFields\Relation\Fetch;
    use AnnotationFields\Relation\OrphanRemoval;
    use AnnotationFields\Relation\Cascade;
}