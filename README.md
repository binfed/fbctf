# FBCTF-Chinese-Version
FBCTF 简中汉化

# 使用说明
按照以下文件地址进行替换

| 文件名 | 文件位置 | 
| ------ | ------ |
| _gameboard.scss | /path/to/fbctf/src/static/css/scss |
| fb-ctf.css | /path/to/fbctf/src/static/css |
| AdminController.php| /var/www/fbctf/src/controllers |
| IndexController.php | /var/www/fbctf/src/controllers |
|Custombranding.php | /var/www/fbctf/src/xhp |
| lang_zh-cn.php | /var/www/fbctf/src/language |

其中`lang_zh-cn.php`为新增文件，使用简中时需要删除原有的`zh-tw`

# 缓存更新

替换完成后更新缓存【重新编译】
```shell
rm /var/cache/hhvm/hhvm.hhbc
hhvm-repo-mode enable "/var/www/fbctf"
chown www-data:www-data /var/cache/hhvm/hhvm.hhbc
service hhvm start
service nginx restart
```
