<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "materi".
 *
 * @property integer $id_materi
 * @property string $mapel
 * @property string $tgl_unggah
 * @property string $judul_materi
 * @property string $deskripsi
 * @property string $file
 * @property string $Status
 * @property string $nuptk
 * @property string $tahun_ajaran
 * @property string $semester
 *
 * @property Guru $nuptk0
 * @property Mapel $mapel0
 * @property Semester $semester0
 * @property TahunAjaran $tahunAjaran
 */
class MateriModel extends \yii\db\ActiveRecord {

    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'materi';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['mapel', 'judul_materi', 'deskripsi', 'locationfile', 'Status', 'nuptk', 'tahun_ajaran', 'semester'], 'required'],
            [['tgl_unggah'], 'safe'],
            [['file'], 'file'],
            [['deskripsi', 'Status'], 'string'],
            [['mapel', 'nuptk'], 'string', 'max' => 50],
            [['judul_materi', 'file'], 'string', 'max' => 100],
            [['tahun_ajaran', 'semester'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id_materi' => 'Id Materi',
            'mapel' => 'Mapel',
            'tgl_unggah' => 'Tgl Unggah',
            'judul_materi' => 'Judul Materi',
            'deskripsi' => 'Deskripsi',
            'locationfile' => 'File',
            'Status' => 'Status',
            'nuptk' => 'Nuptk',
            'tahun_ajaran' => 'Tahun Ajaran',
            'semester' => 'Semester',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuptk0() {
        return $this->hasOne(Guru::className(), ['nuptk' => 'nuptk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapel0() {
        return $this->hasOne(Mapel::className(), ['kode_mapel' => 'mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemester0() {
        return $this->hasOne(Semester::className(), ['semester' => 'semester']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTahunAjaran() {
        return $this->hasOne(TahunAjaran::className(), ['tahun_ajaran' => 'tahun_ajaran']);
    }
}
