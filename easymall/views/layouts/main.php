<?php
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">
        <title>沙盘管理平台</title>
        <?php $this->head() ?>
        <?php if(isset($this->blocks['head'])) echo $this->blocks['head']?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php echo $this->render('_header') ?>
        <div class="main-container" id="main-container">
            <div class="main-container-inner">
            <?php echo $this->render('_left') ?>
            <section id="main-content">
                <section class="wrapper">
                    <div class="main-content">
                        <?php if (isset($this->params['breadcrumbs'])):?>
                        <div class="breadcrumbs" id="breadcrumbs">
                            <script type="text/javascript">
                                try {
                                    ace.settings.check('breadcrumbs', 'fixed')
                                } catch (e) {
                                }
                            </script>
                            <?= \app\components\BreadcrumbsNew::widget([
                                'links' => $this->params['breadcrumbs']
                            ]) ?>
                        </div>
                        <?php endif;?>
                    </div>
                    <?php echo $content; ?>
                </section>
            </section>
            </div>
        </div>
        <?php $this->endBody() ?>
        <script type="text/javascript">
            // 设置
            function setting(){
                fbwindow('个人设置',"<?php echo \yii\helpers\Url::toRoute('manager/setting') ?>",'');
            }
            // 修改密码
            function modifyPwdMe(){
                fbwindow('修改密码',"<?php echo \yii\helpers\Url::toRoute('operators/modify-pwd') ?>",'');
            }
        </script>
        <?php if(isset($this->blocks['script'])) echo $this->blocks['script']?>
    </body>
</html>
<?php $this->endPage() ?>