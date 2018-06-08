<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rekap_absen".
 *
 * @property int $id_rekapabsen
 * @property string $nim
 * @property string $kode_makul
 * @property string $kls1
 * @property string $kls2
 * @property string $kls3
 * @property string $kls4
 * @property string $kls5
 * @property string $kls6
 * @property string $kls7
 * @property string $kls8
 * @property string $kls9
 * @property string $kls10
 * @property string $kls11
 * @property string $kls12
 * @property string $kls13
 * @property string $kls14
 *
 * @property Mahasiswa $nim0
 * @property Makul $kodeMakul
 */
class RekapAbsen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_absen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'kode_makul'], 'required'],
            [['kls1', 'kls2', 'kls3', 'kls4', 'kls5', 'kls6', 'kls7', 'kls8', 'kls9', 'kls10', 'kls11', 'kls12', 'kls13', 'kls14'], 'string'],
            [['nim'], 'string', 'max' => 20],
            [['kode_makul'], 'string', 'max' => 10],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['nim' => 'nim']],
            [['kode_makul'], 'exist', 'skipOnError' => true, 'targetClass' => Makul::className(), 'targetAttribute' => ['kode_makul' => 'kode_makul']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rekapabsen' => 'Id Rekap Absen',
            'nim' => 'NIM',
            'kode_makul' => 'Kode Mata Kuliah',
            'kls1' => 'Kls1',
            'kls2' => 'Kls2',
            'kls3' => 'Kls3',
            'kls4' => 'Kls4',
            'kls5' => 'Kls5',
            'kls6' => 'Kls6',
            'kls7' => 'Kls7',
            'kls8' => 'Kls8',
            'kls9' => 'Kls9',
            'kls10' => 'Kls10',
            'kls11' => 'Kls11',
            'kls12' => 'Kls12',
            'kls13' => 'Kls13',
            'kls14' => 'Kls14',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMakul()
    {
        return $this->hasOne(Makul::className(), ['kode_makul' => 'kode_makul']);
    }
}
