<?php

namespace denis909\yii;

use Yii;

class ActiveQuery extends \yii\db\ActiveQuery
{

    use JoinRelationTrait;
    
    use HasJoinTrait;

    use WhereDateTrait;

}