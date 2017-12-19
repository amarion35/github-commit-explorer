# Github Commit Explorer
========================
## Installing
-------------

  * Install an Apache or Nginx server of your choice
  * Clone the repository
  * Place the root of your php server to /public/index.php
  * Run your server

## Features
-----------

The Github Commit Explorer application allows to navigate in the last commits of any github repository. You have the possibility to search a repository with the user name of the owner and the name of the repository. Then you can access to the list of the last commits. Finally you have access to more details for each commit. When it's possible the profile pictures are linked to the github user page.

## Routes
---------

  * /home

On this page you can search for a repository or try with the torvalds/linux repository. If you try to access to a route which is not defined you will be redirected to this route.

  * /{user}/{repo}/commits

This page give access to the last commits of the repository {repo} owned by {user}. You have access to the search to navigate to an other repository or you can go back to the home page with the top left button. The list give the last commits with

  * /{user}/{repo}/commits/{sha}

Give access to the details of a selected commit. You have a link to see the commit on github, the date, the user, the message and the parent commits with link the see their details.

## Choices
----------

I chose to make this application using the PHP framework Laravel. It was the occasion for me to work and learn a new framework. I didn't use front-end JS framework because I decided to focus on PHP.

## To Do
--------

 * Improve Input management to handle input erros.
 * Implement a sort by author/date.
 * Implement a commit search in a repository.

