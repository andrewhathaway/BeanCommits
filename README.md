#BeanCommits
BeanCommits is a free and simple commit feed for your Beanstalk repositories.

[Website](http://beancommits.andrewhathaway.net)

##Features

  - Easy to use & setup
  - Responsive design
  - Clean look & feel
  - AJAX loading of items
  - Gravatar profile pictures
  - View commits for repository
  - View single commit
  - Easily Customisable
  - Hide commit by having [hide] in comment
  

##Customisation
BeanCommits is easily customisable. If you want to theme your installation, write some CSS or JS, place it in application/css/ (or /js) and then include it your config.php file.

###Including CSS in your config.php
When including CSS in your configuration file you only have to  include the file name, not the path or file extension. You can include single and multiple CSS files at once. Examples of including CSS:
    
    array(
        'css' => 'main'
    )
    
OR
   
    array(
        'css' => array(
            'main',
            'media'
        )
    )

The same goes for JS files. In config.php include an item under 'js'. This can either be an array or a single file. load-more.js is included by default, adding a 'js' item to the config file will require it to be reincluded if you are wanting to use the AJAX load more button.
    
##Installation
Installing in super easy. Grab the ZIP from Github, upload it your host and unzip. Rename config.php.default to config.php and setup your Beanstalk details. 

#Footnote
If you have any feature ideas or any question, be sure to click the link below and let me know. Thanks! 

[Tweet me if you have questions](http://twitter.com/andrewhathaway)