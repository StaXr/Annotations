<?php

declare(strinct_types=1);

namespace StaXr\Annotations\Traits\AnnotationFields;

trait DataType
{
    /**
     * @Enum({"bigint","mediumint","int","smallint","tinyint","decimal", "numeric", "float", "real","double","char","varchar","binary","blob","text","enum","json"})
     */
    public string $type;
}