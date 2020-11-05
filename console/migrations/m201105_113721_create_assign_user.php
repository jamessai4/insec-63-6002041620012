<?php

use yii\db\Migration;

/**
 * Class m201105_113721_create_assign_user
 */
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $auth->init();

        $author=$auth->getRole('author');
        $admin=$auth->getRole('admin');
        $superadmin=$auth->getRole('super-admin');

        $auth->assign($author, 1);
        $auth->assign($admin, 2);
        $auth->assign($superadmin, 3);
      
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $auth->init();

        $author =$auth->getRole('author');
        $admin=$auth->getRole('admin');
        $superadmin=$auth->getRole('super-admin');

        $auth->revoke($author, 1);
        $auth->revoke($admin, 2);
        $auth->revoke($superadmin, 3);

        return true;
    }
}
