<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "promocaogaleria".
 *
 * @property int $id
 * @property string $imagem
 * @property string $descricao
 * @property string $preco
 */
class Promocaogaleria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promocaogaleria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'string'],
            [['descricao','imagem'], 'required'],
            [['imagem'], 'string', 'max' => 255],
            [['imagem'], 'file', 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagem' => 'Imagem',
            'descricao' => 'Descrição',
        ];
    }
}
