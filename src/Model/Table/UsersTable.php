<?php

namespace App\Model\Table;

use App\Model\Entity\Users;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        $this->table('users');
        $this->displayField('FirstName', 'Email', 'Mobile', 'City');
        $this->primaryKey('Id');
        $this->addBehavior('Timestamp');

        // Just add the belongsTo relation with CategoriesTable
        
    }

    

}
