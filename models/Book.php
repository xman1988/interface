<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 26.02.2019
 * Time: 20:07
 */

namespace app\models;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "books".
 *
**/

class Book extends ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return '{{books}}';
	}
	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['title','price','author_id'], 'required'],
			[ ['price','author_id'],'integer'],
			['title','string', 'min'=>2],
			['title', 'unique'],
		];
	}
}