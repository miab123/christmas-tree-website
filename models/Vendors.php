<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendors".
 *
 * @property integer $id
 * @property integer $price_low
 * @property integer $price_high
 * @property string $address
 * @property integer $city
 * @property integer $state
 * @property integer $zip
 * @property string $phone
 * @property string $email
 * @property integer $website
 * @property integer $lat
 * @property integer $lng
 * @property integer $photo
 * @property integer $hours
 * @property integer $name
 * @property resource $desc
 * @property integer $u_cut
 * @property integer $pre_cut
 *
 * @property VendorsTrees[] $vendorsTrees
 */
class Vendors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_low', 'price_high', 'city', 'state', 'zip', 'website', 'lat', 'lng', 'photo', 'hours', 'name', 'u_cut', 'pre_cut'], 'integer'],
            [['desc'], 'string'],
            [['address'], 'string', 'max' => 200],
            [['phone', 'email'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price_low' => 'Price Low',
            'price_high' => 'Price High',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'email' => 'Email',
            'website' => 'Website',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'photo' => 'Photo',
            'hours' => 'Hours',
            'name' => 'Name',
            'desc' => 'Desc',
            'u_cut' => 'U Cut',
            'pre_cut' => 'Pre Cut',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendorsTrees()
    {
        return $this->hasMany(VendorsTrees::className(), ['vendor_id' => 'id']);
    }
}
