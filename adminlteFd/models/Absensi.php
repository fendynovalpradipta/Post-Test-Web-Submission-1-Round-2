<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "absensi".
 *
 * @property int $id
 * @property string $date
 * @property string $nim
 * @property string $nama
 * @property string $status
 */
class Absensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'absensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'nim', 'nama', 'status'], 'required'],
            [['date'], 'safe'],
            [['nim', 'nama'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'status' => 'Status',
        ];
    }
}
