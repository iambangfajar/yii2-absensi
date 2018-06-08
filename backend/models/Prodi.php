<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property string $kode_prodi
 * @property string $nama_prodi
 * @property string $kode_fakultas
 *
 * @property Makul[] $makuls
 * @property Fakultas $kodeFakultas
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_prodi', 'nama_prodi', 'kode_fakultas'], 'required'],
            [['kode_prodi', 'kode_fakultas'], 'string', 'max' => 10],
            [['nama_prodi'], 'string', 'max' => 50],
            [['kode_prodi'], 'unique'],
            [['kode_fakultas'], 'exist', 'skipOnError' => true, 'targetClass' => Fakultas::className(), 'targetAttribute' => ['kode_fakultas' => 'kode_fakultas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_prodi' => 'Kode Prodi',
            'nama_prodi' => 'Nama Prodi',
            'kode_fakultas' => 'Kode Fakultas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMakuls()
    {
        return $this->hasMany(Makul::className(), ['kode_prodi' => 'kode_prodi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeFakultas()
    {
        return $this->hasOne(Fakultas::className(), ['kode_fakultas' => 'kode_fakultas']);
    }
}
