<?php

use yii\db\Migration;

/**
 * Class m201022_105330_create_permission_of_post
 */
class m201022_105330_create_permission_of_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $create=$auth->createPermission('post_create');
        $create->description = 'Create a post';
        $auth->add($create);

        $index=$auth->createPermission('post_index');
        $index->description = 'List a post';
        $auth->add($index);

        $update=$auth->createPermission('post_update');
        $update->description = 'Updater a post';
        $auth->add($update);

        $delete=$auth->createPermission('post_delete');
        $delete->description = 'Delete a post';
        $auth->add($delete);

        $view=$auth->createPermission('post_view');
        $view->description = 'View a post';
        $auth->add($view);

        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $index = $auth->getPermission('post_index');
        if ($index) {
            $auth->remove ($index);
        }

        $update = $auth->getPermission('post_update');
        if ($update) {
            $auth->remove ($update);
        }

        $create = $auth->getPermission('post_create');
        if ($create) {
            $auth->remove ($create);
        }

        $view = $auth->getPermission('post_view');
        if ($view) {
            $auth->remove ($view);
        }

        $delete = $auth->getPermission('post_delete');
        if ($delete) {
            $auth->remove ($delete);
        }


        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201022_105330_create_permission_of_post cannot be reverted.\n";

        return false;
    }
    */
}
