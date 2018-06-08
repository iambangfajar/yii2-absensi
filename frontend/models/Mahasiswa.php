<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama_mhs
 * @property string $jenis_kelamin
 * @property string $alamat
 *
 * @property RekapAbsen[] $rekapAbsens
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama_mhs', 'jenis_kelamin', 'alamat'], 'required'],
            [['jenis_kelamin'], 'string'],
            [['nim'], 'string', 'max' => 20],
            [['nama_mhs', 'alamat'], 'string', 'max' => 100],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama_mhs' => 'Nama Mhs',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekapAbsens()
    {
        return $this->hasMany(RekapAbsen::className(), ['nim' => 'nim']);
    }
}
