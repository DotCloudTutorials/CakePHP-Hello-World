To run this code on DotCloud, you need to `get a DotCloud account
<https://www.dotcloud.com/accounts/register/>`_. DotCloud has a free tier,
so you won't even need to draw your wallet!

To deploy on DotCloud::

    dotcloud create my_app
    dotcloud push my_app
    dotcloud run my_app.mysql -- mysql

Now, in the MySQL console, create your database and first table::

    CREATE DATABASE cakephp;
    CREATE TABLE posts (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        body TEXT
    );

That's it! To get the URL of your app, run::

    dotcloud url my_app.www

and point your browser to http://your_url.dotcloud.com/posts.
