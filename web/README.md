# Easy Install
- Clone the repo or download the zip
- Run `composer install`
- Run `composer update --with-all-dependencies` (optional)
- Create a new mysql/whatever database
- Goto you site address i.e., abcd.xyz
- Run choose 'Config Installer' as profile when installing
- When prompted for *Configuration Directory* type *../config/sync* 
- Once installation is complete in sites/default/settings.php file put `include_once('settings.<REPLACE_WITH_YOUR_ENVIRONEMNT>.php');`

# Tips
- Ideally install on production server first
- This site is alredy with `config_split` module 

# Ideal deployment work flow

_When Pushing_
1. Create a new branch etc...
1. `drush cex`
1. Commit changes to repo
1. `git push`

_When Pulling_
1. `git pull`
1. `composer install`
1. `drush cr`
1. `drush updatedb`
1. `drush cim`
1. `drush cr`
