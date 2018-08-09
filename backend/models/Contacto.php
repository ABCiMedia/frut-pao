<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto".
 *
 * @property string $endereco
 * @property string $email
 * @property int $telefone
 */
class Contacto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['endereco', 'email', 'telefone'], 'required'],
            [['telefone'], 'integer', 'min' => 7],
            [['endereco', 'email'], 'string', 'max' => 200],
            [['endereco'], 'unique'],
            ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'endereco' => 'Endereço',
            'email' => 'E-mail',
            'telefone' => 'Telefone',
        ];
    }
}
