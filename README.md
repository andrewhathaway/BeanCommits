#BeanCommits
BeanCommits is a free and simple commit feed for your Beanstalk repositories.

[Website](http://beancommits.andrewhathaway.net)

##Features

  - Easy to use & setup
  - Responsive design
  - Clean look & feel
  - AJAX loading of items
  - Gravatar profile pictures
  - iOS Web App ability built in
  - View commits for repository
  - View single commit
  - Easily Customisable
  - Hide commit by having [hide] in comment
  - Filter to specific repository
  - Hideable repository list
  

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

When including your iOS web app paths, put them under an ios array like this:

    'ios' => array(
        'app-capable' => true,
        'status-bar' => 'default',
        'detect-format' => true,
        'app-title' => 'BeanCommits',
        'app-icons' => array(
            'precomposed' => true,
            '57x57' => 'path-to-57x57',
            '72x72' => 'path-to-72x72',
            '114x114' => 'path-to-114x114',
            '144x144' => 'path-to-144x144'
        ),
        'start-screens' => array(
            '320x460' => 'path-to-320x460',
            '640x920' => 'path-to-640x1096',
            '640x1096' => 'path-to-640x1096',
            'landscape' => array(
                '1024x748' => 'path-to-1024x748',
                '2048x1496' => 'path-to-2048x1496'
            ),
            'portrait' => array(
                '768x1004' => 'path-to-768x1004',
                '1536x2008' => 'path-to-1536x2008'
            )
        )
      )

All sizes and information on iOS Web Apps is available [here.](https://github.com/AndrewHathaway/iOS-Web-App) iOS images should be in the folder application/img/ios. You then provide the filename and format. 

##Filter 
To filter to a certain repository, add 'filter_repository' to the config file with the repository name. If you want to hide the repository list, set 'hide-repository-list' to true in the config array.
    
##Installation
Installing in super easy. Grab the ZIP from Github, upload it your host and unzip. Rename config.php.default to config.php and setup your Beanstalk details. 

#Footnote
If you have any feature ideas or any question, be sure to click the link below and let me know. Thanks! 

[Tweet me if you have questions](http://twitter.com/andrewhathaway)


###Complete config array
    <?php 

        return array(
            'account' => '',
            'username' => '',
            'password' => '',
            'header_title' => '',
            'filter_repository' => '',
            'hide-repository-list' => false,

            'ios' => array(
                'app-capable' => true,
                'status-bar' => 'default',
                'detect-format' => true,
                'app-title' => 'BeanCommits',
                'app-icons' => array(
                    'precomposed' => true,
                    '57x57' => 'path-to-57x57',
                    '72x72' => 'path-to-72x72',
                    '114x114' => 'path-to-114x114',
                    '144x144' => 'path-to-144x144'
                ),
                'start-screens' => array(
                    '320x460' => 'path-to-320x460',
                    '640x920' => 'path-to-640x1096',
                    '640x1096' => 'path-to-640x1096',
                    'landscape' => array(
                      '1024x748' => 'path-to-1024x748',
                      '2048x1496' => 'path-to-2048x1496'
                    ),
                    'portrait' => array(
                      '768x1004' => 'path-to-768x1004',
                      '1536x2008' => 'path-to-1536x2008'
                    )
                )
            )
        );