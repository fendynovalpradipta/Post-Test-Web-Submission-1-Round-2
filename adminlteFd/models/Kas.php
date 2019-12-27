<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kas".
 *
 * @property int $id
 * @property string $nim
 * @property float|null $setor
 * @property string $tglsetor
 */
class Kas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['setor'], 'number'],
            [['tglsetor'], 'safe'],
            [['nim'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'setor' => 'Setor',
            'tglsetor' => 'Tglsetor',
        ];
    }

    public function getNim0()
    {
        return $this->hasOne(DataMahasiswa::className(), ['nim' => 'nim']);
    }

}
