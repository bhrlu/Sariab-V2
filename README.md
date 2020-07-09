Project Sariab
===
Based on **Pressz** guideline

# What is Sariab?

Sariab (www.sariab.ir) is a non-profit blogging campaign which is focused on empowering students, increase mental health level, and motivate them, through an integrated knowledge base made on distributed blogs and free content on internet social networks and website platform.

# Links

Home <http://sariab.ir>
سوالات متداول <https://vrgl.ir/D2lo5>

# What is inside this repository?

Web application which is serving content as the hub is available in this repository.

![Website Status](https://img.shields.io/website?url=http%3A%2F%2Fsariab.ir)
![Build](https://img.shields.io/appveyor/build/Pressz/Sariab-V2)
![Languages](https://img.shields.io/github/languages/count/Pressz/Sariab-V2)
![Top Language](https://img.shields.io/github/languages/top/Pressz/Sariab-V2)
![Issues](https://img.shields.io/codeclimate/issues/Pressz/Sariab-V2)

# Installation

## Install Apache-MySQL-PHP

```
apt install tasksel
tasksel install lamp-server
```

## Configure MySQL

```
mysql_secure_installation
```

## Check apache installation

```
cd /var/www/html
vi index.php
```
> `<?php phpinfo(); ?>`
```
wget http://localhost/index.php
```

## Check the php version

`php --version`

## Create database

```
mysql> CREATE DATABASE `sariab_data`;
```

### Execute database query

From file `db.sql`

## Change config file and set yout cridentials

Set your custom configuration:

file: `config.php`

## Give apache permissions to write

```
sudo chgrp -R www-data /var/www/html
```

# Contribute
1. Install git from git-scm.com
1. Make a **Fork** of the repository
1. **Clone** the project on your machine
1. Change whatever you want
1. Commit your changes
1. **Pull** before push(Notice that you have to choose **Pull From** the main project.)
1. Push
1. Make a **pull request**
1. Tell us your notes
1. Your commits will be merged after review by developers of master branch

## Project TODO list

- [ ] GUI AND DATABASE UPDATES BASED ON NEW WIREFRAME (DOWNLOAD [> WIREFRAME.PDF](docs/prototype/Wireframe.pdf))
- [x] SEARCH AND CATEGORIES POSTS
- [ ] CREATE AN INTERNAL STATISTICS INFRASTRUCTURE (LINKS VISIT COUNT, PAGES VISIT COUNT, NETWORK TRAFIC USAGE, BROWSERS STATISTICS, COUNTRIES STATISTICS, PAGES HEATMAP)
- [ ] CREATE A DONATE PAGE
- [ ] COOKIE BASED RECOMMENDATION
- [ ] UPLOAD IMAGES FOR POSTS
- [ ] DRAG AND DROP POST DESIGN IN DIFFERENT SIZES AND DOWNLOADABLE OUTPUTS (FOR SOCIAL NETWORKS FEED, STORIES, ...)
- [ ] ALLOW USERS TO BOOKMARK POSTS USING COOKIES
- [x] FLASH CARD BEHAVIOR ON A HOMEPAGE POST HOVER
- [ ] POP-UP WINDOW ON HOMEPAGE POST CLICK
- [ ] CREATE A ROADMAP FEATURE WHICH ALLOWS PEOPLE TO FOLLOW POSTS FOR A GOAL
- [ ] LAZY LOAD THE CONTENT ON FIRST PAGE
- [ ] TABLE ARCHIVE VIEW OF POSTS
- [ ] PAGINATION ON ADMIN PANEL DATA TABLES
- [ ] HOMEPAGE SEARCH
- [X] FILE UPLOADER
- [ ] RSS

# Developers
