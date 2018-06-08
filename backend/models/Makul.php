<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "makul".
 *
 * @property string $kode_makul
 * @property string $kode_prodi
 * @property int $id_dosen
 * @property string $nama_makul
 * @property string $hari
 * @property string $jam_masuk
 * @property string $jam_keluar
 * @property string $kelas
 *
 * @property Prodi $kodeProdi
 * @property Dosen $dosen
 * @property RekapAbsen[] $rekapAbsens
 */
class Makul extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'makul';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_makul', 'kode_prodi', 'id_dosen', 'nama_makul', 'hari', 'jam_masuk', 'jam_keluar', 'kelas'], 'required'],
            [['id_dosen'], 'integer'],
            [['hari'], 'string'],
            [['jam_masuk', 'jam_keluar'], 'safe'],
            [['kode_makul', 'kode_prodi', 'kelas'], 'string', 'max' => 10],
            [['nama_makul'], 'string', 'max' => 50],
            [['kode_makul'], 'unique'],
            [['kode_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['kode_prodi' => 'kode_prodi']],
            [['id_dosen'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['id_dosen' => 'id_dosen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_makul' => 'Kode Makul',
            'kode_prodi' => 'Kode Prodi',
            'id_dosen' => 'Id Dosen',
            'nama_makul' => 'Nama Makul',
            'hari' => 'Hari',
            'jam_masuk' => 'Jam Masuk',
            'jam_keluar' => 'Jam Keluar',
            'kelas' => 'Kelas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeProdi()
    {
        return $this->hasOne(Prodi::className(), ['kode_prodi' => 'kode_prodi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Dosen::className(), ['id_dosen' => 'id_dosen']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekapAbsens()
    {
        return $this->hasMany(RekapAbsen::className(), ['kode_makul' => 'kode_makul']);
    }
}
