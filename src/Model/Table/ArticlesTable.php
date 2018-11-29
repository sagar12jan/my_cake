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
class ArticlesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        $this->table('articles');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
       
        // Just add the belongsTo relation with CategoriesTable
        $this->belongsTo('users', [
            'className' => 'Users',
            'foreignKey' => 'authorId'
        ]);
        // ->setForeignKey('authorId')
        // ;
        $this->hasmany('comments', [
            'className' => 'Comments',
            'foreignKey' => 'articleId'
        ]);
       
    }

    

}
