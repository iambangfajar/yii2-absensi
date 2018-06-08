<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id_dosen
 * @property string $nama_dosen
 * @property string $nisn
 * @property string $alamat
 *
 * @property Makul[] $makuls
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dosen', 'nisn', 'alamat'], 'required'],
            [['nama_dosen', 'alamat'], 'string', 'max' => 100],
            [['nisn'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'nama_dosen' => 'Nama Dosen',
            'nisn' => 'Nisn',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMakuls()
    {
        return $this->hasMany(Makul::className(), ['id_dosen' => 'id_dosen']);
    }
}
