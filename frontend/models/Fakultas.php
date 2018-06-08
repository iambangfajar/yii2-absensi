<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property string $kode_fakultas
 * @property string $nama_fakultas
 *
 * @property Prodi[] $prodis
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_fakultas', 'nama_fakultas'], 'required'],
            [['kode_fakultas'], 'string', 'max' => 10],
            [['nama_fakultas'], 'string', 'max' => 50],
            [['kode_fakultas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_fakultas' => 'Kode Fakultas',
            'nama_fakultas' => 'Nama Fakultas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdis()
    {
        return $this->hasMany(Prodi::className(), ['kode_fakultas' => 'kode_fakultas']);
    }
}
