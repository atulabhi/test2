
OpenEBS Website Contribution Guide
=========================================


1. If you would like to give feedback on existing content, create an issue on design (see, `Creating an Issue`_).

2. If you would like to contribute to new design or want to, 

     -  create an issue (see, `Creating an Issue`_), 
     -  create your own branch (see, `Creating a Branch`_), 
     -  work on the content by creating an RST file, and 
     -  create a pull request (see, `Creating a Pull Request`_).

Review Process for Website Designing
---------------------------------------------------------

1. OpenEBS website receives design issues/pull requests raised by Designer/Internal contributors. 
2. The assignee works on the issue/pull requests and makes designs or update designs as per requirement.
3. The assignee can get the content from other collaborators of the OpenEBS Website project either as rst/md file     or as a comment in the issue. The assignee can also use the "OpenEBS Slack" channel to collect             additional information from the community.
    
   **Note:**
      Before editing the files, familiarize yourself with the reStructured markup.


4. Once assignee is done with designs, then assignee needs to raise a PR here before sending it to reviewers for review.

5. If any changes are required in the design, the reviewer sends feedback comments. The assignee updates the changes in the design.


**Note:**
     **Assignee** :     Intakhab Ali , Amrish
     
     **Reviewers** :    Niti, Sanya , Nishanta, Uma
          
     **Approver** :   Madhuri Hebbar , Uma



Creating an Issue
------------------

1. Go to https://github.com/cloudbytestorage/openebs-website/issues
2. Click **New issue**.
3. Add a short description in the **Title**.
4. You can enter a detailed description in the edit box below.
5. Click **Submit new issue**.

Creating a Branch
-----------------

1. Create your openebs fork from (https://github.com/cloudbytestorage/openebs-website). If you already have a forked           openebs, rebase with the master to get the latest changes. 
2. Create a branch on the openebs fork using the following command.
   ::
   git checkout -b <issue name>-#<issue number>


Creating a Pull Request
-----------------------

1. Go to your fork on Github.
2. Under Branch: master select the branch you created.
3. Click **New pull request**.
4. Add "Fixes #<*Issue number*>" in the commit message.

PR Approval Process
--------------------

1. Assignee creates a PR and sends it to reviewers for review. The reviewers then approve the design or give feedback comments.
2. Open the pull request and click on **Review changes**. 
3. Click **Approve** and **Submit review**.
4. The approver sees that the design is approved by 2 or more the reviewers and closes the issue. The issue gets merged and the new design is available  at https://github.com/cloudbytestorage/openebs-website .

*********
TODO List
*********

.. todolist::
