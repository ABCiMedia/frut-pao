<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loja".
 *
 * @property int $id
 * @property string $nome
 * @property string $endereco
 */
class Loja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'endereco'], 'required'],
            [['nome', 'endereco'], 'string', 'max' => 200],
            [['endereco'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'endereco' => 'Endereço',
        ];
    }
}
