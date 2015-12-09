<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendors_trees".
 *
 * @property integer $id
 * @property integer $tree_id
 * @property integer $vendor_id
 *
 * @property Trees $tree
 * @property Vendors $vendor
 */
class VendorsTrees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendors_trees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tree_id', 'vendor_id'], 'required'],
            [['tree_id', 'vendor_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tree_id' => 'Tree ID',
            'vendor_id' => 'Vendor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTree()
    {
        return $this->hasOne(Trees::className(), ['id' => 'tree_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendors::className(), ['id' => 'vendor_id']);
    }
}
