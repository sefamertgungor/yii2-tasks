<?php

namespace sefamertgungor\tasks\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string|null $task
 * @property string|null $description
 * @property string|null $start_date
 * @property string|null $end_date
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task','description'], 'required'],
            [['description'], 'string'],
            [['start_date', 'end_date'], 'safe'],
            [['task'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task' => 'Task',
            'description' => 'Description',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }
}

