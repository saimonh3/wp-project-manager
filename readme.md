# WP Project Manager #
**Contributors:** tareq1988, wedevs, asaquzzaman, wpasikur

**Donate Link:** http://tareq.wedevs.com/donate/

**Tags:** project, manager, project manager, project management, todo, todo list, task, basecamp, milestone, message, file, comment, client, team, tracking, planning, lists, reporting, project management plugin for wordpress, project manager, project manager plugin for wordpress, wordpress project management

**Requires at least:** 3.5

**Tested up to:** 4.3

**Stable tag:** trunk

**License:** GPLv2 or later

**License URI:** http://www.gnu.org/licenses/gpl-2.0.html


A WordPress Project Management plugin. Project Management with WordPress has never been this easy!

## Description ##


[![Project Manager Demo](https://j.gifs.com/mLBNQz.gif)](https://www.youtube.com/watch?v=tETwpwjSA4Q)

A WordPress Project Management plugin. Manage your project simply with the \*right\* tools and options. It gives you the taste of basecamp, just inside your loved WordPress.

[Pro Version](http://wedevs.com/plugin/wp-project-manager/) | [Add-ons](http://wedevs.com/wp-project-manager-add-ons/) | [Demo](http://demo.wedevs.com/pm/wp-admin/)

### Add-ons ###
* [Time Tracker](http://wedevs.com/plugin/wp-project-manager/time-tracker/)
* [Sub Task](http://wedevs.com/plugin/wp-project-manager/sub-task/)
* [Invoice](http://wedevs.com/plugin/wp-project-manager/invoice/)
* [Invoice - Stripe gateway](http://wedevs.com/plugin/wp-project-manager/invoice-stripe-gateway/)
* [Project Manager Frontend](http://wedevs.com/plugin/wp-project-manager/wp-project-manager-frontend/) (**free with pro**)


### Features ###
 * **Projects**
   * Create a new project
   * Set title and details of that project
   * Assign users for that project
 * **Messages**
   * Messages are used for discussing about the project with co-workers of  that project
   * You can add attachments on messages
   * Comments can be made for discussion
 * **To-do List**
   * Add as many to-do list as you want with title and description
   * Add tasks, assign users, assign due date
   * See progressbar on the list
   * Add comments on individual to-do lists and to-do's
   * Mark to-do as complete/incomplete
 * **Milestone**
   * Create milestone
   * Assign messages and to-do list on milestone
   * 3 types of milestones are there, a) upcoming, b) completed and c) late milstone
 * **Files**
   * See all the uploaded files on messages and comments in one place and navigate to invidual attached threads.

### Detailed Walkthrough ###

[![Project Manager Demo](https://j.gifs.com/v1e1Eo.gif)](https://www.youtube.com/watch?v=lR61ARrGb28)


### Contribute ###
This may have bugs and lack of many features. If you want to contribute on this project, you are more than welcome. Please fork the repository from [Github](https://github.com/tareq1988/wp-project-manager).

### Author ###
Brought to you by [Tareq Hasan](http://tareq.wedevs.com) from [weDevs](http://wedevs.com)

### Donate ###
Please [donate](http://tareq.wedevs.com/donate/) for this awesome plugin to continue it's development to bring more awesome features.

### Contribution ###
* French translation by Corentin allard
* Dutch translation by eskamedia
* Brazilian Portuguese translation by Anderson
* German translation by Alexander Pfabel
* Spanish translation by Luigi Libet
* Indonesian translation by hirizh
* Polish translation by Jacek Synowiec

## Installation ##

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

## Frequently Asked Questions ##

### Q. Why doesn't it shows up in frontend ###
A. Currently all the project management options resides in the admin panel. No functionality shows up in frontend right now.

### Q. Who can create projects? ###
A. Only Editors and Admin's can projects and edit them.

### Q. Who can create tasklist, todo, messages or milestone? ###
A. Admins and every co-workers from a project can create these.

### Q. Can every member see every project? ###
A. Only admins (editor/administrator) can see all of them. Other user roles can only see their assigned projects.

### Q. Can the plugin be extended? ###
A. Sure, lots of actions and filters are added by default and will add more of them.

### Q. Found a bug ###
A. Found any bugs? Please create an [issue](https://github.com/tareq1988/wp-project-manager/issues) on github.

## Changelog ##

## 1.6.4 - June 22, 2017 ###

 * [new] Task list view on the right corner in to-do list section.
 * [update] Notify co-workers on task completion.
 * [update] Task update action hook.
 * [update] Style sheets updated.
 * [update] Some javascript refactored.
 * [fix] Wrong color is showing for a task on basis of task competion status.
 * [fix] PHP warning on project overview.
 * [fix] PHP warning on my task overview.

### 1.6.3 - June 07, 2017 ###

 * [new] Drag and drop sortability added to the task
 * [update] Task color scheme.
 * [update] Activity graph color scheme in my task section.
 * [update] Single task redirection in my task section.
 * [update] Project duplication.
 * [update] Project overview section.
 * [fix] Grid/List view action on project listing is not working.
 * [fix] Project overview graph is not working.
 * [fix] Not all users of a project is being duplicated when duplicating a project.
 * [fix] Notification is sent to the co-workers when a project is created.
 * [fix] Unable to comment in a task when it is redirected from current task in my task.
 * [fix] Unable to comment in a task when it is redirected from outstanding task in mytask.
 * [fix] Unable to comment in a task when it is redirected from competed task in my task.
 * [fix] User selection is not working in my task.
 * [fix] Date section is not working in activity graph in my task.
 * [fix] Red color is showing for current task in my task.
 * [fix] Overview section in my task is not working
 * [fix] Activity section in my task is not working
 * [fix] Current task section in my task is not working
 * [fix] Outstanding task section in my task is not working
 * [fix] Completed task section in my task is not working
 * [fix] File attachment is not working when commenting in the file section of a project.
 * [fix] Unable to delete a comment in the file section of a project.
 * [fix] Commenting in a discussion board is not working.
 * [fix] Editing a comment in a discussion board is not working.
 * [fix] Deleting a comment in a discussion board is not working.
 * [fix] Javascript shows error when commenting, editing comments and deleting comments in discussion board.

### 1.6.2 - April 27, 2017 ###

 * [new] Email template for mentioning users in a comment. [pro]
 * [new] Moment js dependency added.
 * [new] Compatibility for mentioning users in a comment.
 * [update] Include filter for register project post type.
 * [update] Include filter for register project taxonomy.
 * [update] Change pagination position from left to right.
 * [update] Pagination has been shown up and down of to-do lists content.
 * [update] Single task url.
 * [update] To-do lists progress bar.
 * [update] Unnecessary parameters removed form wp_enqueue_script in cpm.
 * [update] Array declaration according to lower version of php.
 * [fix] Can’t use function return value in write context.
 * [fix] Syntax error, unexpected '['
 * [fix] Filtering for to-do lists private view.
 * [fix] Filtering problem for the visibility of to-do lists create button.
 * [fix] List style problem in tiny-MCE comment box while commenting on discussion board.
 * [fix] WP nonce problem in project discussion.

### 1.6.1 - April 11, 2017 ###

 * [fix] Load JS files only in todo list page
 * [fix] Fix typo in todo list privacy checking capability
 * [fix] Shortcode rendering in comments
 * [fix] Remove users from notification panel outside of the project members
 * [fix] Removed PHP array shorthand declaration
 * [fix] Single task URL problem in My Task

### 1.6 - April 08, 2017 ###

 * [new] Use js library Vue
 * [new] Design layout changed for To-do Lists.
 * [new] Real time update every action for To-do lists.
 * [new] Two way data binding for to-do list edit
 * [new] Two way data binding for task edit
 * [new] Task lazy loading.
 * [new] Vue routing for single To-do list
 * [new] Real time pagination.
 * [new] Completed and incomplete label added for corresponding tasks in single to-list.
 * [update] Discussion editor changed from tricks to tinymce.
 * [update] Real time change of progress bar.
 * [update] Assign user to task options changed from choosen to Vue multiselect.
 * [update] User avatar(gravatar) link changed form 404 to mm
 * [fix] Remove comments link from overview.
 * [fix] All functionalities for to-do list.


### 1.5.1 - September 19, 2016 ###

 * [new] Send Email Notification when a comment updates.
 * [new] Add filter for how many letter to show when image name is long in files tab.
 * [fix] Fixed conflict with buddypress.
 * [fix] Fixed Project creation capability and update language files.
 * [fix] Made Report print friendly.
 * [fix] Files tab loading improvement.
 * [fix] Show all comments in newly uploaded file view.
 * [fix] Client view private discussion.

### 1.5 - August 20, 2016 ###

 * [new] Report section new design (*pro*).
 * [new] New Report item added (*pro*).
 * [new] Files tab new design and add new feature in pro version (*pro*).
 * [new] Add option for create document and connect to other online Docs (*pro*).
 * [new] Add option to upload files / attachment direct to a project (*pro*).
 * [fix] Duplicate mail send on project create.
 * [fix] Change cpm_get_option function.

### 1.4.3 - April 19, 2016 ###

 * [fix] Milestone input date fix and fix project redirect issue after create.
 * [fix] File upload on first discussion problem fix.
 * [fix] Task Done/Undone tick problem fix.
 * [fix] New user create on project create or update problem fix.
 * [fix] Department or personal projects show in ERP integration.

### 1.4.2 - April 6, 2016 ###

 * [fix] Project permission problem in free version

### 1.4.1 - March 28, 2016 ###

 * [new] Task list sticky option added as a replacement for sorting
 * [new] Proper mime type icon set
 * [new] Initial ERP integration added
 * [fix] Front-end URL issue

### 1.4 - March 13, 2016 ###

 * [new] UI Re-designed
 * [new] Tasks now have a description field
 * [tweak] As now we have description in tasks, previous tasks were updated.
 * [tweak] Project post_type changed from `project` to `cpm_project`
 * [tweak] Task post_type changed from `task` to `cpm_task`
 * [tweak] Task List post_type changed from `task_list` to `cpm_task_list`
 * [tweak] Milestone post_type changed from `milestone` to `cpm_milestone`
 * [tweak] Message post_type changed from `message` to `cpm_message`
 * [tweak] project_category taxonomy changed from `project_category` to `cpm_project_category`

### 1.3.8 - October 20, 2015 ###

 * [fix] Front-end current task, outstanding task and completed task url problem fix
 * [fix] Without login can access front-end problem fix
 * [fix] Current task, outstanding task and completed task live update problem fix.
 * [fix] Fetch outstanding and completed task problem fix

### 1.3.7 - October 15, 2015 ###

 * [fix] Fix LogicException on autoloader

### 1.3.6 - October 15, 2015 ###

 * [fix][pro] Add category for front-end
 * [fix] Email notification subject issue fixed

### 1.3.5 - September 29, 2015 ###

 * [fix] User role and items table weren't being created during install

### 1.3.4 - September 19, 2015 ###

 * [fix] Pagination error fix in free version
 * [fix] Project manage/create cap option brought back to free
 * [fix] Version upgrader issue fixed

### 1.3.3 - September 15, 2015 ###

 * [fix] Single project permission issue

### 1.3.2 - September 14, 2015 ###

 * [fix] Project Duplication error
 * [fix] New task assignmed email subject was missing

### 1.3.1 - September 11, 2015 ###

 * [fix] File missing problem for front-end
 * [fix] Plugin path in updater

### 1.3 - September 3, 2015 ###

 * [improved] Free/Pro separation. Massive code change
 * [improved] Email notification templates updated. Removed the settings from admin.

### 0.4.6 ###

* Fix: new project popup, some bug was still in the 0.4.5 version.

### 0.4.5 ###

* Fix: new project popup
* New: Pagination support on projects

### 0.4.4 ###

* Language files updated
* New action hooks and JS triggers added
* Settings API updated

### 0.4.3 ###

* new: Spanish translation
* new: German translation
* new: Indonesian translation
* fix: milestone datepicker issue
* fix: some typo fixes
* improved: comment count next to tasklists

### 0.4.2 ###

* bug fix: project activity/comments on frontend widget
* bug fix: project activity/comments on comment rss
* bug fix: number of milestones
* improved: plugin textdomain loading
* new: project task progressbar on project listing
* new: tasklist sorting
* new: task sorting
* new: Dutch translation language added
* new: Brazilian Portuguese language added

### 0.4.1 ###

* bug fix: attachment association problem on comment update
* bug fix: error on message update

### 0.4 ###

* improved: default email format changed to 'text/plain' from 'text/html'
* improved: toggle added on user notification selection
* improved: only date was showing on single message details, time added
* improved: some filters added on URLs
* bug fix: actual file url hidden on files tab for privacy
* bug fix: any user could edit any users message
* bug fix: any user could delete any users message
* new: admin settings page added
* new: email template added
* new: French translation added
* new: file upload size settings added

### 0.3.1 ###

* comment update bug fix
* project activity is now grouped by date
* "load more" button added on project activity
* some function documentation added.

### 0.3 ###

* Translation capability added
* Attachment security added. All files are now served via a proxy script
  for security with permission checking.

### 0.2.1 ###

* Comments display error fix

### 0.2 ###

* Remove comments from listing publicly
* Post types are hidden from search

### 0.1 ###
Initial version released


## Upgrade Notice ##

Nothing here