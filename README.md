Capella University Front-end Development Standards, Best Practices and Code Review Process
==========================================================================================
http://fed.capella-id.com


## Branch Updates

Update: 3/18/13 - The initial draft of the site and standards was posted


## Summary:

This document contains guidelines for web applications built by the Creative Technology Team (front end developers) of Capella University. It is to be readily available to anyone who wishes to check or contribute to the iterative progress of our discipline's best practices.

This document's primary motivation is two- fold: 1) code consistency and 2) best practices. By maintaining consistency in coding styles and conventions, we can ease the burden of legacy code maintenance, and mitigate risk of breakage in the future. By adhering to best practices, we ensure optimized page loading, performance and maintainable code.

Code standards are living documents, and should themselves change to reflect the latest best practices, thought leadership, and trends both in the community whose practices they seek to standardize and in the greater development community as a whole. Front-end development is one of the fastest growing disciplines in software development; to ensure that our standards are able to keep pace, we want you to fork us, discuss additions, send us pull requests, and add issues to debate emerging standards and practices.

We hope to encourage other developers to think about how to best standardize their approaches to development, to propose their own ideas for debate and for inclusion in our version of the document, and to adapt our standards for their own unique development practices. What better way of achieving consensus on how best to develop in our discipline than through feedback from members of that discipline themselves?

## Structure of Page Content

The index.php file is used to include each of the .php files contained within the /elements/ directory. We have separated the different sections that make up the page into individual files so that it is easier to edit, basically making the content of the page more modular. This is also part of what we consider a best practice when dealing with large projects, as if it were an application involving lots of code, that several people work on.

Each of these files include content wrapped within sections. The structure of which is used by the function that builds the Table of Contents. As long as you follow the same structure in adding a new section or article to a section it will automatically be added to the Table of Contents.


