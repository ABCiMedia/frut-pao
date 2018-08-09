<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publicacao".
 *
 * @property int $id
 * @property string $image
 * @property string $titulo
 * @property string $descricao
 */
class Publicacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publicacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'titulo', 'descricao'], 'required'],
            [['descricao'], 'string'],
            [['image'], 'string', 'max' => 255],
            [['titulo'], 'string', 'max' => 200],
            [['image'],'file', 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'titulo' => 'Titulo',
            'descricao' => 'Descrição',
        ];
    }
}
