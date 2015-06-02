2015-06-02:
install yii2 into code folder:
first, run "composer global require "fxp/composer-asset-plugin:1.0.0",
next, install yii2 into code folder run "composer create-project --prefer-dist yiisoft/yii2-app-basic code" before change dirtory to the root of project

check the result:
add the project to apache listen document root, brower "http://localhost/code/web/index.php" to check whether yii is installed sucessfully
