MLM Calls Vk App
================

This app is designed to be used by MLM agents, its main purpose is logging calls and tracking progress of the team.

**Features:**

1. Log how many calls have you made in a day;
2. See how many calls left to make for today;
3. See how many calls made your teammate;
4. Write a little description about every particular call;
5. Get automated recommendations on who to call depending on the result of previous calls;
6. See your profit prediction;
7. Track how many people came to a meeting;
8. Track how many subscribed;
9. Compare yourself with your team;
10. See some call scripts right there;

... and even more!

How to setup
============
0. Clone;
1. chmod 0777 runtime; chmod 0777 web/assets;
2. Create database;
3. Edit config/db.php - fill in your database settings;
4. Edit config/params.php - fill in your app_id and app_secret;
5. Edit config/web.php - fill in urlManager rules;
6. Create users table by typing in terminal "./yii migrate";

You're done! Go ahead and modify controllers/MainController.php and corresponding views! You can use

	\Yii::$app->user->identity->id

to get the id of the current user, as well as these properties:

	\Yii:$app->user->identiry->first_name
	\Yii:$app->user->identiry->last_name

Автор кода: Цыганков Александр <tsygankov.aleksandr@gmail.com>