<?php

use Phinx\Migration\AbstractMigration;

class InitialSchema extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     */
    public function change()
    {
        $this->table('author')
             ->addColumn('email', 'string')
             ->addColumn('first_name', 'string')
             ->addColumn('last_name', 'string', array('null' => true))
             ->addColumn('created', 'datetime')
             ->addColumn('modified', 'datetime', array('null' => true))
             ->addColumn('deleted', 'datetime', array('null' => true))
             ->save();

        $this->table('article')
            ->addColumn('author_id', 'integer')
            ->addColumn('title', 'string')
            ->addColumn('content', 'string')
            ->addColumn('last_name', 'string', array('null' => true))
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', array('null' => true))
            ->addColumn('deleted', 'datetime', array('null' => true))
            ->addForeignKey('author_id', 'author', 'id')
            ->save();
    }
}