#BeanCommints
BeanCommits is a free and simple commit feed for your Beanstalk repositories.

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
BeanCommits is easily customisable. If you want to theme your installation, write some CSS, place it in application/css/ and then include it your config.php file.

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
    
##Installation
Installing in super easy. Grab the ZIP from Github, upload it your host and unzip. Rename config.php.default to config.php and setup your Beanstalk details. 

[Tweet me if you have questions](http://twitter.com/andrewhathaway)