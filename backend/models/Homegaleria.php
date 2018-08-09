<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "homegaleria".
 *
 * @property int $id
 * @property string $imagem
 * @property string $descricao
 */
class Homegaleria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homegaleria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao', 'images'], 'required'],
            [['descricao'], 'string'],
            [['images'], 'string', 'max' => 255],
            [['images'],'file','skipOnEmpty' => false, 'extensions' => 'png, jpg, gif', 'maxFiles' => 4,'on'=>'update'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images' => 'Imagem',
            'descricao' => 'Descrição',
        ];
    }

    /*public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->images as $file) {
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }

function scenario()
{
    return [
        'create' => ['imageFiles ', 'carid','name','coverphoto','status'],
        'update' => ['imageFiles ', 'carid','name','coverphoto','status'],
    ];
  }*/
}
