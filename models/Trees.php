<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trees".
 *
 * @property integer $id
 * @property string $name
 * @property resource $desc
 * @property string $photo
 *
 * @property VendorsTrees[] $vendorsTrees
 */
class Trees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc'], 'string'],
            [['name'], 'string', 'max' => 150],
            [['photo'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'desc' => 'Desc',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorsTrees()
    {
        return $this->hasMany(VendorsTrees::className(), ['tree_id' => 'id']);
    }
}
