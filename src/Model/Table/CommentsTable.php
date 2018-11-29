<?php

namespace App\Model\Table;

use App\Model\Entity\Articles;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 */
class CommentsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        $this->table('comments');
        $this->primaryKey('commentId');
        $this->addBehavior('Timestamp');
       
        // Just add the belongsTo relation with CategoriesTable
        // $this->belongsTo('articles', [
        //     'className' => 'Articles'
        // ])
        // ->setForeignKey('authorId')
        // ;
        $this->belongsTo('users', array(
            'foreignKey' => 'userId'
        ));  
        // $this->belongsTo('Articles', array(
        //     'foreignKey' => 'articleId',
           
        // ));
        // $this->addAssociations([
        //     'belongsTo' => [
        //         'Articles' => ['className' => 'App\Model\Table\ArticlesTable', 'foreignKey'=>'articleId']
        //     ],
        //     // 'hasMany' => ['Comments'],
        //      'belongsToMany' => [
        //         'Users' => ['className' => 'App\Model\Table\UsersTable', 'foreignKey'=>'userId']
        //     ],
        // ]);
    }

    

}
