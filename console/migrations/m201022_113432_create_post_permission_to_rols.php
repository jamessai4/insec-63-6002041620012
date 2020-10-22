<?php

use yii\db\Migration;

/**
 * Class m201022_113432_create_post_permission_to_rols
 */
class m201022_113432_create_post_permission_to_rols extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        //role
        $author = $auth->getRole('author');
        $admin = $auth->getRole('admin');
        $superAdmin = $auth->getRole('super-admin');
        //permission
        $listPost = $auth->getPermission('post-index');
        $createPost = $auth->getPermission('post-create');
        $updatePost = $auth->getPermission('post-update');
        $viewPost = $auth->getPermission('post-view');
        $deletePost = $auth->getPermission('post-delete');

        //assign
        $auth->addChild($author,$createPost);
        $auth->addChild($author,$listPost);
        $auth->addChild($author,$viewPost);
        $auth->addChild($author,$updatePost);

        $auth->addChild($admin,$author);
        $auth->addChild($superAdmin,$admin);
        
        $auth->addChild($superAdmin,$deletePost);
      
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201022_113432_create_post_permission_to_rols cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201022_113432_create_post_permission_to_rols cannot be reverted.\n";

        return false;
    }
    */
}
