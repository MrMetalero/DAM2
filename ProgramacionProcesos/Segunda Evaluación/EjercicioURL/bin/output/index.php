<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#" >

<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="keywords" content="Data Structures,Algorithms,Python,Java,C,C++,JavaScript,Android Development,SQL,Data Science,Machine Learning,PHP,Web Development,System Design,Tutorial,Technical Blogs,Interview Experience,Interview Preparation,Programming,Competitive Programming,Jobs,Coding Contests,GATE CSE,HTML,CSS,React,NodeJS,Placement,Aptitude,Quiz,Computer Science,Programming Examples,GeeksforGeeks Courses,Puzzles,SSC,Banking,UPSC,Commerce,Finance,CBSE,School,k12,General Knowledge,News,Mathematics,Exams" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0"> 
<link rel="shortcut icon" href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_favicon.png" type="image/x-icon" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


<meta name="theme-color" content="#308D46" />
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1' />

<meta name="image" property="og:image" content="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200x200-min.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<meta name="facebook-domain-verification" content="xo7t4ve2wn3ywfkjdvwbrk01pvdond" />

<script src="https://cdnads.geeksforgeeks.org/synchronously_gfg_ads.min.js"></script>
<script defer src="https://apis.google.com/js/platform.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.14/require.min.js"></script>
<!-- Removed the below script from here to prevent loading google translate js at initial load
<script async src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

<!-- FIXME:-  To be finalised whether we need to put this gpt script in header or footer  -->
<!-- //gpt.js script -->
<!-- <script async src='https://www.googletagservices.com/tag/js/gpt.js'></script> -->
      <script defer src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
  <script defer src="https://cdnads.geeksforgeeks.org/prebid.js?ver=0.1"></script>
<script defer src="https://cdnads.geeksforgeeks.org/gfg_ads.min.js?ver=0.1"></script>

<!-- gfg tabs compatablity bundled js -->

<title>NodeJS NPM - GeeksforGeeks</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="" />
<!--[if lt IE 9]>
<script src="https://www.geeksforgeeks.org/wp-content/themes/iconic-one/js/html5.js" type="text/javascript"></script>
<![endif]-->


<!-- Video Schema for posts only -->
                    <script> 
                        var video_api_response = JSON.parse("{\"id\":10413,\"title\":\"Node.js | NPM (Node Package Manager)\",\"slug\":\"nodejs-npm-node-package-manager\",\"description\":\"<h2>Node.js NPM (Node Package Manager) | Step-by-Step Guide<\/h2><p>In this video, we\u2019ll guide you through using NPM (Node Package Manager) with Node.js. NPM is a powerful tool that comes bundled with Node.js and is used for managing packages, libraries, and dependencies in JavaScript projects. It allows developers to share and reuse code, making it easier to build scalable applications by leveraging a vast ecosystem of open-source packages. This tutorial is perfect for beginners who want to learn how to use NPM for installing, managing, and sharing packages in their Node.js projects. By the end of this tutorial, you\u2019ll understand the basics of NPM and how to use it effectively in your development workflow.<\/p><h2>What is NPM?<\/h2><p>NPM, or Node Package Manager, is the default package manager for Node.js. It is a command-line tool that allows developers to install, update, and manage dependencies in their JavaScript projects. NPM also serves as an online repository for open-source Node.js packages, providing a platform for developers to publish and share their libraries with the community. NPM simplifies dependency management, enabling developers to quickly set up new projects and include third-party modules with minimal effort.<\/p><h3>Key Points Covered:<\/h3><p><strong>Introduction to NPM and Its Benefits:<\/strong> Learn about NPM, its role in the Node.js ecosystem, and why it\u2019s a crucial tool for modern JavaScript development. We\u2019ll discuss the advantages of using NPM, such as easy access to a large collection of libraries, simplified dependency management, and streamlined project setup.<\/p><p><strong>Setting Up NPM:<\/strong> We\u2019ll start by setting up NPM on your system:<\/p><ul><li><strong>Installing Node.js and NPM:<\/strong> Since NPM is bundled with Node.js, you\u2019ll install both by downloading the Node.js installer from the official website. We\u2019ll guide you through the installation process and verify that NPM is installed correctly using the command line.<\/li><li><strong>Checking NPM Version:<\/strong> Learn how to check the installed version of NPM using the npm -v command, ensuring that you have the latest version compatible with your development environment.<\/li><\/ul><p><strong>Using NPM to Manage Packages:<\/strong> NPM provides a wide range of commands to manage packages in your project:<\/p><ul><li><strong>Initializing a New Project with npm init:<\/strong> Start a new Node.js project by creating a package.json file using npm init. This file keeps track of your project\u2019s metadata and dependencies, making it easy to manage and share with others.<\/li><li><strong>Installing Packages:<\/strong> Use npm install to add new packages to your project. We\u2019ll cover how to install both local and global packages, and the differences between them.<ul><li><strong>Local Installation:<\/strong> Installs packages within the project directory, making them available only to that project.<\/li><li><strong>Global Installation:<\/strong> Installs packages globally on your system, making them accessible from anywhere in your environment.<\/li><\/ul><\/li><li><strong>Managing Dependencies:<\/strong> Learn how to specify dependencies and devDependencies in your package.json file, and use commands like npm install, npm update, and npm uninstall to manage these packages throughout your project lifecycle.<\/li><\/ul><p><strong>Understanding Semantic Versioning:<\/strong> NPM uses semantic versioning to manage package versions:<\/p><ul><li><strong>Versioning Conventions:<\/strong> Learn the basics of semantic versioning (MAJOR.MINOR.PATCH) and how NPM uses version ranges to install compatible updates.<\/li><li><strong>Updating Packages:<\/strong> Use commands like npm update and npm outdated to keep your packages up to date, ensuring that your project benefits from the latest features and security patches.<\/li><\/ul><p><strong>Working with NPM Scripts:<\/strong> NPM allows you to define custom scripts in your package.json file to automate tasks:<\/p><ul><li><strong>Creating Scripts:<\/strong> Add custom scripts under the \\\"scripts\\\" section of package.json to automate common tasks like running tests, building your project, or starting a development server.<\/li><li><strong>Running Scripts:<\/strong> Use npm run &lt;script-name&gt; to execute your custom scripts, streamlining your development workflow with easy-to-use commands.<\/li><\/ul><p><strong>Publishing Packages to NPM:<\/strong> NPM is not only for consuming packages but also for sharing your own:<\/p><ul><li><strong>Creating and Publishing a Package:<\/strong> Learn how to publish your own Node.js modules to the NPM registry, making them available for others to use. We\u2019ll guide you through creating a new package, setting up a .npmignore file, and publishing your package using the npm publish command.<\/li><li><strong>Versioning and Updating Your Package:<\/strong> Manage your package versions and update your published packages with new features or bug fixes, using commands like npm version and npm publish.<\/li><\/ul><p><strong>Best Practices for Using NPM:<\/strong> To make the most of NPM in your projects, we\u2019ll discuss best practices such as:<\/p><ul><li><strong>Locking Dependencies with package-lock.json:<\/strong> Use package-lock.json to lock dependencies to specific versions, ensuring consistent builds across different environments.<\/li><li><strong>Handling Security Vulnerabilities:<\/strong> Use npm audit to check for known vulnerabilities in your dependencies and npm audit fix to automatically resolve common security issues.<\/li><\/ul><h2>Why Use NPM in Node.js Development?<\/h2><p>NPM is an essential tool for Node.js developers, providing a centralized platform for managing dependencies, sharing code, and automating project tasks. Its vast ecosystem of packages enables developers to quickly integrate third-party libraries, reduce development time, and focus on building robust applications. This tutorial equips you with the knowledge to use NPM effectively, enhancing your Node.js development workflow and making it easier to manage complex projects.<\/p><p><strong>Topics Included:<\/strong><\/p><p><strong>Introduction to NPM:<\/strong> Overview of NPM\u2019s role in Node.js and its benefits for managing packages and dependencies.<\/p><p><strong>Installing and Using NPM:<\/strong> How to set up NPM, manage packages, and configure your project\u2019s package.json file.<\/p><p><strong>Working with NPM Scripts:<\/strong> Techniques for automating tasks with NPM scripts to streamline development.<\/p><p><strong>Publishing and Managing Your Own Packages:<\/strong> Step-by-step guide to sharing your Node.js modules on the NPM registry.<\/p><p>For a detailed guide and complete code examples, check out the full article on GeeksforGeeks: <a href=\\\"https:\/\/www.geeksforgeeks.org\/node-js-npm-node-package-manager\/\\\">https:\/\/www.geeksforgeeks.org\/node-js-npm-node-package-manager\/<\/a>.<\/p>\",\"source\":\"https:\/\/videos.geeksforgeeks.org\/560517de6220142fd5c6fb0139803b82gfg-NodejsNPMNodePackageManager20241030110239\/video.m3u8\",\"category\":[{\"term_id__id\":91,\"term_id__term_name\":\"Web Development\",\"term_id__term_type\":1,\"term_id__slug\":\"web-development\"},{\"term_id__id\":449,\"term_id__term_name\":\"web-technology\",\"term_id__term_type\":2,\"term_id__slug\":\"web-technology\"}],\"video_type\":\"geeksforgeeks\",\"meta\":{\"thumbnail\":\"https:\/\/media.geeksforgeeks.org\/geeksforgeeks\/NodejsNPMNodePackageManager\/NodejsNPMNodePackageManager20241030110225-small.png\",\"largeThumbnail\":\"https:\/\/media.geeksforgeeks.org\/geeksforgeeks\/NodejsNPMNodePackageManager\/NodejsNPMNodePackageManager20241030110225.jpg\",\"likes\":0,\"views\":260,\"isFeatured\":0,\"isPremium\":0,\"isPublic\":0,\"format\":\"video\/mp4\",\"revision\":{}},\"time\":\"30\/10\/2024\",\"seo\":{\"description\":\"<h2>Node.js NPM (Node Package Manager) | Step-by-Step Guide<\/h2><p>In this \",\"thumbnail\":\"https:\/\/media.geeksforgeeks.org\/geeksforgeeks\/NodejsNPMNodePackageManager\/NodejsNPMNodePackageManager20241030110225-seo.png\"},\"subtitle\":\"https:\/\/videos.geeksforgeeks.org\/560517de6220142fd5c6fb0139803b82gfg-NodejsNPMNodePackageManager20241030110239\/subtitle.vtt\",\"duration\":377,\"post_list\":[{\"post_id\":196431,\"post_title\":\"NodeJS NPM\"}],\"course_link\":null,\"views\":\"260\",\"video_schema\":{\"@context\":\"https:\/\/schema.org\",\"@type\":\"VideoObject\",\"name\":\"Node.js  NPM (Node Package Manager)\",\"description\":\"Node.js NPM (Node Package Manager)  Step-by-Step GuideIn this video, well guide you through using NPM (Node Package Manager) with Node.js. NPM is a powerful tool that comes bundled with Node.js and is used for managing packages, libraries, and dependencies in JavaScript projects. It allows developers to share and reuse code, making it easier to build scalable applications by leveraging a vast ecosystem of open-source packages. This tutorial is perfect for beginners who want to learn how to use NPM for installing, managing, and sharing packages in their Node.js projects. By the end of this tutorial, youll understand the basics of NPM and how to use it effectively in your development workflow.What is NPM?NPM, or Node Package Manager, is the default package manager for Node.js. It is a command-line tool that allows developers to install, update, and manage dependencies in their JavaScript projects. NPM also serves as an online repository for open-source Node.js packages, providing a platform for developers to publish and share their libraries with the community. NPM simplifies dependency management, enabling developers to quickly set up new projects and include third-party modules with minimal effort.Key Points CoveredIntroduction to NPM and Its Benefits Learn about NPM, its role in the Node.js ecosystem, and why its a crucial tool for modern JavaScript development. Well discuss the advantages of using NPM, such as easy access to a large collection of libraries, simplified dependency management, and streamlined project setup.Setting Up NPM Well start by setting up NPM on your systemInstalling Node.js and NPM Since NPM is bundled with Node.js, youll install both by downloading the Node.js installer from the official website. Well guide you through the installation process and verify that NPM is installed correctly using the command line.Checking NPM Version Learn how to check the installed version of NPM using the npm -v command, ensuring that you have the latest version compatible with your development environment.Using NPM to Manage Packages NPM provides a wide range of commands to manage packages in your projectInitializing a New Project with npm init Start a new Node.js project by creating a package.json file using npm init. This file keeps track of your projects metadata and dependencies, making it easy to manage and share with others.Installing Packages Use npm install to add new packages to your project. Well cover how to install both local and global packages, and the differences between them.Local Installation Installs packages within the project directory, making them available only to that project.Global Installation Installs packages globally on your system, making them accessible from anywhere in your environment.Managing Dependencies Learn how to specify dependencies and devDependencies in your package.json file, and use commands like npm install, npm update, and npm uninstall to manage these packages throughout your project lifecycle.Understanding Semantic Versioning NPM uses semantic versioning to manage package versionsVersioning Conventions Learn the basics of semantic versioning (MAJOR.MINOR.PATCH) and how NPM uses version ranges to install compatible updates.Updating Packages Use commands like npm update and npm outdated to keep your packages up to date, ensuring that your project benefits from the latest features and security patches.Working with NPM Scripts NPM allows you to define custom scripts in your package.json file to automate tasksCreating Scripts Add custom scripts under the scripts section of package.json to automate common tasks like running tests, building your project, or starting a development server.Running Scripts Use npm run  ltscript-name gt to execute your custom scripts, streamlining your development workflow with easy-to-use commands.Publishing Packages to NPM NPM is not only for consuming packages but also for sharing your ownCreating and Publishing a Package Learn how to publish your own Node.js modules to the NPM registry, making them available for others to use. Well guide you through creating a new package, setting up a .npmignore file, and publishing your package using the npm publish command.Versioning and Updating Your Package Manage your package versions and update your published packages with new features or bug fixes, using commands like npm version and npm publish.Best Practices for Using NPM To make the most of NPM in your projects, well discuss best practices such asLocking Dependencies with package-lock.json Use package-lock.json to lock dependencies to specific versions, ensuring consistent builds across different environments.Handling Security Vulnerabilities Use npm audit to check for known vulnerabilities in your dependencies and npm audit fix to automatically resolve common security issues.Why Use NPM in Node.js Development?NPM is an essential tool for Node.js developers, providing a centralized platform for managing dependencies, sharing code, and automating project tasks. Its vast ecosystem of packages enables developers to quickly integrate third-party libraries, reduce development time, and focus on building robust applications. This tutorial equips you with the knowledge to use NPM effectively, enhancing your Node.js development workflow and making it easier to manage complex projects.Topics IncludedIntroduction to NPM Overview of NPMs role in Node.js and its benefits for managing packages and dependencies.Installing and Using NPM How to set up NPM, manage packages, and configure your projects package.json file.Working with NPM Scripts Techniques for automating tasks with NPM scripts to streamline development.Publishing and Managing Your Own Packages Step-by-step guide to sharing your Node.js modules on the NPM registry.For a detailed guide and complete code examples, check out the full article on GeeksforGeeks httpswww.geeksforgeeks.orgnode-js-npm-node-package-manager.\",\"thumbnailUrl\":[\"https:\/\/media.geeksforgeeks.org\/geeksforgeeks\/NodejsNPMNodePackageManager\/NodejsNPMNodePackageManager20241030110225-seo.png\",\"https:\/\/media.geeksforgeeks.org\/geeksforgeeks\/NodejsNPMNodePackageManager\/NodejsNPMNodePackageManager20241030110225-small.png\",\"https:\/\/media.geeksforgeeks.org\/geeksforgeeks\/NodejsNPMNodePackageManager\/NodejsNPMNodePackageManager20241030110225.jpg\"],\"uploadDate\":\"2024-10-30T11:49:15Z\",\"duration\":\"PT0H6M17S\",\"contentUrl\":\"https:\/\/www.geeksforgeeks.org\/videos\/nodejs-npm-node-package-manager\/\"}}");
                    </script>
                            <script type="application/ld+json">{"@context":"https://schema.org","@type":"VideoObject","name":"Node.js  NPM (Node Package Manager)","description":"Node.js NPM (Node Package Manager)  Step-by-Step GuideIn this video, well guide you through using NPM (Node Package Manager) with Node.js. NPM is a powerful tool that comes bundled with Node.js and is used for managing packages, libraries, and dependencies in JavaScript projects. It allows developers to share and reuse code, making it easier to build scalable applications by leveraging a vast ecosystem of open-source packages. This tutorial is perfect for beginners who want to learn how to use NPM for installing, managing, and sharing packages in their Node.js projects. By the end of this tutorial, youll understand the basics of NPM and how to use it effectively in your development workflow.What is NPM?NPM, or Node Package Manager, is the default package manager for Node.js. It is a command-line tool that allows developers to install, update, and manage dependencies in their JavaScript projects. NPM also serves as an online repository for open-source Node.js packages, providing a platform for developers to publish and share their libraries with the community. NPM simplifies dependency management, enabling developers to quickly set up new projects and include third-party modules with minimal effort.Key Points CoveredIntroduction to NPM and Its Benefits Learn about NPM, its role in the Node.js ecosystem, and why its a crucial tool for modern JavaScript development. Well discuss the advantages of using NPM, such as easy access to a large collection of libraries, simplified dependency management, and streamlined project setup.Setting Up NPM Well start by setting up NPM on your systemInstalling Node.js and NPM Since NPM is bundled with Node.js, youll install both by downloading the Node.js installer from the official website. Well guide you through the installation process and verify that NPM is installed correctly using the command line.Checking NPM Version Learn how to check the installed version of NPM using the npm -v command, ensuring that you have the latest version compatible with your development environment.Using NPM to Manage Packages NPM provides a wide range of commands to manage packages in your projectInitializing a New Project with npm init Start a new Node.js project by creating a package.json file using npm init. This file keeps track of your projects metadata and dependencies, making it easy to manage and share with others.Installing Packages Use npm install to add new packages to your project. Well cover how to install both local and global packages, and the differences between them.Local Installation Installs packages within the project directory, making them available only to that project.Global Installation Installs packages globally on your system, making them accessible from anywhere in your environment.Managing Dependencies Learn how to specify dependencies and devDependencies in your package.json file, and use commands like npm install, npm update, and npm uninstall to manage these packages throughout your project lifecycle.Understanding Semantic Versioning NPM uses semantic versioning to manage package versionsVersioning Conventions Learn the basics of semantic versioning (MAJOR.MINOR.PATCH) and how NPM uses version ranges to install compatible updates.Updating Packages Use commands like npm update and npm outdated to keep your packages up to date, ensuring that your project benefits from the latest features and security patches.Working with NPM Scripts NPM allows you to define custom scripts in your package.json file to automate tasksCreating Scripts Add custom scripts under the scripts section of package.json to automate common tasks like running tests, building your project, or starting a development server.Running Scripts Use npm run  ltscript-name gt to execute your custom scripts, streamlining your development workflow with easy-to-use commands.Publishing Packages to NPM NPM is not only for consuming packages but also for sharing your ownCreating and Publishing a Package Learn how to publish your own Node.js modules to the NPM registry, making them available for others to use. Well guide you through creating a new package, setting up a .npmignore file, and publishing your package using the npm publish command.Versioning and Updating Your Package Manage your package versions and update your published packages with new features or bug fixes, using commands like npm version and npm publish.Best Practices for Using NPM To make the most of NPM in your projects, well discuss best practices such asLocking Dependencies with package-lock.json Use package-lock.json to lock dependencies to specific versions, ensuring consistent builds across different environments.Handling Security Vulnerabilities Use npm audit to check for known vulnerabilities in your dependencies and npm audit fix to automatically resolve common security issues.Why Use NPM in Node.js Development?NPM is an essential tool for Node.js developers, providing a centralized platform for managing dependencies, sharing code, and automating project tasks. Its vast ecosystem of packages enables developers to quickly integrate third-party libraries, reduce development time, and focus on building robust applications. This tutorial equips you with the knowledge to use NPM effectively, enhancing your Node.js development workflow and making it easier to manage complex projects.Topics IncludedIntroduction to NPM Overview of NPMs role in Node.js and its benefits for managing packages and dependencies.Installing and Using NPM How to set up NPM, manage packages, and configure your projects package.json file.Working with NPM Scripts Techniques for automating tasks with NPM scripts to streamline development.Publishing and Managing Your Own Packages Step-by-step guide to sharing your Node.js modules on the NPM registry.For a detailed guide and complete code examples, check out the full article on GeeksforGeeks httpswww.geeksforgeeks.orgnode-js-npm-node-package-manager.","thumbnailUrl":["https://media.geeksforgeeks.org/geeksforgeeks/NodejsNPMNodePackageManager/NodejsNPMNodePackageManager20241030110225-seo.png","https://media.geeksforgeeks.org/geeksforgeeks/NodejsNPMNodePackageManager/NodejsNPMNodePackageManager20241030110225-small.png","https://media.geeksforgeeks.org/geeksforgeeks/NodejsNPMNodePackageManager/NodejsNPMNodePackageManager20241030110225.jpg"],"uploadDate":"2024-10-30T11:49:15Z","duration":"PT0H6M17S","contentUrl":"https://www.geeksforgeeks.org/videos/nodejs-npm-node-package-manager/"}</script>
      
<!-- adding article schema markup -->


<!--POST SCHEMA through API-->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "id": "https://www.geeksforgeeks.org/node-js-npm-node-package-manager/"
  },
  "headline": "NodeJS NPM",
  "datePublished": "2018-04-28 07:06:13",
  "dateModified": "2024-10-15 04:52:48",
  "image": {
    "@type": "ImageObject",
    "url": "https://media.geeksforgeeks.org/wp-content/uploads/20230712101623/npm.webp",
    "width": "1050",
    "height": "503"
  },
  "author": {
    "@type": "Organization",
    "name": "GeeksforGeeks",
    "url": "https://www.geeksforgeeks.org/",
    "logo": {
      "@type": "ImageObject",
      "url": "https://media.geeksforgeeks.org/wp-content/cdn-uploads/logo-new-2.svg",
      "width": "301",
      "height": "40"
    }
  },
  "publisher": {
    "@type": "Organization",
    "name": "GeeksforGeeks",
    "url": "https://www.geeksforgeeks.org/",
    "logo": {
      "@type": "ImageObject",
      "url": "https://media.geeksforgeeks.org/wp-content/cdn-uploads/logo-new-2.svg",
      "width": "301",
      "height": "40"
    }
  },
  "description": "NPM (Node Package Manager) is the package manager for Node and is written entirely in JavaScript. Developed by Isaac Z. Schlueter, it was initially released on January 12, 2010. NPM manages all the packages and modules for Node and consists of command line client npm. Table of ContentWhat is NPM?Some",
  "about": [
    {
      "@type": "Thing",
      "name": "TechnicalScripter"
    },
    {
      "@type": "Thing",
      "name": "Javascript"
    },
    {
      "@type": "Thing",
      "name": "WebTechnologies"
    },
    {
      "@type": "Thing",
      "name": "JavascriptQuestions"
    },
    {
      "@type": "Thing",
      "name": "NodeJs"
    },
    {
      "@type": "Thing",
      "name": "NodeNpm"
    }
  ]
}</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "url": "https://www.geeksforgeeks.org/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.geeksforgeeks.org/search/{search_term_string}/",
    "query-input": "required name=search_term_string"
  }
}</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "GeeksforGeeks",
  "url": "https://www.geeksforgeeks.org/",
  "logo": "https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200817185016/gfg_complete_logo_2x-min.png",
  "description": "A computer science portal for geeks. It contains well written, well thought and well explained computer science and programming articles, quizzes and practice/competitive programming/company interview Questions.",
  "founder": [
    {
      "@type": "Person",
      "name": "Sandeep Jain",
      "url": "https://in.linkedin.com/in/sandeep-jain-b3940815"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/geeksforgeeks.org/",
    "https://twitter.com/geeksforgeeks",
    "https://www.linkedin.com/company/1299009",
    "https://www.youtube.com/geeksforgeeksvideos/"
  ]
}</script>

<script>
    var arrPostCat = new Array();
    var arrPostCatName="JavaScript";
            arrPostCat.push('2629');
            arrPostCat.push('3654');
            arrPostCat.push('1788');
            arrPostCat.push('2628');
        var tIds = "2629,3654,1788,2628,4850,4874";
    var termsNames = "JavaScript,WebTechnologies,Node.js,TechnicalScripter,JavaScriptQuestions,Nodenpm";
    var tIdsInclusiveParents = "2629,3654,1788,2628,4850,4874"
    var domain = 1;
    var arrPost = new Array();
    var post_id = "196431";
    var post_type = "post";
    var post_slug = window.location.href;
    var ip = "64.252.73.156";
    var post_title = `NodeJS NPM`;
    var post_status = "publish";
    var practiceAPIURL="https://practiceapi.geeksforgeeks.org/";
    var practiceURL="https://practice.geeksforgeeks.org/";
    var post_date = "2018-04-28 19:06:13";
    var commentSysUrl = "https://discuss.geeksforgeeks.org/commentEmbedV2.js";
    //var postAdApiUrlString = "";
    var link_on_code_run = '';
    var link_search_modal_top = '';
    var country_code_cf = "IN";
    
    
        var postAdApiUrlString = '2628/2629/3654/1788/2628/4850/4874/';
</script>




<!-- This site is optimized with the Yoast SEO plugin v7.6 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="A Computer Science portal for geeks. It contains well written, well thought and well explained computer science and programming articles, quizzes and practice/competitive programming/company interview Questions."/>
<link rel="canonical" href="https://www.geeksforgeeks.org/node-js-npm-node-package-manager/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="NodeJS NPM - GeeksforGeeks" />
<meta property="og:description" content="A Computer Science portal for geeks. It contains well written, well thought and well explained computer science and programming articles, quizzes and practice/competitive programming/company interview Questions." />
<meta property="og:url" content="https://www.geeksforgeeks.org/node-js-npm-node-package-manager/" />
<meta property="og:site_name" content="GeeksforGeeks" />
<meta property="article:tag" content="JavaScript-Questions" />
<meta property="article:tag" content="Node-npm" />
<meta property="article:section" content="Technical Scripter" />
<meta property="article:published_time" content="2018-04-28T19:06:13+00:00" />
<meta property="article:modified_time" content="2024-10-15T16:52:44+00:00" />
<meta property="og:updated_time" content="2024-10-15T16:52:44+00:00" />
<meta property="og:image" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-version.png" />
<meta property="og:image:secure_url" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-version.png" />
<meta property="og:image" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-init-2.png" />
<meta property="og:image:secure_url" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-init-2.png" />
<meta property="og:image" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-install-express-save.png" />
<meta property="og:image:secure_url" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-install-express-save.png" />
<meta property="og:image" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-install-nodemon-globally.png" />
<meta property="og:image:secure_url" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-install-nodemon-globally.png" />
<meta property="og:image" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-uninstall-express-example.png" />
<meta property="og:image:secure_url" content="https://media.geeksforgeeks.org/wp-content/uploads/npm-uninstall-express-example.png" />
<meta property="og:image" content="https://media.geeksforgeeks.org/wp-content/uploads/semantic.png" />
<meta property="og:image:secure_url" content="https://media.geeksforgeeks.org/wp-content/uploads/semantic.png" />
<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"Organization","url":"https:\/\/www.geeksforgeeks.org\/","sameAs":[],"@id":"https:\/\/www.geeksforgeeks.org\/#organization","name":"GeeksforGeeks","logo":"http:\/\/www.geeksforgeeks.org\/wp-content\/uploads\/gfg_200X200-1.png"}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//www.geeksforgeeks.org' />
<link rel='dns-prefetch' href='//s.w.org' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.geeksforgeeks.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='custom-style-css'  href='https://www.geeksforgeeks.org/wp-content/themes/iconic-one/css/gfg.min.css?ver=11.74' type='text/css' media='all' />
<script type='text/javascript' src='https://code.jquery.com/jquery-3.7.1.min.js?ver=3.7.1'></script>
<script type='text/javascript' src='https://code.jquery.com/jquery-migrate-3.5.2.min.js?ver=3.5.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var gfgObject = {"authUrl":"https:\/\/auth.geeksforgeeks.org\/","writeApiUrl":"https:\/\/apiwrite.geeksforgeeks.org\/","writeUrl":"https:\/\/write.geeksforgeeks.org\/","utilUrl":"https:\/\/util.geeksforgeeks.org\/","apiUrl":"https:\/\/api.geeksforgeeks.org\/","cfApiUrl":"https:\/\/gfgapi.geeksforgeeks.org\/","baseCompilerURL":"https:\/\/codejudge.geeksforgeeks.org\/","idePageBaseUrl":"https:\/\/ide.geeksforgeeks.org\/","gfgApiScriptUrl":"https:\/\/apiscript.geeksforgeeks.org\/","gfgSiteUrl":"https:\/\/www.geeksforgeeks.org\/","curatedListId":"1","curatedListTitle":"SDE Sheet Problems","utilDjangoCfUrl":"https:\/\/utilapi.geeksforgeeks.org\/","premiumCheckoutSlug":"premium-plans-payment\/","premiumLandingSlug":"premium-plans\/","premiumCssUrl":"https:\/\/www.geeksforgeeks.org\/wp-content\/themes\/iconic-one\/css\/gfgpremium.min.css?ver=1.6","premiumJsUrl":"https:\/\/www.geeksforgeeks.org\/wp-content\/themes\/iconic-one\/js\/gfgpremium.min.js?ver=1.5","utilGoogleUrl":"https:\/\/ugprod.geeksforgeeks.org\/","communityApiUrl":"https:\/\/communityapi.geeksforgeeks.org\/","utilDjangoUrl":"https:\/\/gfgutil.geeksforgeeks.org\/","gfgPracticeUrl":"https:\/\/practiceapi.geeksforgeeks.org\/","gfgMediaUrl":"https:\/\/media.geeksforgeeks.org\/","authDjangoApiUrl":"https:\/\/authapi.geeksforgeeks.org\/","gfgMlApiUrl":"https:\/\/recommendations.geeksforgeeks.org\/","is_home":"","is_category":"","userlevelPremiumPlus":"2","practiceUrl":"https:\/\/practice.geeksforgeeks.org\/","gfgNotificationsApiUrl":"https:\/\/notificationsapi.geeksforgeeks.org\/"};
/* ]]> */
</script>
<script type='text/javascript' async="async" src='https://www.geeksforgeeks.org/wp-content/themes/iconic-one/js/gfg.min.js?ver=13.37'></script>

<link rel='shortlink' href='https://www.geeksforgeeks.org/?p=196431' />
<style>
#wpadminbar{
background: #ff0000 !important;
}
</style>
<style type="text/css" id="custom-background-css">
body.custom-background { background-color: #ffffff; }
</style>
<link rel="icon" href="https://www.geeksforgeeks.org/wp-content/uploads/gfg_200X200-100x100.png" sizes="32x32" />
<link rel="icon" href="https://www.geeksforgeeks.org/wp-content/uploads/gfg_200X200.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.geeksforgeeks.org/wp-content/uploads/gfg_200X200.png" />
<meta name="msapplication-TileImage" content="https://www.geeksforgeeks.org/wp-content/uploads/gfg_200X200.png" />

<!--
<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

 AutoAds
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
google_ad_client: "ca-pub-9465609616171866",
enable_page_level_ads: true
});
</script>
-->




<style>


@media (max-width:1043px) and (min-width:992px) {
 .hide-1043992 {
   display: none!important;
 }
}

.mobile-header-list-item{
    padding-left:30px; 
    padding-right:10px;
    margin-top:5px;
}

.mobile-header-list{
    border-bottom: 1px solid rgba(158, 158, 158, 0.3) !important;
}

.mobile-header-list .dropdown-title{
    border-bottom: none !important;
    font-size: 16px!important; 
    padding: 0px!important; 
    padding-left: 45px!important; 
    font-weight: normal;
}

.mobile-header-list .upside::after{
    transform: rotate(180deg);
}

</style>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Ads: 474915276 -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-474915276"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-474915276');
</script> -->

</head>

<body class="post-template-default single single-post postid-196431 single-format-standard custom-background custom-background-white">

    <script>
        // Dark mode script

        const gfgThemeList = Object.freeze({
            LIGHT: "gfgThemeLight",
            DARK: "gfgThemeDark"
        })
        const getThemeFromCookie = () => {
            let gfg_def_theme = "";
            let cookies = document.cookie;
            let cooks = cookies.split(";");
        
            for (let i = 0; i < cooks.length; i++) {   
                let icook = cooks[i].split("=");
                if (icook[0].trim() == "gfg_theme") {
                    gfg_def_theme = icook[1].trim();
                }
            }
            return gfg_def_theme
        }
        if(!(post_slug.includes('premium-plans-payment/') || post_slug.includes('premium-plans/'))){
            var isDarkMode = getThemeFromCookie() == gfgThemeList.DARK ? true : false;
            document.querySelector("body").setAttribute("data-dark-mode", isDarkMode);
        }
 

        function setSearchBarFocus() {
          const myTimeout = setTimeout(searchBarFocus, 0);
          function searchBarFocus() {
            document.getElementById("gcse-search-input").focus();
          }
        }

        
    </script>

    <!-- <div class="header-main__wrapper not-fixed"> -->
    <nav>
    <div class="header-main__wrapper">

        <a class="gfg-stc" style="top:0" href="#main">Skip to content</a>

        <a href="https://www.geeksforgeeks.org/" aria-label="Logo" class="header-main__logo">
            <div class="_logo">
                <!-- Original Logo -->
                <img class="gfg_logo_img" style="height: 30px; width: 80px; max-width: fit-content;" src="https://media.geeksforgeeks.org/gfg-gg-logo.svg" alt="geeksforgeeks">
            </div>
        </a>
        <div class="header-main__container">
            <!-- for mobile only -->
            
        <!-- For Web view only -->
        <ul class="header-main__list"><li class="header-main__list-item Header_1" data-parent="false" aria-expanded="true" data-expandable="true"><span>Courses</span><i class="gfg-icon gfg-icon_arrow-down gfg-icon_header"></i><ul class="mega-dropdown Screen_1"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/dsa-to-development-coding-guide?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">DSA to Development</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>For Working Professionals</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/geeks-classes-live?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Data Structure & Algorithm Classes (Live)</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/mastering-system-design-low-level-to-high-level-solutions?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">System Design (Live)</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/Java-backend-live?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">JAVA Backend Development(Live)</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/devops-live?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">DevOps(Live)</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/Data-Structures-With-Python?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Data Structures & Algorithms in Python</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>For Students</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/complete-interview-preparation?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Interview Preparation Course</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/gate-live-course/?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">GATE CS & IT 2024</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/data-science-live?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Data Science (Live)</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/dsa-self-paced?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Data Structure & Algorithm-Self Paced(C++/JAVA)</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/competitive-programming-cp?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Master Competitive Programming(Live)</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/full-stack-node?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Full Stack Development with React & Node JS(Live)</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/full-stack-node?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Full Stack Development</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/data-science-live?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">Data Science Program</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses?itm_source=geeksforgeeks&itm_medium=main_header&itm_campaign=courses" target="_self">All Courses</a></li></ul></li><li class="header-main__list-item Header_2" data-parent="false" aria-expanded="true" data-expandable="true"><span>Tutorials</span><i class="gfg-icon gfg-icon_arrow-down gfg-icon_header"></i><ul class="mega-dropdown Screen_1"><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Web Development</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/web-development/?ref=dhm" target="_self">Web Development Roadmap</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/front-end-development/?ref=dhm" target="_self">Front-End Development</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/backend-development/?ref=dhm" target="_self">Back-End Development</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/what-is-full-stack-development/?ref=dhm" target="_self">Full Stack Development</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/mern-stack/?ref=dhm" target="_self">MERN Stack</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/mean-stack/?ref=dhm" target="_self">MEAN Stack</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/web-development-projects/?ref=dhm" target="_self">Web Development Projects</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Web Development using Python</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/django-tutorial/?ref=dhm" target="_self">Django</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/flask-tutorial/?ref=dhm" target="_self">Flask</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/introduction-postman-api-development/?ref=dhm" target="_self">Postman</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/introduction-to-github/?ref=dhm" target="_self">Github</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/python-web-scraping-tutorial/?ref=dhm" target="_self">Web Scrapping in Python</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>ML & Data Science</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Machine Learning</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/machine-learning/?ref=dhm" target="_self">Machine Learning Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/machine-learning-mathematics/?ref=dhm" target="_self">Maths for ML</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/machine-learning-projects/?ref=dhm" target="_self">ML Projects</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/100-days-of-machine-learning/?ref=dhm" target="_self">100 Days of Machine Learning</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/data-science-with-python-tutorial/?ref=dhm" target="_self">Data Science Tutorial</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Data Science Packages</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/pandas-tutorial/?ref=dhm" target="_self">Pandas Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/numpy-tutorial/?ref=dhm" target="_self">NumPy Tutorial</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Data Visualization</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/python-data-visualization-tutorial/?ref=dhm" target="_self">Data Visualization with Python</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/data-visualization-in-r/?ref=dhm" target="_self">Data Visualization with R</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/tableau-tutorial/?ref=dhm" target="_self">Tableau</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/power-bi-tutorial/?ref=dhm" target="_self">Power BI</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Data Analysis</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/data-analysis-with-python/?ref=dhm" target="_self">Data Analysis with Python</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/data-analysis-using-r/?ref=dhm" target="_self">Data Analysis with R</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/100-days-of-data-analytics/?ref=dhm" target="_self">100 Days of Data Analytics</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/deep-learning-tutorial/?ref=dhm" target="_self">Deep Learning</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/natural-language-processing-nlp-tutorial/?ref=dhm" target="_self">NLP Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/opencv-python-tutorial/?ref=dhm" target="_self">OpenCV Tutorial</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Interview Questions</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/machine-learning-interview-questions/?ref=dhm" target="_self">Machine Learning Interview Question</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/deep-learning-interview-questions/?ref=dhm" target="_self">Deep Learning Interview Question</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/r-interview-questions/?ref=dhm" target="_self">R Interview Questions</a></li></ul></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Data Structures & Algorithms</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Data Structures</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/array-data-structure-guide/?ref=dhm" target="_self">Arrays</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/matrix/?ref=dhm" target="_self">Matrix</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/string-data-structure/?ref=dhm" target="_self">Strings</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/linked-list-data-structure/?ref=dhm" target="_self">Linked List</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/stack-data-structure/?ref=dhm" target="_self">Stack</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/queue-data-structure/?ref=dhm" target="_self">Queue</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/binary-tree-data-structure/?ref=dhm" target="_self">Binary Tree</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/binary-search-tree-data-structure/?ref=dhm" target="_self">Binary Search Tree</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/heap-data-structure/?ref=dhm" target="_self">Heap</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/hashing-data-structure/?ref=dhm" target="_self">Hashing</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/graph-data-structure-and-algorithms/?ref=dhm" target="_self">Graph</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/advanced-data-structures/?ref=dhm" target="_self">Advanced Data Structure</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Algorithms</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/design-and-analysis-of-algorithms/?ref=dhm" target="_self">Analysis of Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/searching-algorithms/?ref=dhm" target="_self">Searching Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/sorting-algorithms/?ref=dhm" target="_self">Sorting Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/greedy-algorithms/?ref=dhm" target="_self">Greedy Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/dynamic-programming/?ref=dhm" target="_self">Dynamic Programming</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/graph-data-structure-and-algorithms/?ref=dhm" target="_self">Graph Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/recursion-algorithms/?ref=dhm" target="_self">Recursion</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/backtracking-algorithms/?ref=dhm" target="_self">Backtracking</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/divide-and-conquer/?ref=dhm" target="_self">Divide and Conquer</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/mathematical-algorithms/?ref=dhm" target="_self">Mathematical Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/geometric-algorithms/?ref=dhm" target="_self">Geometric Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/bitwise-algorithms/?ref=dhm" target="_self">Bitwise Algorithms</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/randomized-algorithms/?ref=dhm" target="_self">Randomized Algorithms</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/learn-data-structures-and-algorithms-dsa-tutorial/?ref=dhm" target="_self">Complete DSA Tutorial</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Company Wise SDE Sheets</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/facebookmeta-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Facebook SDE Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/amazon-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Amazon SDE Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/apple-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Apple SDE Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/netflix-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Netflix SDE Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/google-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Google SDE Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/wipro-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Wipro Coding Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/infosys-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Infosys Coding Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/tcs-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">TCS Coding Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/cognizant-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">Cognizant Coding Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/hcl-sde-sheet-interview-questions-and-answers/?ref=dhm" target="_self">HCL Coding Sheet</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>DSA Cheat Sheets</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/top-75-dsa-questions/?ref=dhm" target="_self">Top 75 DSA Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/blind-75/?ref=dhm" target="_self">Blind 75</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/most-asked-dsa-interview-problems-for-beginners/?ref=dhm" target="_self">DSA Sheet for Beginners</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/sde-sheet-a-complete-guide-for-sde-preparation/?ref=dhm" target="_self">SDE Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/must-do-coding-questions-for-companies-like-amazon-microsoft-adobe/?ref=dhm" target="_self">FAANG Coding Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/dsa-sheet-by-love-babbar/?ref=dhm" target="_self">Love Babbar Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/must-do-questions-for-companies-like-tcs-cts-hcl-ibm/?ref=dhm" target="_self">Mass Recruiter Sheet</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/must-do-coding-questions-for-product-based-companies/?ref=dhm" target="_self">Product-Based Coding Sheet</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/competitive-programming-a-complete-guide/?ref=dhm" target="_self">Competitive Programming</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>System Design</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/system-design-tutorial/?ref=dhm" target="_self">System Design Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/software-design-patterns/?ref=dhm" target="_self">Software Design Patterns</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/complete-roadmap-to-learn-system-design/?ref=dhm" target="_self">System Design Roadmap</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/top-10-system-design-interview-questions-and-answers/?ref=dhm" target="_self">Top 10 System Design Interview Questions</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Interview Corner</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/company-preparation/?ref=dhm" target="_self">Company Preparation</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/interview-preparation-for-software-developer/?ref=dhm" target="_self">Top Topics</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/must-coding-questions-company-wise/?ref=dhm" target="_self">Practice Company Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/company-interview-corner/?ref=dhm" target="_self">Interview Experiences</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/experienced-interview-experiences-company-wise/?ref=dhm" target="_self">Experienced Interviews</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/internship-interview-experiences-company-wise/?ref=dhm" target="_self">Internship Interviews</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/competitive-programming-a-complete-guide/?ref=dhm" target="_self">Competitive Programming</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/quiz-corner-gq/?ref=dhm" target="_self">Multiple Choice Quizzes</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/aptitude-questions-and-answers/?ref=dhm" target="_self">Aptitude for Placements</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/puzzles/?ref=dhm" target="_self">Puzzles for Interviews</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Languages</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/c-programming-language/?ref=dhm" target="_self">C</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/c-plus-plus/?ref=dhm" target="_self">C++</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/java/?ref=dhm" target="_self">Java</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/python-programming-language/?ref=dhm" target="_self">Python</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/r-tutorial/?ref=dhm" target="_self">R Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/csharp-programming-language/?ref=dhm" target="_self">C#</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/sql-tutorial/?ref=dhm" target="_self">SQL</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/scala-programming-language/?ref=dhm" target="_self">Scala</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/perl-programming-language/?ref=dhm" target="_self">Perl</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/golang/?ref=dhm" target="_self">Go Language</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>CS Subjects</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/engineering-mathematics-tutorials/?ref=dhm" target="_self">Engineering Mathematics</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/operating-systems/?ref=dhm" target="_self">Operating System</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/dbms/?ref=dhm" target="_self">DBMS</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/computer-network-tutorials/?ref=dhm" target="_self">Computer Networks</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/computer-organization-and-architecture-tutorials/?ref=dhm" target="_self">Computer Organization and Architecture</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/theory-of-computation-automata-tutorials/?ref=dhm" target="_self">Theory of Computation</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/compiler-design-tutorials/?ref=dhm" target="_self">Compiler Design</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/digital-electronics-logic-design-tutorials/#blg/?ref=dhm" target="_self">Digital Logic</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/software-engineering/?ref=dhm" target="_self">Software Engineering</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>DevOps And Linux</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/devops-tutorial/?ref=dhm" target="_self">DevOps Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/git-tutorial/?ref=dhm" target="_self">GIT</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/aws-tutorial/?ref=dhm" target="_self">AWS</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/kubernetes-tutorial/?ref=dhm" target="_self">Kubernetes</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/docker-tutorial/?ref=dhm" target="_self">Docker</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/microsoft-azure/?ref=dhm" target="_self">Microsoft Azure Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/google-cloud-platform-tutorial/?ref=dhm" target="_self">Google Cloud Platform</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/devops-roadmap/?ref=dhm" target="_self">DevOps Roadmap</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/devops-interview-questions/?ref=dhm" target="_self">DevOps Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/linux-tutorial/?ref=dhm" target="_self">Linux</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>School Learning</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/ncert-class-8th-latest-syllabus-based-study-material/?ref=dhm" target="_self">Class 8 Study Material</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/ncert-class-9th-latest-syllabus-based-study-material/?ref=dhm" target="_self">Class 9 Study Material</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/ncert-class-10th-latest-syllabus-based-study-material/?ref=dhm" target="_self">Class 10 Study Material</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/ncert-class-11th-latest-syllabus-based-study-material/?ref=dhm" target="_self">Class 11 Study Material</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/ncert-class-12th-latest-syllabus-based-study-material/?ref=dhm" target="_self">Class 12 Study Material</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/english-grammar/?ref=dhm" target="_self">English Grammar</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/geeksforgeeks-school/?ref-dhm" target="_self">GfG School</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/commerce/?ref=dhm" target="_self">Commerce</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>GATE</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/courses/gate-test-series-2024/?ref=dhm" target="_self">GATE CS/IT Test Series 2024</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/gate-cs-notes-gq/?ref=dhm" target="_self">GATE Computer Science Notes</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/lmns-gq/?ref=dhm" target="_self">Last Minute Notes</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/gate-corner-2-gq/?ref=dhm" target="_self">GATE CS Solved Papers</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/original-gate-previous-year-question-papers-cse-and-it-gq/?ref=dhm" target="_self">GATE CS Original Papers and Official Keys</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/gate-cse-syllabus/?ref=dhm" target="_self">GATE CS 2025 Syllabus</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/gate-data-science-and-artificial-intelligence-syllabus/?ref=dhm" target="_self">GATE DA 2025 Syllabus</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Other CS Exams</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_3"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/isro-cs-preparation/?ref=dhm" target="_self">ISRO</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/ugc-net-cs-previous-year-question-solution/?ref=dhm" target="_self">UGC NET</a></li></ul></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/videos/?ref=dhm" target="_self">GeeksforGeeks Videos</a></li></ul></li><li class="header-main__list-item Header_3" data-parent="false" aria-expanded="true" data-expandable="true"><span>HTML/CSS</span><i class="gfg-icon gfg-icon_arrow-down gfg-icon_header"></i><ul class="mega-dropdown Screen_1"><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>HTML</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-tutorial/?ref=dhm" target="_self">HTML Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-tags-a-to-z-list/?ref=dhm" target="_self">HTML Tags</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-attributes-complete-reference/?ref=dhm" target="_self">HTML Attributes</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-global-attributes/?ref=dhm" target="_self">HTML Global Attributes</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-dom-complete-reference/?ref=dhm" target="_self">HTML DOM</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-dom-audio-video-complete-reference/?ref=dhm" target="_self">HTML DOM Audio/Video</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html5-complete-reference/?ref=dhm" target="_self">HTML 5</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/svg/?ref=dhm" target="_self">HTML SVG</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-canvas-tutorial/?ref=dhm" target="_self">HTML Canvas</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/mathml/?ref=dhm" target="_self">MathML</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-examples/?ref=dhm" target="_self">HTML Examples</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>CSS</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-tutorial/?ref=dhm" target="_self">CSS Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-selectors-complete-reference/?ref=dhm" target="_self">CSS Selectors</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-properties-complete-reference/?ref=dhm" target="_self">CSS Properties</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-functions-complete-reference/?ref=dhm" target="_self">CSS Functions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-examples/?ref=dhm" target="_self">CSS Examples</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-complete-guide/?ref=dhm" target="_self">CSS A to Z Guide</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Bootstrap</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/bootstrap/?ref=dhm?ref=dhm" target="_self">Bootstrap Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/bootstrap-4-tutorial/?ref=dhm" target="_self">Bootstrap 4 Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/bootstrap-5/?ref=dhm" target="_self">Bootstrap 5 Tutorial</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-framework/?ref=dhm" target="_self">CSS Frameworks</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-and-css-template/?ref=dhm" target="_self">HTML and CSS Projects</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-formatter/?ref=dhm" target="_self">HTML Formatter</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-formatter/?ref=dhm" target="_self">CSS Formatter</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Interview Questions</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/html-interview-questions-answers-set-1/?ref=dhm" target="_self">HTML Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/css-interview-questions-and-answers/?ref=dhm" target="_self">CSS Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/tailwind-css-interview-questions-and-answers/?ref=dhm" target="_self">Tailwind CSS Interview Questions</a></li></ul></li></ul></li><li class="header-main__list-item Header_4" data-parent="false" aria-expanded="true" data-expandable="true"><span>JavaScript</span><i class="gfg-icon gfg-icon_arrow-down gfg-icon_header"></i><ul class="mega-dropdown Screen_1"><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>JavaScript</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript/?ref=dhm" target="_self">JS Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-arrays/?ref=dhm" target="_self">JS Array</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-strings/?ref=dhm" target="_self">JS String</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-objects/?ref=dhm" target="_self">JS Object</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-operators/?ref=dhm" target="_self">JS Operators</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/sets-in-javascript/?ref=dhm" target="_self">JS Set</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-map/?ref=dhm" target="_self">JS Map</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-regexpregular-expression/?ref=dhm" target="_self">JS RegExp</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-programs/?ref=dhm" target="_self">JS Programs</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-design-patterns/?ref=dhm" target="_self">JavaScript Design Patterns</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/top-javascript-projects/?ref=dhm" target="_self">Top JavaScript Projects</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/top-javascript-projects/?ref=dhm" target="_self">Top JavaScript Projects</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>JS Frameworks</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/lodash/?ref=dhm" target="_self">Lodash</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/moment-js/?ref=dhm" target="_self">Moment.js</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/p5-js/?ref=dhm" target="_self">P5.js</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/d3-js/?ref=dhm" target="_self">D3.js</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/tensorflow-js/?ref=dhm" target="_self">TensorFlow.js</a></li></ul></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>jQuery</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-tutorial/?ref=dhm" target="_self">jQuery Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-selectors-complete-reference/?ref=dhm" target="_self">jQuery Selectors</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-event-methods-complete-reference/?ref=dhm" target="_self">jQuery Events</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-effects-complete-reference/?ref=dhm" target="_self">jQuery Effects</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-ajax-complete-reference/?ref=dhm" target="_self">jQuery AJAX</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-properties-complete-reference/?ref=dhm" target="_self">jQuery Properties</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-plugins-complete-reference/?ref=dhm" target="_self">jQuery Plugins</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-ui/?ref=dhm" target="_self">jQuery UI</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/es6-tutorial/?ref=dhm" target="_self">ES6</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/typescript/?ref=dhm" target="_self">TypeScript Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/react-tutorial/?ref=dhm" target="_self">ReactJS Tutorial</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>ReactJS Frameworks</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/nextjs/?ref=dhm" target="_self">Next.js</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/react-bootstrap/?ref=dhm" target="_self">React Bootstrap</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/ant-design/?ref=dhm" target="_self">Ant Design</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/react-desktop/?ref=dhm" target="_self">React Desktop</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/react-rebass/?ref=dhm" target="_self">React Rebass</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/blueprintjs/?ref=dhm" target="_self">Blueprint</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/react-suite/?ref=dhm" target="_self">React Suite</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/reactjs-evergreen/?ref=dhm" target="_self">Evergreen</a></li></ul></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/nodejs/?ref=dhm" target="_self">Node.js Tutorial</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/express-js/?ref=dhm" target="_self">Express.js Tutorial</a></li><li class="mega-dropdown__list-item" data-parent="false" aria-expanded="true" data-expandable="true"><span>Interview Corners</span><i class="gfg-icon gfg-icon_arrow-right"></i><ul class="mega-dropdown Screen_2"><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/javascript-interview-questions-and-answers/?ref=dhm" target="_self">JavaScript Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/typescript-interview-questions/?ref=dhm" target="_self">TypeScript Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/jquery-interview-questions-and-answers/?ref=dhm" target="_self">jQuery Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/angularjs-interview-questions-and-answers/?ref=dhm" target="_self">AngularJS Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/react-interview-questions/?ref=dhm" target="_self">React Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/node-interview-questions-and-answers/?ref=dhm" target="_self">Node Interview Questions</a></li><li class="mega-dropdown__list-item" data-child="true" aria-expanded="false" data-expandable="false"><a href="https://www.geeksforgeeks.org/top-mern-stack-interview-questions/?ref=dhm" target="_self">MERN Stack Interview Questions</a></li></ul></li></ul></li></ul>
        <!-- right now only search is visible for mobile view because of css and all are visible for web view -->
            <ul class="header-main__left-list" data-nl="false">
                <li class="header-main__left-list-item gcse-search_li p-relative" aria-expanded="false" data-expandable="false">
                    <div class="gcse-form-search-suggestion_wrapper">
                        <form id="gcse-form" class="gcse-form_class p-relative closeChatScreen" data-sm="false">
                            <span class="front-search-icon"><i class="gfg-icon gfg-icon_search gfg-icon_white gcse-search__icon gcse-search-icon_grey"></i> </span>
                            <input class="gcse-search-input__wrapper" id="gcse-search-input" aria-expanded="false" placeholder="Search..." autocomplete="off" />
                            <i class="gfg-icon gfg-icon_times gfg-icon_white hide-search"></i>
                            <button  aria-label="search" type="submit" class="gcse-search__btn not-expanded">
                                <i class="gfg-icon gfg-icon_search gfg-icon_white gcse-search__icon"></i>
                            </button>
                        </form>
                        <div class="gfg-search-suggestion_wrapper" style="display:none"></div>
                    <div>
                </li>
                                <li>
                    <div class="darkMode-wrap" data-mode="Switch to Dark Mode">
                        <button aria-label="toggle theme" data-gfg-action="toggleGFGTheme">
                            <div id="darkMode-wrap-red-dot" style="height:12px;width:12px;background-color:#EB2222;border-radius:999999px;position:absolute;top:4px;right:0;display:none;"></div>
                            <i class="gfg-icon gfg-icon_dark-mode"></i>
                        </button>
                        <span id="darkModeTooltipText"></span>
                    </div>
                </li>
                
                    <style type="text/css">
                    .hidden{
                        display:none !important; 
                      }

                    .notification-bell-icon::after {
                    background-position: -43px -2992px;
                    }
                        
                    #toggleButton{
                        display:block !important;
                    }
                    </style>

                <li class="header-main__left-list-item notification-button">
                    <div id="toggleButton"  class="notification-main">
                        <div class="button">
                            <i  id="notification-bell-icon" class="gfg-icon notification-bell-icon"></i>
                            <span class="notification-count" style="display:none"></span>
                        </div>
                        <div id="toast-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>
                        <div id="notification" class="notification-container-main">
                            <div class="notification-header hidden">
                                <p>Notifications</p>
                            </div>
                            <div class="notification-category_container hidden">
                                <div class="notification_categories">
                                    <div id="all-notifications" class="notification_categories-inner-container notification-category active active-category"  style="margin-left:11px">
                                        <span id="all-notifications-inner" >All</span>
                                    </div>

                                </div>
                            </div>
                            <div id="notification-content" >
                                <div id="loader" class="loader"></div>
                                <div class="notification-scroll"> </div>
                                    <div class="notification-footer">
                                        <span id="view-all" class=" hidden">View All</span>
                                    </div>
                                </div>
                            </div>
                            <div id="notification-modal" class="notification-modal">
                                <div class="notification_modal_close">
                                    <span id="notification_close_button" class="notification_close_button"></span>
                                </div>
                                <div class="notification-modal-content">
                                    <div class="notification-modal-content-header hidden">
                                        <span class="heading_notification">Notifications</span>
                                        <div class="sorting">
                                            <div class="mark_all_read hidden">
                                                <span class="mark_icon gfg-icon"></span>
                                                <span>Mark all as read</span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="notification-category_container hidden">
                                    <div class="notification_categories">
                                        <div id="all-notifications-modal"  class="notification_categories-inner-container notification-category active-category">
                                            <span id="all-notifications-inner-modal" >All</span>
                                        </div>
                                        <div id="unread-notifications-modal" class="notification_categories-inner-container notification-category ">
                                            <span>Unread</span>
                                        </div>
                                        <div id="read-notifications-modal" class="notification_categories-inner-container notification-category ">
                                            <span>Read</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="zero_notification_content hidden">
                                    <span class="notifications-text">
                                        You're all caught up!!
                                    </span>
                                </div>
                                <div id="loader_modal" class="loader_modal"></div>
                                <div id="notification-content-container">
                                    <div class="notification-modal-scroll">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                                
                <li class="header-main__left-list-item google-translate-parent-element" aria-expanded="false" data-expanded="true">
                    <div class="translate" id="g_translater">
                        <div id="google_translate_element" data-show="false"></div>
                    </div>
                    <i class ="gfg-icon gfg-icon_translate googleTranslateToggle" data-gfg-action="google_translate_element"></i>
                    <!-- removed below code from here to load google translate js dynamically -->
                    <!-- <script>
                        var m = false;
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                            setTimeout(function(){
                                if (jQuery( window ).width() < 768){
                                    m = true;
                                     jQuery('#g_translater').detach().appendTo('#google_translate_mobile');                            
                                }
                            }, 7000);
                        }
                        jQuery( window ).resize(function() {
                            if (jQuery( window ).width() < 768 && m == false){
                                m = true;
                                jQuery('#g_translater').detach().appendTo('#google_translate_mobile');  
                            } else if (jQuery( window ).width() >= 768 && m == true){
                                m = false;
                                jQuery('#g_translater').detach().prependTo('.google-translate-parent-element');                            
                            }
                        });
                    </script> -->
                </li>
                <li id="userProfileId" class="header-main__left-list-item p-relative" aria-expanded="false" data-expandable="false">
                    <!-- Profile Section to be added via JS -->
                </li>
                            </ul>
        </div>

        <!-- for mobile only -->
        
        <!-- for mobile only -->
               
       </div>
    </nav>
    <div class="header-main__slider">
        <button aria-label="sub header slider previous" class="header-main__slider-arrow previous hideIt">
            <i class="gfg-icon gfg-icon_arrow-left gicon-centered"></i>
        </button>
        <!-- main content for leftbar -->
        <ul id="hslider">
        <li><a href="https://www.geeksforgeeks.org/courses/full-stack-node?utm_campaign=241_web_tech_html_css&utm_medium=gfgcontent_shm&utm_source=geeksforgeeks&ref=shm">Full Stack Course</a></li><li><a href="https://www.geeksforgeeks.org/nodejs/?ref=shm">NodeJS Tutorial</a></li><li><a href="https://www.geeksforgeeks.org/node-exercises/?ref=shm">NodeJS Exercises</a></li><li><a href="https://www.geeksforgeeks.org/node-js-assert-complete-reference/?ref=shm">NodeJS Assert</a></li><li><a href="https://www.geeksforgeeks.org/node-js-buffer-complete-reference/?ref=shm">NodeJS Buffer</a></li><li><a href="https://www.geeksforgeeks.org/node-js-console-complete-reference/?ref=shm">NodeJS Console</a></li><li><a href="https://www.geeksforgeeks.org/node-js-crypto-complete-reference/?ref=shm">NodeJS Crypto</a></li><li><a href="https://www.geeksforgeeks.org/node-js-dns-complete-reference/?ref=shm">NodeJS DNS</a></li><li><a href="https://www.geeksforgeeks.org/node-js-file-system-complete-reference/?ref=shm">NodeJS File System</a></li><li><a href="https://www.geeksforgeeks.org/node-js-globals-complete-reference/?ref=shm">NodeJS Globals</a></li><li><a href="https://www.geeksforgeeks.org/node-js-http-module-complete-reference/?ref=shm">NodeJS HTTP</a></li><li><a href="https://www.geeksforgeeks.org/node-js-http2-complete-reference/?ref=shm">NodeJS HTTP2</a></li><li><a href="https://www.geeksforgeeks.org/node-js-os-complete-reference/?ref=shm">NodeJS OS</a></li><li><a href="https://www.geeksforgeeks.org/node-js-path-module-complete-reference/?ref=shm">NodeJS Path</a></li><li><a href="https://www.geeksforgeeks.org/node-js-process-complete-reference/?ref=shm">NodeJS Process</a></li><li><a href="https://www.geeksforgeeks.org/node-js-query-string-complete-reference/?ref=shm">NodeJS Query String</a></li><li><a href="https://www.geeksforgeeks.org/node-js-stream-complete-reference/?ref=shm">NodeJS Stream</a></li><li><a href="https://www.geeksforgeeks.org/node-js-string-decoder-complete-reference/?ref=shm">NodeJS String Decoder</a></li><li><a href="https://www.geeksforgeeks.org/node-js-timers-complete-reference/?ref=shm">NodeJS Timers</a></li><li><a href="https://www.geeksforgeeks.org/node-js-url-complete-reference/?ref=shm">NodeJS URL</a></li><li><a href="https://www.geeksforgeeks.org/node-interview-questions-and-answers/?ref=shm">NodeJS Interview Questions</a></li><li><a href="https://www.geeksforgeeks.org/node-js-questions-complete-reference/?ref=shm">NodeJS Questions</a></li><li><a href="https://www.geeksforgeeks.org/web-technology/?ref=shm">Web Technology</a></li>        </ul>
        <button aria-label="sub header slider next" class="header-main__slider-arrow next hideIt">
            <i class="gfg-icon gfg-icon_arrow-right gicon-centered"></i>
        </button>
    </div>
    <button id="scrollTopBtn" title="Scroll to Top" type="button" class="btn btn-success">&#x25B2;</button>
    <!-- .top-spacing to give space on single pages-->
    <div id="main" class="wrapper single-page">

<script>
    if(post_slug.includes('premium-plans-payment/') || post_slug.includes('premium-plans/')){
        $(".header-main__slider").remove();
    }
    //getting tags for the page type data
    let mobileView = false;
    let pageTags = JSON.parse('null');
    let allTags = JSON.parse('{"0":"JavaScript","1":"WebTechnologies","2":"Node.js","3":"TechnicalScripter","5":"JavaScriptQuestions","6":"Nodenpm"}');
</script>

<script>
    window.have_dsa_term = false;
    // var practiceTab = ; 
</script>

<style>
    .wrapper {
        flex-direction: column !important;
    }
    /* spinner css */
    @keyframes spinner {
        to {transform: rotate(360deg);}
    }
    
    .spinner:before {
        content: '';
        box-sizing: border-box;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 20px;
        height: 20px;
        margin-top: -10px;
        margin-left: -10px;
        border-radius: 50%;
        border: 2px solid #ccc;
        border-top-color: #000;
        animation: spinner .6s linear infinite;
    }

    .report-loader{
        position: relative;
        
    }

    .report-loader.spinner{
        margin-left: 16px;
    }
    .badges{
        display: flex;
        align-items: center;
        position: relative;
    }
    .badges .gfg-badge-icon.md::after{
        transform: scale(0.25);
        position:relative;
        top: 2px;
        left: -2px;
    }
    .sep{
        margin: 0px 5px;
        font-size: 20px;
        color: var(--badge-name-color);
    }
    .pub-count{
        font-size: 14px;
        font-family: var(--font-secondary);
    }
    .badge-details{
        display:none;
    }
    .badges{
        cursor: pointer;
        position: relative;
        /* width: 0px;
        height: 20px;
        top: -32px; */
    }
    .badge-icon{
        display: flex;
        align-items: center;
    }
    .badge-content{
        margin-left: 9px;
    }
    .badge-name{
        color: var(--badge-nam-color);
        font-weight: 600;
        font-size: 16px;
        text-transform: capitalize;
    }
    .badge-data{
        color: #A5A4A4;
        font-size: 10px;
    }
    .badges:hover .badge-details{
        display: block;
        background: var(--badge-bg);
        padding: 10px 18px 10px 18px;
        position: absolute;
        width: 175px;
        top: -10px;
        z-index: 10;
        left: 112%;
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        border-radius: 5px;
        /* transform-origin: top right; */
    }
    .badge-details::before {
        content: "";
        position: absolute;
        transform: rotate(90deg);
        /* transform-origin: right; */
        left: -6px;
        top: 50%;
        margin-left: -17px;
        border-width: 12px;
        border-style: solid;
        border-color: var(--badge-bg) transparent transparent transparent;
        margin-top: -12px;
    }
    .badge-icon .icon{
        border: 1px solid var(--icon-border-color);
        padding: 4px 3px;
        border-radius: 4px;
        width: 22px;
        height: 24px;
        position: relative;
    }
    .b-icon-pos{
        position: relative;
        top: -34px;
        left: -34px;
    }
    /* article viewer */
    .article--viewer .a-wrapper{
        margin-top: 0px !important;
    }
    .content{
        padding-top: 10px !important;
    }
    .u-name{
        font-size: 14px;
    }
    .article--viewer_content .a-wrapper .content{
        padding-bottom: 10px !important;
    }
    .likeTooltipBottom{
        font-size: 14px;
    }
    @media (max-width: 434px) {
        .article-buttons.show-bg{
            margin-top: 56px !important;
        }
    }
    @media (max-width: 730px),
            ((min-width: 992px) and (max-width:1100px))  {
        .article--viewer .media{
            position: relative;
        }
        .article--viewer .media{
            margin-bottom: 0px !important;
        }
        .badges:hover .badge-details{
            top: -56px;
            left: 62px;
        }
        .badge-details::before{
            transform: rotate(0deg);
            left: 10%;
            top: 117%;
        }
        .article-buttons.show-bg{
            margin-top: 22px;
            top: 0px !important;
        }
    }
    @media ((min-width:731px) and (max-width:1223px)) {
        .article-buttons.show-bg{
            top: 18px;
        }
    }
    @media ((min-width:993px) and (max-width:1190px)) {
        .article--viewer .media{
            position: relative;
        }
        .article--viewer .media{
            margin-bottom: 25px !important;
        }
    }
</style>
<!-- Survey modal implementation -->
<script>
    function getCookie(name) {
        function escape(s) { return s.replace(/([.*+?\^$(){}|\[\]\/\\])/g, '\\$1'); }
        var match = document.cookie.match(RegExp('(?:^|;\\s*)' + escape(name) + '=([^;]*)'));
        return match ? match[1] : null;
    }
</script>
<!-- END Survey modal implementation-->

<!-- Open in App Button and CSS-->

<!-- Above code is for old openInApp pop-up with open in app and continue buttons-->

<div id='openInApp-modal' class='openInApp'>
    <a href = 'https://geeksforgeeksapp.page.link/?link=https://www.geeksforgeeks.org/node-js-npm-node-package-manager/?type%3Darticle%26id%3D196431&apn=free.programming.programming&isi=1641848816&ibi=org.geeksforgeeks.GeeksforGeeksDev&efr=1' class='openInAppLink'>
        <span style='color: #fff;'>Open In App</span>
    </a>
</div>
    <script>
        var consentValue = localStorage.getItem("gfg_cc");
        var isIOS = !!navigator.platform && /iPad|iPhone|iPod|MacIntel/.test(navigator.platform) && navigator.maxTouchPoints > 0;
        const isSafari = navigator.userAgent.indexOf("Safari") > -1;
        const isMozilla = navigator.userAgent.indexOf("Mozilla") > -1;
        if(consentValue){
            if(window.innerHeight > window.innerWidth && navigator.maxTouchPoints > 1 && (isSafari || isMozilla || navigator.userAgentData.mobile)){
                $('.openInApp').css({
                    display: "block"
                });
                $('#scrollTopBtn').css({
                    bottom: "44px"
                });
                //adding a new class to check stats for clicks on iOS and Android
                isIOS ? jQuery('.openInAppLink').addClass("oia-iOS") : $('.openInAppLink').addClass("oia-android");      //for openInApp Link
            }
        }
        
    </script>
    <style>
        .openInApp{
            display: none;
            bottom: 0px;
            width: 100%;
            position: fixed;
            z-index: 1025;
            opacity: 0.93;
        }
        .openInAppLink{
            height: 44px;
            background: var(--color-gfg);
            font-weight: bold;
            display: block;
            text-align: center;
            padding: 12px;
            font-size: large;
        }
        .openInAppLink, .openInAppLink:hover, .openInAppLink:active, .openInAppLink:visited, .openInAppLink:focus {
            text-decoration:none;
        }
    </style>
<!-- END Open in App Button and CSS-->

            <script>
                companyTagsArray = JSON.parse('[]');
                categoryTagsArray = JSON.parse('[]');
            </script>
            <div class="container-fluid bg-light" id="home-page" style="position: relative; max-width:100%;">
    <div class="article-page_flex">
            <div class="sidebar_wrapper  manual_leftbar ">
          <div class="sideBar sticky" >
                <!-- <div class="sideBar--wrap newLeftbar  "> -->
                <div class="sideBar--wrap newLeftbar ">
                <ul class="leftBarList"><div class="first"><li id="premium-leftbar-cta" style="background-color: var(--leftbar-explore-section-color) !important;"><a href="https://www.geeksforgeeks.org/courses/gfg-160-series?itm_source=geeksforgeeks&itm_medium=leftbar&itm_campaign=gfg160" style="cursor:pointer;display: block;border-bottom: 1px solid var(--gfg-body-color-alternate);" target="_blank">160 Days of DSA</a></li><li style="background-color: var(--leftbar-explore-section-color) !important;"><a class="share-experience-modal" href="https://write.geeksforgeeks.org/#experiences" style="cursor:pointer;display: block;border-bottom: 1px solid var(--gfg-body-color-alternate);">Share Your Experiences</a></li></div><div class='second'><li class=""><a href="https://www.geeksforgeeks.org/nodejs/?ref=lbp">Node.js Tutorial</a></li><div class="leftbar-dropdown" style="background-color:var(--leftbar-background-color); border-bottom:1px solid #CCC;"><h2 class="dropdown-title active">Node.js Basic<span class="gfg-icon gfg-icon_arrow-down-thin upside"></span></h2><ul><li class=""><a href="https://www.geeksforgeeks.org/node-js-introduction/?ref=lbp">Node.js Introduction</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/installation-of-node-js-on-linux/?ref=lbp">Installation of Node JS on Linux</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/install-node-js-on-windows/?ref=lbp">How to Install Node.js on Windows?</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-basics/?ref=lbp">Node.js Basics</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-first-application/?ref=lbp">Node First Application</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-repl-read-eval-print-loop/?ref=lbp">Node.js REPL (READ, EVAL, PRINT, LOOP)</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class="currentpage "><a href="https://www.geeksforgeeks.org/node-js-npm-node-package-manager/?ref=lbp">NodeJS NPM</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-global-objects/?ref=lbp">Node.js Global Objects</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-modules/?ref=lbp">Node.js Modules</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-local-module/?ref=lbp">Node.js Local Module</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Assert Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-module/?ref=lbp">Node.js Assert Module</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-function/?ref=lbp">Node.js assert() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-deepstrictequal-function/?ref=lbp">Node.js assert.deepStrictEqual() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-doesnotthrow-function/?ref=lbp">Node.js assert.doesNotThrow() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-equal-function/?ref=lbp">Node.js assert.equal() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-iferror-function/?ref=lbp">Node.js assert.ifError() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-match-function/?ref=lbp">Node.js assert.match() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-notdeepequal-function/?ref=lbp">Node.js assert.notDeepEqual() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-assert-complete-reference/?ref=lbp">Node.js Assert Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Buffer Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffers/?ref=lbp">Node.js Buffers</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-copy-method/?ref=lbp">Node.js Buffer.copy() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-includes-method/?ref=lbp">Node.js Buffer.includes() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-compare-method/?ref=lbp">Node.js Buffer.compare() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-alloc-method/?ref=lbp">Node.js Buffer.alloc() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-equals-method/?ref=lbp">Node.js Buffer.equals() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-subarray-method/?ref=lbp">Node.js Buffer.subarray() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-readintbe-method/?ref=lbp">Node.js Buffer.readIntBE() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-write-method/?ref=lbp">Node.js Buffer.write() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-buffer-complete-reference/?ref=lbp">Node.js Buffer Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Console Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-console/?ref=lbp">Node.js Console</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-assert-method/?ref=lbp">Node.js console.assert() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-clear-method/?ref=lbp">Node.js console.clear() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-count-method/?ref=lbp">Node.js console.count() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-countreset-method/?ref=lbp">Node.js console.countReset() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-debug-method/?ref=lbp">Node.js console.debug() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-dir-method/?ref=lbp">Node.js console.dir() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-error-function/?ref=lbp">Node.js console.error() Function</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-info-method/?ref=lbp">Node.js console.info() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-console-complete-reference/?ref=lbp">Node.js Console Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Crypto Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-cipher-final-method/?ref=lbp">Node.js cipher.final() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-cipher-update-method/?ref=lbp">Node.js cipher.update() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-getciphers-method/?ref=lbp">Node.js crypto.getCiphers() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-createdecipheriv-method/?ref=lbp">Node.js crypto.createDecipheriv() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-createcipheriv-method/?ref=lbp">Node crypto.createCipheriv() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-getdiffiehellman-method/?ref=lbp">Node.js crypto.getDiffieHellman() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-pbkdf2-method/?ref=lbp">Node.js crypto.pbkdf2() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-createhash-method/?ref=lbp">Node crypto.createHash() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-createhmac-method/?ref=lbp">Node.js  crypto.createHmac() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-crypto-complete-reference/?ref=lbp">Node.js Crypto Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js DNS Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns/?ref=lbp">Node.js DNS</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-getservers-method/?ref=lbp">Node.js dns.getServers() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-lookup-method/?ref=lbp">Node.js dns.lookup() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-lookupservice-method/?ref=lbp">Node.js dns.lookupService() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-resolve-method/?ref=lbp">Node.js dns.resolve() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-resolve4-method/?ref=lbp">Node.js dns.resolve4() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-resolve6-method/?ref=lbp">Node.js dns.resolve6() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-resolveany-method/?ref=lbp">Node.js dns.resolveAny() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-resolvecname-method/?ref=lbp">Node.js dns.resolveCname() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-dns-complete-reference/?ref=lbp">Node.js DNS Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js File System Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-file-system/?ref=lbp">Node.js File System</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-readfile-method/?ref=lbp">Node JS fs.readFile() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-exists-method/?ref=lbp">Node.js fs.exists() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-existssync-method/?ref=lbp">Node fs.existsSync() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-mkdir-method/?ref=lbp">Node fs.mkdir() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-truncate-method/?ref=lbp">Node.js fs.truncate() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-renamesync-method/?ref=lbp">Node.js fs.renameSync() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-rmdir-method/?ref=lbp">Node.js fs.rmdir() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-fs-stat-method/?ref=lbp">Node.js fs.stat() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-file-system-complete-reference/?ref=lbp">Node.js File System Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Globals<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-timers-module/?ref=lbp">Node.js Timers module</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/import-and-export-in-node-js/?ref=lbp">Import and Export in Node.js</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-export-module/?ref=lbp">Node Export Module</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-method/?ref=lbp">Node.js URL() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-urlsearchparams-api/?ref=lbp">Node.js URLsearchParams API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-globals-complete-reference/?ref=lbp">Node.js Globals Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js HTTP Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-http-module/?ref=lbp">Node.js HTTP Module</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-new-agent-method/?ref=lbp">Node.js new Agent() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-agent-createconnection-method/?ref=lbp">Node.js agent.createConnection() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-agent-maxsockets-method/?ref=lbp">Node.js agent.maxSockets Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-agent-maxfreesockets-method/?ref=lbp">Node.js agent.maxFreeSockets Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http-clientrequest-abort-method/?ref=lbp">Node.js http.ClientRequest.abort() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http-clientrequest-connection-property/?ref=lbp">Node.js http.ClientRequest.connection Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http-clientrequest-protocol-method/?ref=lbp">Node.js http.ClientRequest.protocol Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http-clientrequest-aborted-property/?ref=lbp">Node.js http.ClientRequest.aborted Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http-module-complete-reference/?ref=lbp">Node.js HTTP Module Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js HTTP2 Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-close-event/?ref=lbp">Node.js Http2Session Close Event</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-state-method/?ref=lbp">Node.js http2session.state Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-timeout-event/?ref=lbp">Node.js Http2Session timeout Event</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-socket-method/?ref=lbp">Node.js http2session.socket Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-remotesettings-method/?ref=lbp">Node.js http2session.remoteSettings Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-destroyed-method/?ref=lbp">Node.js http2session.destroyed Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-type-method/?ref=lbp">Node.js http2session.type Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-encrypted-method/?ref=lbp">Node.js http2session.encrypted Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2session-localsettings-method/?ref=lbp">Node.js http2session.localSettings Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-http2-complete-reference/?ref=lbp">Node.js HTTP2 Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js OS Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-os/?ref=lbp">Node.js OS</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-eol/?ref=lbp">Node.js os.EOL</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-arch-method/?ref=lbp">Node.js os.arch() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-cpus-method/?ref=lbp">Node.js os.cpus() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-endianness-method/?ref=lbp">Node.js os.endianness() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-freemem-method/?ref=lbp">Node.js os.freemem() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-getpriority-method/?ref=lbp">Node.js os.getPriority() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-homedir-method/?ref=lbp">Node.js os.homedir() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-hostname-method/?ref=lbp">Node.js os.hostname() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-os-complete-reference/?ref=lbp">Node.js OS Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Path Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-basename-method/?ref=lbp">Node.js path.basename() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-delimiter-property/?ref=lbp">Node.js path.delimiter Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-dirname-method/?ref=lbp">Node.js path.dirname() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-extname-method/?ref=lbp">Node.js path.extname() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-format-method/?ref=lbp">Node.js path.format() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-isabsolute-method/?ref=lbp">Node.js path.isAbsolute() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-join-method/?ref=lbp">Node.js path.join() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-normalize-method/?ref=lbp">Node.js path.normalize() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-parse-method/?ref=lbp">Node.js path.parse() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-path-module-complete-reference/?ref=lbp">Node.js Path Module Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Process Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-arch-property/?ref=lbp">Node.js process.arch Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-argv-property/?ref=lbp">Node.js process.argv Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-argv0-property/?ref=lbp">Node.js process.argv0 Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-chdir-method/?ref=lbp">Node.js process.chdir() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-config-property/?ref=lbp">Node.js process.config Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-cpuusage-method/?ref=lbp">Node.js process.cpuUsage() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-cwd-method/?ref=lbp">Node process.cwd() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-debugport-property/?ref=lbp">Node.js process.debugPort Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-env-property/?ref=lbp">Node.js process.env Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-process-complete-reference/?ref=lbp">Node.js Process Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Query String Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-querystring-parse-method/?ref=lbp">Node.js querystring.parse() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-querystring-stringify-method/?ref=lbp">Node.js querystring.stringify() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-query-string-complete-reference/?ref=lbp">Node.js Query String Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Stream Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-streams/?ref=lbp">Node.js Streams</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-cork-method/?ref=lbp">Node.js Stream writable.cork() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-writablelength-property/?ref=lbp">Node.js Stream writable.writableLength Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-writableobjectmode-property/?ref=lbp">Node.js Stream writable.writableObjectMode Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-writablefinished-property/?ref=lbp">Node.js Stream writable.writableFinished Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-destroy-method/?ref=lbp">Node.js Stream writable.destroy() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-writablecorked-property/?ref=lbp">Node.js Stream writable.writableCorked Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-end-method/?ref=lbp">Node.js Stream writable.end() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-writable-close-event/?ref=lbp">Node.js stream.Writable close Event</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stream-complete-reference/?ref=lbp">Node.js Stream Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js String Decoder Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-stringdecoder-end-method/?ref=lbp">Node.js stringDecoder.end() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-stringdecoder-write-method/?ref=lbp">Node.js stringDecoder.write() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-string-decoder-complete-reference/?ref=lbp">Node.js String Decoder Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Timers Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-immediate-timer-class/?ref=lbp">Node.js Immediate Timer Class</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-timeout-timer-class/?ref=lbp">Node.js Timeout Timer Class</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-timers-complete-reference/?ref=lbp">Node.js Timers Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js TLS/SSL Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-tls-createserver-method/?ref=lbp">Node.js tls.createServer() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-tls-rootcertificates-property/?ref=lbp">Node.js tls.rootCertificates Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-tls-getciphers-method/?ref=lbp">Node.js tls.getCiphers() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-request-writableended-property/?ref=lbp">Node.js request.writableEnded Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-tlssocket-address-method/?ref=lbp">Node.js tlsSocket.address() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-tlssocket-authorized-property/?ref=lbp">Node.js tlsSocket.authorized Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-tlssocket-authorizationerror-property/?ref=lbp">Node.js tlsSocket.authorizationError Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-tlssocket-disablerenegotiation-method/?ref=lbp">Node.js tlsSocket.disableRenegotiation() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-tls-ssl-complete-reference/?ref=lbp">Node.js TLS/SSL Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js UDP/DataGram Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-address-method/?ref=lbp">Node.js socket.address() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-addmembership-method/?ref=lbp">Node.js socket.addMembership() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-bind-method/?ref=lbp">Node.js socket.bind() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-connect-method/?ref=lbp">Node.js socket.connect() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-dropmembership-method/?ref=lbp">Node.js socket.dropMembership() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-getsendbuffersize-method/?ref=lbp">Node.js socket.getSendBufferSize() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-getrecvbuffersize-method/?ref=lbp">Node.js socket.getRecvBufferSize() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-setttl-method/?ref=lbp">Node.js socket.setTTL() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-socket-setmulticastttl-method/?ref=lbp">Node.js socket.setMulticastTTL() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-udp-datagram-complete-reference/?ref=lbp">Node.js UDP/DataGram Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js URL Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-hash-api/?ref=lbp">Node.js URL.hash API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-host-api/?ref=lbp">Node.js URL.host API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-origin-api/?ref=lbp">Node.js URL.origin API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-username-api/?ref=lbp">Node.js URL.username API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-search-api/?ref=lbp">Node.js URL.search API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-port-api/?ref=lbp">Node.js URL.port API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-pathname-api/?ref=lbp">Node.js URL.pathname API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-password-api/?ref=lbp">Node.js URL.password API</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-url-complete-reference/?ref=lbp">Node.js URL Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Utility Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-utility-module/?ref=lbp">Node.js Utility Module</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-callbackify-method/?ref=lbp">Node.js util.callbackify() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-debuglog-method/?ref=lbp">Node.js util.debuglog() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-format-method/?ref=lbp">Node.js util.format() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-inherits-method/?ref=lbp">Node.js util.inherits() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-formatwithoptions-method/?ref=lbp">Node.js util.formatWithOptions() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-inspect-method/?ref=lbp">Node.js util.inspect() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-promisify-method/?ref=lbp">Node util.promisify() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-util-isdeepstrictequal-method/?ref=lbp">Node.js util.isDeepStrictEqual() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-utility-complete-reference/?ref=lbp">Node.js Utility Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js V8 Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-cacheddataversiontag-method/?ref=lbp">Node.js v8.cachedDataVersionTag() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-getheapspacestatistics-method/?ref=lbp">Node.js v8.getHeapSpaceStatistics() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-getheapstatistics-method/?ref=lbp">Node.js v8.getHeapStatistics() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-serialize-method/?ref=lbp">Node.js v8.serialize() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-deserialize-method/?ref=lbp">Node.js v8.deserialize() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-serializer-writeheader-method/?ref=lbp">Node.js v8.Serializer.writeHeader() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-serializer-writevalue-method/?ref=lbp">Node.js v8.Serializer.writeValue()  Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-serializer-releasebuffer-method/?ref=lbp">Node.js v8.Serializer.releaseBuffer() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-serializer-writeuint32-method/?ref=lbp">Node.js v8.Serializer.writeUint32() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-v8-complete-reference/?ref=lbp">Node.js V8 Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js VM Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-constructor-new-vm-script-method/?ref=lbp">Node.js Constructor: new vm.Script() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-script-createcacheddata-method/?ref=lbp">Node.js script.createCachedData() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-script-runincontext-method/?ref=lbp">Node.js script.runInContext() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-script-runinnewcontext-method/?ref=lbp">Node.js script.runInNewContext() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-script-runinthiscontext-method/?ref=lbp">Node.js | script.runInThisContext() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-vm-createcontext-method/?ref=lbp">Node.js vm.createContext() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-vm-runinthiscontext-method/?ref=lbp">Node.js vm.runInThisContext() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-vm-iscontext-method/?ref=lbp">Node.js vm.isContext() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-vm-runincontext-method/?ref=lbp">Node.js vm.runInContext() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-vm-complete-reference/?ref=lbp">Node.js VM Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Zlib Module<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-constants-property/?ref=lbp">Node.js zlib.constants Property</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-createbrotlicompress-method/?ref=lbp">Node.js zlib.createBrotliCompress() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-createbrotlidecompress-method/?ref=lbp">Node.js zlib.createBrotliDecompress() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-createunzip-method/?ref=lbp">Node.js zlib.createUnzip() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-createdeflateraw-method/?ref=lbp">Node.js zlib.createDeflateRaw() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-creategunzip-method/?ref=lbp">Node.js zlib.createGunzip() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-createinflateraw-method/?ref=lbp">Node.js zlib.createInflateRaw() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-createdeflate-method/?ref=lbp">Node.js zlib.createDeflate() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-createinflate-method/?ref=lbp">Node.js zlib.createInflate() Method</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-zlib-complete-reference/?ref=lbp">Node.js Zlib Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><div class="leftbar-dropdown"><h2 class="dropdown-title">Node.js Questions<span class="gfg-icon gfg-icon_arrow-down-thin"></span></h2><ul style="display: none;"><li class=""><a href="https://www.geeksforgeeks.org/why-node-js/?ref=lbp">Why Node.js ?</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/how-to-set-node-js-console-font-color/?ref=lbp">How to change Node console font color ?</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/how-to-read-command-line-arguments-in-node-js/?ref=lbp">How to Read Command Line Arguments in Node ?</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/what-is-the-difference-between-save-and-save-dev-in-node-js/?ref=lbp">What is the difference between --save and --save-dev in Node.js ?</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/essence-of-node-js/?ref=lbp">Essence of Node.js</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/reading-environment-variables-from-node-js/?ref=lbp">Reading Environment Variables From Node.js</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/how-to-install-the-previous-version-of-node-js-and-npm/?ref=lbp">How to install the previous version of Node and npm?</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/how-to-create-a-directory-using-node-js/?ref=lbp">How to Create a Directory using Node.js ?</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-questions-complete-reference/?ref=lbp">Node.js Questions Complete Reference</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li><li class=""><a href="https://www.geeksforgeeks.org/node-js-examples/?ref=lbp">Node.js Examples</a><hr style="background:var(--gfg-selected-color); width:70%; margin: 0 auto;"></hr></li></ul></div><li><a href="https://www.geeksforgeeks.org/courses/full-stack-node?utm_source=geeksforgeeks&utm_medium=leftbar_lcta&utm_campaign=courses">Full Stack Development <span style="background: #CCC;float: right;padding: 0px 5px;color: #404040 !important;border-radius: 10px;">Course</span></a></li></div></ul></div><div id="GFG_AD_Desktop_LeftSideBar_Docked_300x250"></div>            </div>
             <div id="GFG_AD_Desktop_LeftSideBar_Docked_160x600" style="max-width:160px; max-height:600px"></div>
        </div>
                <div class="leftBar">
            <div class="article--viewer">
                <div class="article--viewer_content">
                    <div class="a-wrapper">
                        <div class="" style="z-index:9999 !important;position:relative;">
                        </div>
                        <article class="content post-196431 post type-post status-publish format-standard hentry category-javascript category-node-js category-technical-scripter category-web-technologies tag-javascript-questions tag-node-npm" id="post-196431">
                                                                                   <!-- when comment system will be scalable from practice side then we will display  Article/Discussion tab-->
                            <div class="main_wrapper" style="display:flex;">
                                                                <div style="width: 100%;">
                                        <div class="article-title">
                                            <h1>NodeJS NPM</h1>
                                        </div>
                                                                                    <div class="last_updated_parent">
                                                <div>
                                                    <span class="strong">Last Updated : </span>
                                                    <span>15 Oct, 2024</span>
                                                </div>

                                                 <!-- three dot menu -->
                                                <div class="three_dot_dropdown"> 
                                                                                                            <div style="display: flex;">
                                                                                                                    <div pid="196431" ptitle="NodeJS NPM" class="top-summary-icon-div ">
                                                                <div class="three_dot_dropdown_div tooltip">
                                                                    <span class="summary_tooltiptext">Summarize</span>
                                                                    <div class="summarize_header">
                                                                    <i class= "summary_button" style="position: relative;"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                                                                                                                                        <div pid="196431" ptitle="NodeJS NPM" class="article--viewer_comment tooltip top-comment-icon-div">
                                                                    <span class="comment_tooltiptext">Comments</span>
                                                                    <div class="three_dot_dropdown_div" data-gfg-action='loadComments'>
                                                                        <div class="comment_header">
                                                                        <i class= "discussion_button" style="position: relative; transform: scale(0.9);"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                                                        <div pid="196431" ptitle="NodeJS NPM" class="article--viewer_improve tooltip">
                                                                <span class="improve_tooltiptext">Improve</span>
                                                                <div class="three_dot_dropdown_div three_dot_dropdown_improve" onclick="improveArticleCall()">
                                                                    <div class="improve_wrapper_top">
                                                                    <i class="gfg-icon gfg-icon-pencil  gfg-icon_edit" style="position: relative; z-index: 3;"></i>
                                                                    </div>
                                                                </div>
                                                                <!-- <button onclick="improveArticleCall()">
                                                                    <i class="gfg-icon gfg-icon_edit"></i>
                                                                </button> -->
                                                            </div> 
                                                                                                                    <!-- three dots -->
                                                        <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                                                            <li>
                                                                                                                            </li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div> 
                                            </div>
                                                                            </div>
                                                            </div>
                            <!-- menu -->
                            <div id="myDropdown" class="three_dot_dropdown_content">
                                        <div class="article-buttons drop" onmouseleave="closeKebabMenu()">
                                            <!-- If the status of the summary API is true than we are showing the summarize button otherwise not  -->
                                                                                         <div pid="196431" ptitle="NodeJS NPM" class="improve_article--viewer tooltip">
                                                <div class="three_dot_dropdown_div three_dot_dropdown_improve" onclick="suggestionArticleCall()" style="margin-top: 1px;">
                                                    <div class="three_dot_dropdown_inner_div improve_dot_dropdown_inner_div">
                                                        <i class="gfg-icon gfg-icon_suggest_changes gfg-icon_edit"></i>
                                                        <span>Suggest changes</span>
                                                    </div>
                                                </div>
                                            </div>                                                                                          <div pid="196431" class="article--viewer_like tooltip">
                                            <div class="three_dot_dropdown_div three_dot_dropdown_likearticle" onmouseleave='toggleLikeElementVisibility("showLikesContainer", false)'  onmouseenter='toggleLikeElementVisibility("showLikesContainer", true)'>
                                                    <div class="showLikesContainer"> 
                                                        <span class="likeTooltip">Like Article</span>
                                                    </div>
                                                    <div class="three_dot_dropdown_inner_div" data-gfg-action="like-article" data-bookmark-value="0">
                                                        <i class="gfg-icon gfg-icon_thumbs"></i>
                                                        <span>Like</span>
                                                    </div>
                                                </div>
<!-- <button data-gfg-action="like-article" data-bookmark-value="0">
                                                    <i class="gfg-icon gfg-icon_thumbs"></i>
                                                </button> -->
                                            </div>
                                            <div pid="196431" class="article--viewer_bookmark tooltip">
                                                <div class="three_dot_dropdown_div three_dot_dropdown_save">
                                                    <div class="three_dot_dropdown_inner_div" data-gfg-action="bookmark-article" data-bookmark-value="0">
                                                        <i class="gfg-icon gfg-icon_bookmark"></i>
                                                        <span>Save</span>
                                                    </div>
                                                </div>
<!-- <button data-gfg-action="bookmark-article" data-bookmark-value="0">
                                                    <i class="gfg-icon gfg-icon_bookmark"></i>
                                                </button> -->
                                            </div>
                                            <div pid="196431" class="article--viewer_share tooltip">
                                                <div class="three_dot_dropdown_div three_dot_dropdown_share" onmouseleave="closeShareModal()" onmouseenter="openShareModal()">
                                                    <div style="display: flex;align-items: center;" class="three_dot_dropdown_inner_div" data-gfg-action="share-article" data-bookmark-value="0">
                                                        <i class="gfg-share-icon"></i>
                                                        <span>Share</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="article--viewer_report tooltip">
                                                <div class="three_dot_dropdown_div three_dot_dropdown_reportarticle">
                                                    <div class="three_dot_dropdown_inner_div" data-gfg-action="report-article" onclick="report_article();">
                                                        <i class="gfg-icon gfg-icon_report"></i>
                                                        <span>Report</span>
                                                    </div>
                                                </div>
<!-- <button data-gfg-action="like-article" data-bookmark-value="0">
                                                    <i class="gfg-icon gfg-icon_thumbs"></i>
                                                </button> -->
                                            </div>
                                            <div class="article--viewer_Gnews tooltip">
                                                <a class="three_dot_dropdown_inner_div Gnews_wrapper" href ='https://news.google.com/publications/CAAqBwgKMLTrzwsw44bnAw?hl=en-IN&gl=IN&ceid=IN%3Aen' target="_blank">
                                                    <img class="gfg-icon_Gnews no-zoom-in-cursor" src=https://media.geeksforgeeks.org/auth-dashboard-uploads/Google-news.svg  loading="lazy" alt="News"></img>
                                                    <span class='kebab_menu_news_text'>Follow</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <div class="text">
                                                                <p dir="ltr"><b><strong>NPM (Node Package Manager)</strong></b><span> is the package manager for Node and is written entirely in </span><a href="https://www.geeksforgeeks.org/javascript-tutorial/" target="_blank" rel="noopener"><span>JavaScript</span></a><span>. Developed by Isaac Z. Schlueter, it was initially released on January 12, 2010. NPM manages all the packages and modules for Node and consists of command line client </span><b><strong>npm</strong></b><span>. </span></p>
<div id="table_of_content">
<p style="margin:4px; font-size:20px; font-weight:bold;">Table of Content</p>
<ul>
<li><a href="#what-is-npm">What is NPM?</a></li>
<li><a href="#some-facts-about-npm">Some facts about NPM</a></li>
<li><a href="#installing-npm">Installing NPM:</a></li>
<li><a href="#checking-and-updating-npm-version">Checking and updating npm version</a></li>
<li><a href="#creating-a-node-project">Creating a Node Project:</a></li>
<li><a href="#installing-packages">Installing Packages</a></li>
<li><a href="#using-a-package-in-node">Using a package in Node</a></li>
<li><a href="#installing-a-package-globally">Installing a Package Globally</a></li>
<li><a href="#popular-npm-packages">Popular NPM Packages</a></li>
<li><a href="#controlling-where-the-package-gets-installed">Controlling where the package gets installed</a></li>
<li><a href="#save-directory-of-installed-modules">Save Directory of Installed Modules</a></li>
<li><a href="#uninstalling-packages">Uninstalling Packages</a></li>
<li><a href="#using-semantic-versioning-to-manage-packages">Using Semantic Versioning to manage packages:</a></li>
</ul>
</div>
<h2 id="what-is-npm"><span>What is NPM?</span></h2>
<p dir="ltr"><span>NPM (Node Package Manager) is the default package manager for Node.js. It allows developers to easily install, manage, and share reusable code, known as packages, for their Node.js projects. NPM plays an important role in simplifying the development process by providing a vast repository of open-source packages, which developers can integrate into their projects with minimal effort.</span></p>
<p dir="ltr"><span>NPM gets installed into the system with the installation of Node. The required packages and modules in the Node project are installed using NPM. A package contains all the files needed for a module and modules are the JavaScript libraries that can be included in a Node project according to the requirement of the project. </span></p>
<p dir="ltr"><span>NPM can install all the dependencies of a project through the </span><a href="https://www.geeksforgeeks.org/node-js-package-json/" target="_blank" rel="noopener"><span>package.json</span></a><span> file. It can also update and uninstall packages. In the package.json file, each dependency can specify a range of valid versions using the semantic versioning scheme, allowing developers to auto-update their packages while at the same time avoiding unwanted breaking changes.  </span></p>
<h3 id="key-features-of-npm"><span>Key Features of NPM</span></h3>
<ul>
<li value="1"><b><strong>Package Installation:</strong></b><span> NPM allows users to quickly install packages (libraries or tools) by simply using the command npm install &lt;package-name&gt;.</span></li>
<li value="2"><b><strong>Dependency Management: </strong></b><span>It handles the installation of all dependencies required by your project, ensuring your application runs smoothly without version conflicts.</span></li>
<li value="3"><b><strong>Version Control:</strong></b><span> NPM helps manage different versions of packages and ensures that your project uses the correct versions of dependencies.</span></li>
<li value="4"><b><strong>Scripts:</strong></b><span> With NPM, developers can automate tasks such as testing, building, and running code by defining custom scripts in the package.json file.</span></li>
</ul>
<h2 id="some-facts-about-npm"><b><strong>Some facts about NPM</strong></b></h2>
<ul>
<li value="1"><span>At the time of writing this article, NPM has 580096 registered packages. The average rate of growth of this number is 291/day which outraces every other package registry.</span></li>
<li value="2"><span>npm is open source</span></li>
<li value="3"><span>The top npm packages in the decreasing order are: lodash, async, react, request, express.</span></li>
</ul>
<p dir="ltr"><span>To master NPM and streamline your full-stack development workflow, the</span><b><strong> </strong></b><a href="https://gfgcdn.com/tu/SX1/" target="_blank" rel=""><b><strong>Full Stack Development with Node JS</strong></b></a><b><strong> course </strong></b><span>offers detailed lessons on managing packages, scripts, and dependencies for full-stack applications</span></p>
<p><img src="https://media.geeksforgeeks.org/wp-content/uploads/20230712101623/npm.webp" alt="Node Package Manager(npm)" width="1050" height="503"></p>
<h2 id="installing-npm"><b><strong>Installing NPM:</strong></b></h2>
<p dir="ltr"><span>To install NPM, it is required to install Node.js as NPM gets installed with Node.js automatically. </span></p>
<p><a href="https://nodejs.org/en/" target="_blank" rel="nofollow noreferrer noopener"><span>Install Node.js</span></a><span>. </span></p>
<h2 id="checking-and-updating-npm-version"><b><strong>Checking and updating npm version</strong></b></h2>
<p dir="ltr"><span>Version of </span><b><strong>npm </strong></b><span>installed on system can be checked using following syntax: </span></p>
<h3 id="syntax-to-check-npm-version"><b><strong>Syntax to check npm version:</strong></b></h3>
<pre><span>npm -v</span></pre>
<div style="width: 810px" class="wp-caption alignnone"><img src="https://media.geeksforgeeks.org/wp-content/uploads/npm-version.png" alt="npm -v output" width="424" height="151" loading="lazy"><p class="wp-caption-text">Checking npm version</p></div>
<p dir="ltr"><span>If the installed version is not latest, one can always update it using the given syntax: </span></p>
<h3 id="syntax-to-update-npm-version"><b><strong>Syntax to update npm version:</strong></b></h3>
<pre><span>npm update npm@latest -g</span></pre>
<p dir="ltr"><span> As </span><b><strong>npm</strong></b><span> is a global package, </span><b><strong>-g</strong></b><span> flag is used to update it </span><b><strong>globally</strong></b><span>. </span></p>
<h2 id="creating-a-node-project"><b><strong>Creating a Node Project:</strong></b></h2>
<p dir="ltr"><span>To create a Node project, </span><b><strong>npm init</strong></b><span> is used in the folder in which user want to create project. The npm command line will ask a number of questions like </span><b><strong>name, license, scripts, description, author, keywords, version, main file</strong></b><span> etc. After npm is done creating the project, a </span><a href="https://www.geeksforgeeks.org/node-js-package-json/" target="_blank" rel="noopener"><span>package.json</span></a><span> file will be visible in project folder as a proof that the project has been initialized. </span></p>
<div style="width: 810px" class="wp-caption alignnone"><img src="https://media.geeksforgeeks.org/wp-content/uploads/npm-init-2.png" alt="npm init" width="529" height="562" loading="lazy"><p class="wp-caption-text">npm init</p></div>
<h2 id="installing-packages"><b><strong>Installing Packages</strong></b></h2>
<p dir="ltr"><span>After creating the project, next step is to incorporate the packages and modules to be used in the Node Project. To install packages and modules in the project use the following syntax:  </span></p>
<h3 id="syntax-to-install-node-package"><b><strong>Syntax to install Node Package</strong></b></h3>
<pre><span>npm install package_name</span></pre>
<p dir="ltr"><b><strong>Example:</strong></b><span> Installing the express package into the project. Express is the web development framework used by the Node</span></p>
<pre><span>npm install express</span></pre>
<h2 id="using-a-package-in-node"><span>Using a package in Node</span></h2>
<p dir="ltr"><span>To use express in the Node, follow the below syntax: </span></p>
<h3 id="syntax-to-use-installed-packages"><b><strong>Syntax to use Installed Packages</strong></b></h3>
<pre><span>var express = require('express');</span></pre>
<div style="width: 810px" class="wp-caption alignnone"><img src="https://media.geeksforgeeks.org/wp-content/uploads/npm-install-express-save.png" alt="npm install express" width="562" height="163" loading="lazy"><p class="wp-caption-text">Installing express module</p></div>
<h2 id="installing-a-package-globally"><b><strong>Installing a Package Globally</strong></b></h2>
<p dir="ltr"><span>To install a package globally (accessible by all projects in system), add an extra </span><b><strong>-g</strong></b><span> tag in syntax used to install the package. Installing </span><b><strong>nodemon</strong></b><span> package globally. </span></p>
<h3 id="syntax-to-install-packages-globally"><span>Syntax to Install Packages Globally</span></h3>
<pre><span>npm install nodemon -g</span></pre>
<div style="width: 810px" class="wp-caption alignnone"><img src="https://media.geeksforgeeks.org/wp-content/uploads/npm-install-nodemon-globally.png" alt="npm install nodemon -g global module install example" width="566" height="287" loading="lazy"><p class="wp-caption-text">Installing nodemon package globally</p></div>
<h2 id="popular-npm-packages"><span>Popular NPM Packages</span></h2>
<p dir="ltr"><span>NPM has a massive library of packages. Here are a few popular packages that can enhance your Node.js applications:</span></p>
<ul>
<li value="1"><b><strong>Express</strong></b><span>: A fast, minimal web framework for building APIs and web applications.</span></li>
<li value="2"><b><strong>Mongoose</strong></b><span>: A MongoDB object modeling tool for Node.js.</span></li>
<li value="3"><b><strong>Lodash</strong></b><span>: A utility library delivering consistency, customization, and performance.</span></li>
<li value="4"><b><strong>Axios</strong></b><span>: A promise-based HTTP client for making HTTP requests.</span></li>
<li value="5"><b><strong>React</strong></b><span>: A popular front-end library used to build user interfaces.</span></li>
</ul>
<h2 id="controlling-where-the-package-gets-installed"><b><strong>Controlling where the package gets installed</strong></b></h2>
<p dir="ltr"><span>To install a package and simultaneously save it in </span><a href="https://www.geeksforgeeks.org/node-js-package-json/" target="https://www.geeksforgeeks.org/node-js-package-json/" rel="noopener"><span>package.json</span></a><span> file (in case using Node.js), add </span><b><strong>&#8211;save</strong></b><span> flag. The </span><b><strong>&#8211;save</strong></b><span> flag is default in npm install command so it is equal to </span><b><strong>npm install package_name</strong></b><span> command. </span></p>
<p dir="ltr"><b><strong>Example:</strong></b></p>
<pre><span>npm install express --save</span></pre>
<h3 id="usage-of-flags"><span>Usage of Flags:</span></h3>
<ul>
<li value="1"><b><strong>&#8211;save: </strong></b><span>flag one can control where the packages are to be installed. </span></li>
<li value="2"><b><strong>&#8211;save-prod : </strong></b><span>Using this packages will appear in Dependencies which is also by default. </span></li>
<li value="3"><b><strong>&#8211;save-dev : </strong></b><span>Using this packages will get appear in devDependencies and will only be used in the development mode. </span></li>
</ul>
<blockquote>
<p dir="ltr"><b><strong>Note: </strong></b><span>If there is a package.json file with all the packages mentioned as dependencies already, just type npm install in terminal</span></p>
</blockquote>
<h2 id="save-directory-of-installed-modules"><b><strong>Save Directory of Installed Modules</strong></b></h2>
<p dir="ltr"><span>NPM installs the dependencies in local mode (Default) which go to the </span><b><strong>node_modules</strong></b><span> directory present in the folder of Node application. To see all the locally installed modules use </span><b><strong>npm ls</strong></b><span> command.  </span></p>
<h2 id="uninstalling-packages"><b><strong>Uninstalling Packages</strong></b></h2>
<p dir="ltr"><span>To uninstall packages using npm, follow the below syntax: </span></p>
<h3 id="syntax-to-uninstall-packages"><b><strong>Syntax to uninstall packages:</strong></b></h3>
<pre><span>npm uninstall</span></pre>
<p dir="ltr"><b><strong>Example:</strong></b><span> To uninstall the express package </span></p>
<div style="width: 810px" class="wp-caption alignnone"><img src="https://media.geeksforgeeks.org/wp-content/uploads/npm-uninstall-express-example.png" alt="npm install package_name example" width="569" height="161" loading="lazy"><p class="wp-caption-text">Uninstalling express</p></div>
<p dir="ltr"><b><strong>Syntax to uninstall Global Packages:</strong></b></p>
<pre><span>npm uninstall package_name -g</span></pre>
<h2 id="using-semantic-versioning-to-manage-packages"><b><strong>Using Semantic Versioning to manage packages:</strong></b></h2>
<p><img src="https://media.geeksforgeeks.org/wp-content/uploads/semantic.png" alt="versioning major minor patch explanation" width="inherit" height="inherit" loading="lazy"></p>
<ul>
<li value="1"><span>To install a package of a specific version, mention the full and exact version in the package.json file.</span></li>
<li value="2"><span>To install the latest version of the package, mention &#8220;*&#8221; in front of the dependency or &#8220;latest&#8221;. This will find the latest stable version of the module and install it.</span></li>
<li value="3"><span>To install any version (stable one) above a given version, mention it like in the example below: </span><b><strong>&#8220;express&#8221;:&#8221;^4.1.1&#8243;.</strong></b><span> in package.json file. The caret symbol (^) is used to tell the npm to find a version greater than 4.1.1 and install it. </span></li>
</ul>
<div style="width: 810px" class="wp-caption alignnone"><img src="https://media.geeksforgeeks.org/wp-content/uploads/20241015165204023961/nodejs-NPM-.webp" alt="nodejs-NPM-" width="1000" height="470" srcset="https://media.geeksforgeeks.org/wp-content/uploads/20241015165204023961/nodejs-NPM-.webp 1000w,https://media.geeksforgeeks.org/wp-content/uploads/20241015165204023961/nodejs-NPM--100.webp 100w,https://media.geeksforgeeks.org/wp-content/uploads/20241015165204023961/nodejs-NPM--200.webp 200w,https://media.geeksforgeeks.org/wp-content/uploads/20241015165204023961/nodejs-NPM--300.webp 300w,https://media.geeksforgeeks.org/wp-content/uploads/20241015165204023961/nodejs-NPM--660.webp 660w,https://media.geeksforgeeks.org/wp-content/uploads/20241015165204023961/nodejs-NPM--768.webp 768w" loading="lazy"><p class="wp-caption-text">NodeJS NPM</p></div>
<div hideAd="MID"></div><br/><div id="AP_G4GR_6"></div>

                                    <div class='article_bottom_text'></div><br>
                                                                          <div id="video-tab-content" class="video-tab-content">
                                        <div style="text-align: center; margin: 20px 0px;" id="GFG_AD_InContent_Desktop_728x280"></div>
                                                                              </div>
                                                                <div class="d-row content-bw article-pgnavi v-divider-gfg"style="margin-top: 20px;">
                            <div class="article-pgnavi_prev"><div class="comment_div" data-title="Comments"><button class="author_footer_btn"  data-gfg-action="loadComments">
    <div class='discussion_panel'>
        <i class='discussion_button'>
        </i>
        Comment
    </div></button></div><div class="trigger-div"><button class="author_footer_btn"><div class="more_info">More info<span class="more_info_uparrow gfg-icon gfg-icon_arrow-down-thin"></span></div></button></div></div>
                                                              <div class="article-pgnavi_next">
                                    <a href="https://www.geeksforgeeks.org/node-js-global-objects/?ref=next_article" class="pg-head">
                                        <span>Next Article</span>
                                        <span class="gfg-icon gfg-icon_next"></span>
                                    </a>
                                    <!-- <div class="pg-meta">8 Min Read&ensp;|&ensp;<a href="#">Java</a></div> -->
                                    <div class="pg-main">
                                        <a href="https://www.geeksforgeeks.org/node-js-global-objects/?ref=next_article">Node.js Global Objects</a>
                                    </div>
                                </div>
                                                        </div>
                            <div class="article-meta-author-details hidden-div">
                                        <div class="article-meta-author-details-block">
                                            <div class="article-meta-author-details-profile-display">
                                                <div class="author_info">
                                                <div class="article-meta-author-details-profile-display-icon">
                                                    <a href="https://www.geeksforgeeks.org/user/Parikshit Hooda/contributions/?itm_source=geeksforgeeks&itm_medium=article_author&itm_campaign=auth_user" style="text-decoration: none;"><div class="image-wrap" style="position: relative"><p class="profileCard-profile-picture" style="background-color:#E5F9DB;  margin:0px;">P</p>
        <div style="position: absolute;top: -35px; left: -13px;">
            <i class="gfg-badge-icon md scholar"></i>
        </div>
        </div>
</a>                                                </div>
                                                <div class="article-meta-author-details-profile-display-name" >
                                                    <a aria-label="author profile" href="https://www.geeksforgeeks.org/user/Parikshit Hooda/contributions/?itm_source=geeksforgeeks&itm_medium=article_author&itm_campaign=auth_user" style="display: block;overflow: hidden;width: 65px;text-decoration: none;text-overflow: ellipsis;color: var(--gfg-title-color);font-weight: bold;white-space: nowrap;">Parikshit Hooda</a>                                                </div>
                                                </div>
                                                <div class="author_follow_btn"><div class="article-meta-author-details-follow-button">
            <div class="follow-container">
            <div class="follow-btn hideIt" >
<button id="followAuthor" type="button" onclick ="followOrUnfollowAuthor()" value="Parikshit Hooda">
<span role="img" aria-label="plus" class="plus-icon"><svg viewBox="64 64 896 896" focusable="false" data-icon="plus" width="1em" height="1em" fill="currentColor" aria-hidden="true"><defs><style></style></defs><path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8z"></path><path d="M176 474h672q8 0 8 8v60q0 8-8 8H176q-8 0-8-8v-60q0-8 8-8z"></path></svg></span> <span>Follow</span></button></div></div></div></div>                                            </div>
                                            
                                        </div>
                                        <div class="article_bottom_suggestion_wrapper">
                                            <div class="article_bottom_suggestion" data-title="Follow">
                                                <a href='https://news.google.com/publications/CAAqBwgKMLTrzwsw44bnAw?hl=en-IN&gl=IN&ceid=IN%3Aen' target="_blank">
                                                    <img class="gfg-icon_Gnews no-zoom-in-cursor" src=https://media.geeksforgeeks.org/auth-dashboard-uploads/Google-news.svg  loading="lazy" alt="News"></img>
                                                </a>
                                            </div> 
                                            <div pid="196431" class="article--viewer_like tooltip tooltipBottom" data-title="Like Article">
                                                <!-- <span class="tooltiptext likeTooltipBottom">Like Article</span> -->
                                                <button id="likeButton" aria-label="like article" data-gfg-action="like-article" data-bookmark-value="0" data-liked="false" style="color: #5B5A5A !important; display: flex; align-items: center; background-color: unset; margin: 0px !important; padding: 5px 0px;">
                                                    <i class="author-badge-like-button"></i>
                                                    <figure id="likeCount" style="margin-left: 3px; margin-top: 4px; color: var(--like-count-color); font-size: 14px; font-weight: 600;" class="favoriteText"></figure>
                                                </button>
                                            </div>
                                            <div class="article_bottom_suggestion" onclick="improveArticleCall()" data-title="Improve">
                                            <span class="improveTooltipBottom">Improve</span>
                                                <i class="author-badge-improvement-button"></i>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                                                </article>
                        
                                                 <div class="article--recommended article--recommended_wrapper" id="similar-reads">
                                <h3 class="new-top-bar top-bar-title">Similar Reads</h3>
                                <div class="gfg-similar-reads-list">
                                    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/difference-between-npm-install-and-npm-update-in-node-js/?ref=asr1">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Difference between npm install and npm update in Node.js</div>
                <div class="gfg-similar-read-item-subheading">NPM is like a powerhouse for Node.js that contains all the necessary modules for the smooth running of the node.js application. It gets installed on our machine when we install Node.js on our Windows, Linux or MAC OS. How to install Node on the machine? Refer to this article. NPM has 580096 registered packages. The average rate of growth of this nu</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">5 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-install-axios-npm-in-terminal/?ref=asr2">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Axios npm - How to Install Axios npm in Terminal?</div>
                <div class="gfg-similar-read-item-subheading">Axios is a popular JavaScript library for making HTTP requests in web applications. It simplifies the process of sending asynchronous requests and handling responses. It is commonly used with Node.js and in browser-based projects and can be installed via NPM (Node Package Manager). In this article, we will explore the step-by-step process of instal</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-clear-the-cache-in-npm/?ref=asr3">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">npm cache clean - How to Clear the Cache in NPM ?</div>
                <div class="gfg-similar-read-item-subheading">Clearing the cache in NPM (Node Package Manager) is very important. It helps to resolve various issues and ensures smooth functioning of the Node.js projects. The NPM cache stores downloaded packages and their metadata, which can sometimes become corrupted or outdated, leading to installation problems, dependency conflicts, or other issues. Table o</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">5 min read</span>
            </div>
        </a>
    <div id="GFG_AD_Desktop_BTF_336x280_3" style="margin : 0px auto 13px;"></div>
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/remove-npm-npm-uninstall/?ref=asr4">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Remove NPM - npm uninstall</div>
                <div class="gfg-similar-read-item-subheading">To remove npm (Node Package Manager) from your macOS system, you can't use npm uninstall since npm itself doesn't support uninstalling itself. Instead, you need to remove it manually along with Node.js. Table of Content What is NPM?What is NPM remove?Installing a package using npmUninstalling a Package using npmRemove npmRemove a Dev DependencyWhat</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-solve-npm-error-npm-err-code-elifecycle/?ref=asr5">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to solve npm error npm ERR! code ELIFECYCLE ?</div>
                <div class="gfg-similar-read-item-subheading">In order to solve the "npm ERR! code ELIFECYCLE " error which is a very common type of error that occurs during npm operation on our command prompt or terminal such as installing npm or an npm package, follow the steps given below :  Terminal output of the error : Fixing common NPM errors like npm ERR! code ELIFECYCLE can save time during developme</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/difference-between-npm-i-and-npm-ci-in-node-js/?ref=asr6">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Difference between npm i and npm ci in Node.js</div>
                <div class="gfg-similar-read-item-subheading">npm i or npm install is used to install, modify, and update the dependencies in a project along with updating the dependencies in package-lock.json while npm ci only reinstalls all the packages mentioned in the package-lock.json with the specified versions and can't modify the lock packages. Let's discuss the difference between npm i and npm ci in</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-get-a-list-of-globally-installed-npm-packages-in-npm/?ref=asr7">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How To Get a List of Globally Installed NPM Packages in NPM?</div>
                <div class="gfg-similar-read-item-subheading">To get a list of globally installed NPM packages, there are several methods you can use depending on the level of detail and format you need. Below, we’ll cover two main approaches that utilize different commands to retrieve this information: npm list and npm ls. Table of Content Approach 1: Using 'npm list' command:Approach 2: Using 'npm ls' comma</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    <div id="GFG_AD_Desktop_BTF_336x280_4" style="margin : 0px auto 13px;"></div>
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/steps-to-create-and-publish-npm-packages/?ref=asr8">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Steps to Create and Publish NPM packages</div>
                <div class="gfg-similar-read-item-subheading">In this article, we will learn how to develop and publish your own npm package (also called an NPM module). There are many benefits of NPM packages, some of them are listed below: Reusable codeManaging code (using versioning)Sharing code The life-cycle of an npm package takes place like below: 1. Setup a Project: Setting up a project is required be</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">7 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-use-external-modules-and-npm-in-a-project/?ref=asr9">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to use External Modules and NPM in a project ?</div>
                <div class="gfg-similar-read-item-subheading">Need for External Modules: For a large JavaScript application, it becomes difficult and messy to write the whole code in just one JavaScript file. This is where CommonJS comes into the picture and this CommonJS format defines a module format that can be used up for breaking your JS application into multiple files. Node.js adopts this CommonJS forma</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-import-sass-through-npm/?ref=asr10">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to import SASS through npm ?</div>
                <div class="gfg-similar-read-item-subheading">Introduction to SASS: SASS stands for 'Syntactically awesome style sheets'. It is an extension of CSS, that makes it easy to use variables of CSS, nested rules, inline import, and many other important features SASS has two syntax options: SCSS (Sassy CSS): It uses the .scss file extension and is fully compliant with CSS syntax. SASS: It uses .sass</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-import-less-through-npm/?ref=asr11">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to import LESS through npm ?</div>
                <div class="gfg-similar-read-item-subheading">LESS stands for Leaner Style Sheets. It is a backward-compatible language extension for CSS. Web pages can be styled by writing appropriate code in a file with .less extension and then converting it in a CSS file. Steps to install LESS: Step 1: To install LESS, first make sure that node and npm are already installed in the system. If not, then inst</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/introduction-to-npm-scripts/?ref=asr12">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Introduction to NPM scripts</div>
                <div class="gfg-similar-read-item-subheading">NPM is a Node Package Manager. It is the world's largest Software Registry. This registry contains over 800,000 code packages. Many Open-source developers use npm to share software. Many organizations also use npm to manage private development. "npm scripts" are the entries in the scripts field of the package.json file. The scripts field holds an o</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/node-js-npm-arraybuffer-to-string-module/?ref=asr13">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Node.js NPM arraybuffer-to-string Module</div>
                <div class="gfg-similar-read-item-subheading">NPM(Node Package Manager) is a package manager of Node.js packages. There is an NPM package called arraybuffer-to-string used to decode array buffers in actual strings. The package not only converts the buffer to 'utf8' string but also it converts the buffer to many forms like base64 encoded string, a hex-encoded string that we use in many contexts</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">4 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/node-js-npm-string-to-arraybuffer-module/?ref=asr14">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Node.js NPM string-to-arraybuffer Module</div>
                <div class="gfg-similar-read-item-subheading">NPM(Node Package Manager) is a package manager of Node.js packages. There is a NPM package called 'shortid' used to short non-sequential url-friendly unique ids. Command to install: npm install string-to-arraybuffer Syntax to import the package in local file const str2ab = require('string-to-arraybuffer') Syntax to convert string to an array buffer</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">5 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/node-js-npm-shortid-module/?ref=asr15">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Node.js NPM shortid Module</div>
                <div class="gfg-similar-read-item-subheading">NPM(Node Package Manager) is a package manager of Node.js packages. There is a NPM package called 'shortid' used to create short non-sequential url-friendly unique ids. By default, it uses 7-14 url-friendly characters: A-Z, a-z, 0-9, _-. It Supports cluster (automatically), custom seeds, custom alphabet. It Can generate any number of ids without du</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">6 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/node-js-npm-uuid/?ref=asr16">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Node.js NPM uuid</div>
                <div class="gfg-similar-read-item-subheading">NPM(Node Package Manager) is a package manager of Node.js packages. There is an NPM package called 'shortid' used to create short non-sequential url-friendly unique ids. Unique ids are created by Cryptographically-strong random values that's why it is very secure. It has support for cross-platform like Node, React Native, Chrome, Safari, Firefox, e</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">6 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-install-modules-without-npm-in-node-js/?ref=asr17">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to install modules without npm in node.js ?</div>
                <div class="gfg-similar-read-item-subheading">We can install modules required for a particular project in node.js without npm, the recommended node package manager using yarn. Yarn is a wonderful package manager. Like npm, if you have a project folder with package.json containing all the required dependencies mentioned for the project, you can use yarn to install all the dependencies. 1. How t</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-list-npm-user-installed-packages-in-node-js/?ref=asr18">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to list npm user-installed packages in Node.js?</div>
                <div class="gfg-similar-read-item-subheading">What is Node.js? Node.js is an open source and cross-platform runtime environment for executing JavaScript code outside of a browser. Click here for more. What is npm? Here, "npm" stands for "Node Package Manager" which is the package manager for Node.js and serves as a command-line utility for interacting with the npm to install different online p</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-does-npm-handle-version-conflicts/?ref=asr19">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How does NPM handle version conflicts ?</div>
                <div class="gfg-similar-read-item-subheading">Consider a case where we have installed a module say A. Now we want to install another module called B and B depends on A but the problem is the version of A which is required by module B is different from the version of A installed at first. So how npm will handle this situation where our application depends on two different versions of module A.</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-publish-a-reactjs-component-to-npm/?ref=asr20">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to publish a ReactJS component to NPM ?</div>
                <div class="gfg-similar-read-item-subheading">Follow these simple steps in order to publish your own ReactJS component to NPM. Step 1: Initial Setup In order to publish any ReactJS Component to npm (node package manager), first we have to create a React component in the React app. Following are the instructions for creating any react app. Create a React application using the following command:</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-document-npm-packages/?ref=asr21">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to document NPM packages ?</div>
                <div class="gfg-similar-read-item-subheading">In this article, we will see how to write the documentation of an NPM package. Documentation is an essential part of any NPM package because it gives an idea about the package method and how to use them. Good documentation makes your npm package popular npm packages. The Documentation of the npm package depends on many factors, see the step-by-step</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">2 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/describe-the-mechanism-of-npm/?ref=asr22">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Describe the mechanism of NPM</div>
                <div class="gfg-similar-read-item-subheading">NPM stands for Node Package Manager that is used to manage various dependencies of the node.js framework. It is a command-line tool that can be used to install, update and uninstall the node.js packages in the application. It acts as a repository for all the open-sources packages of the node.js framework. Anyone can contribute to this repository in</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/what-are-request-and-cheerio-in-node-js-npm/?ref=asr23">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">What are Request and Cheerio in Node.js NPM ?</div>
                <div class="gfg-similar-read-item-subheading">In this article, we are going to learn about that request and the cheerio library of node.js with their installation. Request Library: The request module is a very popular library in node.js. It helps in sending the request to the external web application to make the conversation between the client and the server by using the HTTP request. HTTP(or</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-add-a-non-npm-dependency-to-package-json/?ref=asr24">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to add a non-npm dependency to package.json?</div>
                <div class="gfg-similar-read-item-subheading">One of the great features of the npm ecosystem is the ability to install and manage packages from the npm registry. These dependencies are listed in the "dependencies" section of the project's package.json file. However, sometimes you may need to use a dependency that isn't available through npm, such as a library that you've created yourself, or o</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">5 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-generate-borderless-table-using-text-table-npm-module-in-node-js/?ref=asr25">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to Generate Borderless Table using 'text-table' NPM Module in Node.js ?</div>
                <div class="gfg-similar-read-item-subheading">'text-table' is a very useful NPM module that can be used to generate borderless tables from the array of data. It's a very simple module and you can easily create tables that are well-aligned, simple to read, etc. One of the main advantages of this module is its simplicity. With just a few lines of code, we can create a well-structured table and w</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/pluralize-and-singularize-any-word-using-the-pluralize-npm-module/?ref=asr26">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Pluralize and Singularize any Word using the 'pluralize' NPM Module</div>
                <div class="gfg-similar-read-item-subheading">The 'pluralize' npm module is a very important and useful NPM module that can convert singular English words to their plural form and vice versa also. This module uses a pre-defined list of rules, applied in order, to singularize or pluralize a given word which can be used in node.js applications or projects. Using the 'pluralize' module in Node.js</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-use-loading-animation-by-using-the-react-loader-spinner-through-npm/?ref=asr27">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to use loading animation by using the react-loader-spinner through npm ?</div>
                <div class="gfg-similar-read-item-subheading">In React, loading animation by using the react-loader-spinner enhances the user experience and provides visual feedback during these loading periods. For the asynchronous operations and data fetching it works as a visual representation of the process until the data is loaded. React developers can easily add loading animations to their applications</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/is-there-a-way-to-force-npm-to-generate-package-lock-json/?ref=asr28">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">Is there a way to force npm to generate package-lock.json?</div>
                <div class="gfg-similar-read-item-subheading">The package-lock.json file in npm is used for ensuring consistent installations of dependencies across different environments or for collaborative projects. package-lock.json is created for locking the dependency with the installed version. It will install the exact latest version of that package in your application and save it in package.json. In</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">1 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/what-is-npm-how-to-use-it/?ref=asr29">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">What is NPM & How to use it ?</div>
                <div class="gfg-similar-read-item-subheading">NPM, short for Node Package Manager, is the default package manager for NodeJS. It is a command-line utility that allows you to install, manage, and share packages or modules of JavaScript code. These packages can range from small utility libraries to large frameworks, and they can be easily integrated into Node.js projects to extend their function</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">3 min read</span>
            </div>
        </a>
    
        <a class="gfg-similar-read-item" href="https://www.geeksforgeeks.org/how-to-build-and-publish-an-npm-package-for-react-using-typescript/?ref=asr30">
            <div class="gfg-similar-read-item-content">
                <div class="gfg-similar-read-item-heading">How to build and publish an NPM package for React using Typescript?</div>
                <div class="gfg-similar-read-item-subheading">In development, creating and distributing reusable components is essential for building scalable and maintainable applications. With the popularity of TypeScript and React, you can easily package and share your components as NPM packages. This tutorial will teach us how to create and release our NPM packages (NPM modules). Prerequisites:GitHub Acco</div>
            </div>
            
            <div class="reading-time">
                <i class="reading-time-icon" data-gfg-action="readingtime"></i>
                <span style="color: var(--recommendation-card-text-color);font-size: 14px;font-weight: 500;line-height: 17px;">4 min read</span>
            </div>
        </a>
                                    </div>
                            </div>
                        

                        <div class="bottom-wrap" style="padding: 0px 20px;margin-bottom: 10px;">
                                                            <div class="improved">
                                    <div class="t-head">Article Tags : </div>
                                    <ul>
                                        
            <li style="border-radius: 25px;" class="">
                <a href="https://www.geeksforgeeks.org/category/web-technologies/javascript/?ref=article_category">JavaScript</a>
            </li>
            <li style="border-radius: 25px;" class="">
                <a href="https://www.geeksforgeeks.org/category/web-technologies/node-js/?ref=article_category">Node.js</a>
            </li>
            <li style="border-radius: 25px;" class="">
                <a href="https://www.geeksforgeeks.org/category/technical-scripter/?ref=article_category">Technical Scripter</a>
            </li>
            <li style="border-radius: 25px;" class="">
                <a href="https://www.geeksforgeeks.org/category/web-technologies/?ref=article_category">Web Technologies</a>
            </li>
            <li style="border-radius: 25px;display:none;" class="articles-hidden-tags">
                <a href="https://www.geeksforgeeks.org/tag/javascript-questions/?ref=article_tag">JavaScript-Questions</a>
            </li>
            <li style="border-radius: 25px;display:none;" class="articles-hidden-tags">
                <a href="https://www.geeksforgeeks.org/tag/node-npm/?ref=article_tag">Node-npm</a>
            </li>                                    </ul>
                                                                            <button id="showMoreTagsBtn" class="show-more-recommendation-button">+2 More</button>
                                                                    </div>
                                                                                </div>
                                                <div class="vote-wrap">
                                <div style="display:none;align-items:center;justify-content:center;width:100%;">
                                    <button aria-label="like" data-type="like" class="vote-this" style="margin-right: 0; margin-left:0 ;">
                                        <i class="gfg-icon gfg-icon_like favoriteIcon"></i>
                                        <span class="favoriteLike">Like</span>
                                        <figure class="favoriteText"></figure>
                                    </button>
                                                                    </div>
                            </div>

                        </div>
                            <div class="article-meta">
                                                                                    <div class="bottom-wrap">
                              <div id="GFG_AD_InContent_Desktop_BTF_650x250" style="text-align:center;max-height: 300px;"></div>
                            </div>
                                                        <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
                <div id="report_modal_content" class="report_modal_content" style="display:hidden;"></div>
        <div class="onopen-discussion-panel">
            <div class="discussion-tab">
                <div class="discussion_heading">
                    <div></div>
                    <i class="gfg-icon close-tab-icon"></i>
                </div> 
                <div class="discussion_content">                            <div style="height:100%">
                                <div style="height:100%" id="comment-system"></div>
                            </div>

                            
</div>
            </div>
        </div>  

        <div class="rightBar" style="padding-right: 5px;">
                
<style>
	.article--container_content{
		align-items: unset !important;
	}
	.sideBar {
		position: sticky !important;
	}
	.gfg-icon_switch::after {
		background-position: -40px -281px !important;
	}
	.gfg-icon_transaction::after {
		background-position: -40px -321px !important;
	}
	.header-main__profile.selected+.mega-dropdown{
		width: 225px !important;
	}
	#courses-container .course-price{
		display:none;
	}
	/* .side--container_wscard .card-content .content .meta:empty, .practiceBannerFromPlugin{
		display:none !important;
	} */
	.side--container_wscard .card-content .content .meta{
		display:block !important;
	}
	.side--container_wscard .card-content .content .meta p{
		background-color: rgba(254, 212, 91, 0.6);
		font-size: 10pt;
		font-weight: bold;
		display: inline-block;
		color: var(--color-black);
		margin-top: 15px;
		padding: 0px 5px;
	}
	#try-it{
		display:initial !important;
	}
	#try-it .try-it-div{
		line-height: 34px;
	}
	.gfg-icon_dark-mode::after {
		background-position: -40px -680px;
	}
	.side--container_wscard .head{
		font-size: 14px !important;
	}
	.nineDot-menu, .gfg-icon_ndot{
		display: none;
	}
	#text-15{
		flex-direction: column;
	}
	.mtq_correct_marker, .mtq_wrong_marker{
		display: none;
	}
	.sidebar_wrapper > :last-child{
		margin: unset !important;
		margin-left: 5px !important;
		margin-top: 20px !important;
		top: 70px !important;
	}
	.darkMode-wrap{
		bottom:1% !important;
	}
	#secondary .textwidget{
		margin-left: auto;
		margin-right: 0;
		text-align: right;
	}
	#secondary .widget_text:last-child{
		top: 70px !important;
	}
	@media(max-width:768px){
		#scrollTopBtn{
			display:none !important;
		}
	}
	.rightbar_loggedin_promo_cta{
		display:flex;
		cursor:pointer;
		margin-bottom:20px;
	}
</style>

<div id="secondary" class="widget-area">
	<div class='june2024SaleRightBarBanner' id='rightBarSaleBanner'></div>
	<!------------------------ text-15 (for Ads) ------------------------ -->
	<aside id="text-15" class="widget widget_text">
		<div class="textwidget">
					<div id="_GFG_ABP_Desktop_RightSideBar_ATF_300x600_2"></div>
			<div id="GFG_AD_Desktop_RightSideBar_ATF_300x250_2" style="min-width: 300px;margin-bottom:10px;"></div>
			<div id='GFG_AD_Desktop_RightSideBar_ATF_300x600' style='min-width: 300px; min-height: 600px;margin-bottom:10px;'></div>
					</div>
	</aside>

	<!------------------------ text-16 (For Ads)------------------------ -->
	<aside id="text-16" class="widget widget_text">
		<div class="textwidget">
					<div id="_GFG_ABP_Desktop_RightSideBar_MTF_300x600"></div>
			<div id='GFG_AD_Desktop_RightSideBar_MTF_300x250' style='min-width: 300px;'></div>
			<div id="_GFG_ABP_Desktop_RightSideBar_BTF_300x600"></div>
			<div id="_GFG_ABP_Desktop_RightSideBar_BTF_300x600_3"></div>
				</div>
	</aside>

	<!-- ---------------------- courses section ------------------------- -->
	<div class='whats-new-section'><div><div class='rba_all_pages' id='whatsNewCardContainer'><div class='card-layout-parent'> 
						<div class='arrow-icon'>
							<i class='gfg-icon left-arrow-img'></i>
							<i class='gfg-icon right-arrow-img'></i>
						</div>
						<div class='component'>
							<div class='carousel'>
					<div class="new-card-layout">
							<div class="new-content-wrapper"> 
								<a href="https://www.geeksforgeeks.org/courses/full-stack-node?utm_source=geeksforgeeks&utm_medium=right_sidebar&utm_campaign=course_card">
									<div class="new-card-content">
										<div class="new-card-thumbnail">
											<img src=https://media.geeksforgeeks.org/img-practice/prod/courses/241/Web/Content/FSRNL_1705410152.webp alt="course-img" class="card-image ">
										</div>
										<div class="card-description-grid">
											<div class="grid1">
												<div class="grid1-interested">
													<span class="interested-text">301k+ interested Geeks </span>
												</div>
											</div>
											<div class="grid2-div">
												<strong class="grid2-description-heading">Full Stack Development with React & Node JS - Live </strong>
											</div>
											<div class="grid3">
												<div class="grid3-course-explore">
												<!-- <img src=https://media.geeksforgeeks.org/img-practice/Levels-1669283463.svg alt="" class="level-symbol"></img>
													<span class="level-text">Beginner to Advance </span>   -->
													<button class="explore-course">Explore</button> 
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div><div class="new-card-layout">
							<div class="new-content-wrapper"> 
								<a href="https://www.geeksforgeeks.org/courses/data-structures-and-algorithms-in-javascript?utm_source=geeksforgeeks&utm_medium=right_sidebar&utm_campaign=course_card">
									<div class="new-card-content">
										<div class="new-card-thumbnail">
											<img src=https://media.geeksforgeeks.org/img-practice/prod/courses/463/Web/Content/dsa_js_1723009405.webp alt="course-img" class="card-image ">
										</div>
										<div class="card-description-grid">
											<div class="grid1">
												<div class="grid1-interested">
													<span class="interested-text">47k+ interested Geeks </span>
												</div>
											</div>
											<div class="grid2-div">
												<strong class="grid2-description-heading">Data Structures & Algorithms in JavaScript - Self Paced Course </strong>
											</div>
											<div class="grid3">
												<div class="grid3-course-explore">
												<!-- <img src=https://media.geeksforgeeks.org/img-practice/Levels-1669283463.svg alt="" class="level-symbol"></img>
													<span class="level-text">Beginner to Advance </span>   -->
													<button class="explore-course">Explore</button> 
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div><div class="new-card-layout">
							<div class="new-content-wrapper"> 
								<a href="https://www.geeksforgeeks.org/courses/react-js-beginner-to-advance?utm_source=geeksforgeeks&utm_medium=right_sidebar&utm_campaign=course_card">
									<div class="new-card-content">
										<div class="new-card-thumbnail">
											<img src=https://media.geeksforgeeks.org/img-practice/prod/courses/662/Web/Content/React_1720781624.webp alt="course-img" class="card-image ">
										</div>
										<div class="card-description-grid">
											<div class="grid1">
												<div class="grid1-interested">
													<span class="interested-text">12k+ interested Geeks </span>
												</div>
											</div>
											<div class="grid2-div">
												<strong class="grid2-description-heading">React JS Course Online - React JS Certification Course </strong>
											</div>
											<div class="grid3">
												<div class="grid3-course-explore">
												<!-- <img src=https://media.geeksforgeeks.org/img-practice/Levels-1669283463.svg alt="" class="level-symbol"></img>
													<span class="level-text">Beginner to Advance </span>   -->
													<button class="explore-course">Explore</button> 
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div></div></div></div></div></div></div><style>.right-bar-explore-more{ visibility: hidden; min-height: 230px;text-align:left;min-width:300px;max-width:300px; padding-left: 19px; padding-right: 25px; margin-top: 20px;}
        .right-bar-explore-more .title{text-align:left;font-size:20px; font-weight: 600; line-height: 22px; color:var(--em-heading);padding:14px 0;font-family:var(--font-primary)}
        .right-bar-explore-more .rightbar-sticky-ul {list-style: disc outside; padding-left: 17px;} 
        .right-bar-explore-more li{font-size: 14px !important;font-weight: 400;line-height: 18px !important;color: var(--em-text);margin: 14px 0;font-family:var(--font-primary);}
        .right-bar-explore-more li::marker{color: var(--em-text) !important;}
        .right-bar-explore-more .rightbar-sticky-ul a{text-align:left !important; color: var(--em-text); display: block !important;}  
        .right-bar-explore-more .rightbar-sticky-ul a:hover{text-decoration:underline;color:var(--em-link)!important;}
        .right-bar-explore-more hr {margin: 0;background-color: var(--tn-hr);}
        @media (max-width: 991px){
          .right-bar-explore-more{
            width: 85%;
            margin: auto;
            margin-top: 20px;
            max-width: unset;
            display: none !important;
          }
        
          #text-18 .textwidget{
            width: 100%;
          }
        }</style>    <script>
        var rightBarExploreMoreList = `<li style="color:var(--color-black)"><a href="https://www.geeksforgeeks.org/javascript/?ref=rightbar_explore" target="_blank" style="font-family:var(--font-primary)">JavaScript Tutorial</a></li><li style="color:var(--color-black)"><a href="https://www.geeksforgeeks.org/react-interview-questions/?ref=rightbar_explore" target="_blank" style="font-family:var(--font-primary)">React Interview Questions and Answers</a></li><li style="color:var(--color-black)"><a href="https://www.geeksforgeeks.org/javascript-interview-questions-and-answers/?ref=rightbar_explore" target="_blank" style="font-family:var(--font-primary)">JavaScript Interview Questions and Answers</a></li><li style="color:var(--color-black)"><a href="https://www.geeksforgeeks.org/html-tutorial/?ref=rightbar_explore" target="_blank" style="font-family:var(--font-primary)">HTML Tutorial</a></li><li style="color:var(--color-black)"><a href="https://www.geeksforgeeks.org/react/?ref=rightbar_explore" target="_blank" style="font-family:var(--font-primary)">React Tutorial</a></li>`
	</script>

	<!-------------------------------- Text-18 (explore more section + ads) --------------------------->
	<aside id="text-18" class="widget widget_text">
		<div class="textwidget">
					<div class="right-bar-explore-more" style="display:none;visibility: unset;">
				<div class="title">Explore More</div>
				<ul class="rightbar-sticky-ul"></ul>
			</div>
							<div id='GFG_AD_Desktop_RightSideBar_BTF_Sticky_300x250' style='min-width: 300px;margin-bottom:10px'></div>
			<div id='GFG_AD_Desktop_RightSideBar_Docked_160x600' style='min-width: 160px;'></div><div id='GFG_AD_Desktop_RightSideBar_BTFdocked_300x600' style='min-width: 300px;'></div>
			</aside>

	<!-------------------------- Text -20 (For maintaining some CSS) ---------------------- -->
	<aside id="text-20" class="widget widget_text">
		<div class="textwidget">
		 <!-- Please do not delete this div -->
		</div>
	</aside>
</div>

                <div id="user-personal-note" style="display: none;"></div>
        </div>
    </div>
    <section class="disqus-section">
        <div class="article-page_flex">
            <div class="leftBar">
            </div>
        </div>
    </section>
</div>

<div id="video-popup" style="display:none"></div>

<link rel="stylesheet" href='https://www.geeksforgeeks.org/wp-content/themes/iconic-one/css/articleList.min.css?ver=1.7'>

<script>
$(document).ready(function() {
    var isfollowingApiCall = false;
    if ($('.follow-btn').length) {
        var articleRecommendedTop = $(".article--recommended").offset().top;
        var articleRecommendedBottom = articleRecommendedTop + $(".article--recommended").outerHeight();
        $(window).scroll(function() {
            var top_of_element = $(".article--recommended").offset().top;
            var bottom_of_element = $(".article--recommended").offset().top + $(".article--recommended").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();
            if ((bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) || 
                (bottom_of_screen > articleRecommendedTop && top_of_screen < articleRecommendedBottom) ||
                (top_of_screen > articleRecommendedBottom)) {
                if (!isfollowingApiCall) {
                    isfollowingApiCall = true;
                    setTimeout(function(){
                        if (loginData && loginData.isLoggedIn) {
                            if (loginData.userName !== $('#followAuthor').val()) {
                                is_following();
                            } else {
                                $('.profileCard-profile-picture').css('background-color', '#E7E7E7');
                            }
                        } else {
                            $('.follow-btn').removeClass('hideIt');
                        }
                    }, 3000);
                }
            }
        });
    }
    
    $(".accordion-header").click(function() {
        var arrowIcon = $(this).find('.bottom-arrow-icon');
        arrowIcon.toggleClass('rotate180');
    });

});

window.isReportArticle = false;
function report_article(){
    if (!loginData || !loginData.isLoggedIn) {
        const loginModalButton = $('.login-modal-btn')
            if (loginModalButton.length) {
                loginModalButton.click();
            }
    return;
}

    if(!window.isReportArticle){
            //to add loader
            $('.report-loader').addClass('spinner');
            jQuery('#report_modal_content').load(gfgSiteUrl+'wp-content/themes/iconic-one/report-modal.php', {
                PRACTICE_API_URL: practiceAPIURL,
                PRACTICE_URL:practiceURL
            },function(responseTxt, statusTxt, xhr){
                if(statusTxt == "error"){
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
                }
            });
    }else{
        window.scrollTo({ top: 0, behavior: 'smooth' });
        $("#report_modal_content").show();
    }
} 

function closeShareModal() {
    const shareOption = document.querySelector('[data-gfg-action="share-article"]');
    shareOption.classList.remove("hover_share_menu");
    let shareModal = document.querySelector(".hover__share-modal-container");
    shareModal && shareModal.remove();
}

function openShareModal() {
    closeShareModal(); // Remove existing modal if any

    let shareModal = document.querySelector(".three_dot_dropdown_share");
    shareModal.appendChild(Object.assign(document.createElement("div"), { className: "hover__share-modal-container" }));

    document.querySelector(".hover__share-modal-container").append(
        Object.assign(document.createElement('div'), { className: "share__modal" }),
    );

    document.querySelector(".share__modal").append(Object.assign(document.createElement('h1'), { className: "share__modal-heading" }, { textContent: "Share to" }));
    const socialOptions = ["LinkedIn", "WhatsApp", "Copy Link"];

    socialOptions.forEach((socialOption) => {
        const socialContainer = Object.assign(document.createElement('div'), { className: "social__container" });
        const icon = Object.assign(document.createElement("div"), { className: `share__icon share__${socialOption.split(" ").join("")}-icon` });
        const socialText = Object.assign(document.createElement("span"), { className: "share__option-text" }, { textContent: `${socialOption}` });
        const shareLink = (socialOption === "Copy Link") ? 
            Object.assign(document.createElement('div'), { role: "button", className: "link-container CopyLink" }) : 
            Object.assign(document.createElement('a'), { className: "link-container" });

       
        if (socialOption === "LinkedIn") {
            shareLink.setAttribute('href', `https://www.linkedin.com/sharing/share-offsite/?url=${window.location.href}`);
            shareLink.setAttribute('target', '_blank');
        }
        if (socialOption === "WhatsApp") {
            shareLink.setAttribute('href', `https://api.whatsapp.com/send?text=${window.location.href}`); 
            shareLink.setAttribute('target', "_blank");
        }

        shareLink.append(icon, socialText);
        socialContainer.append(shareLink);
        document.querySelector(".share__modal").appendChild(socialContainer);

        //adding copy url functionality
        if(socialOption === "Copy Link") {
            shareLink.addEventListener("click", function() {
                var tempInput = document.createElement("input");
                tempInput.value = window.location.href; 
                document.body.appendChild(tempInput); 
                tempInput.select();
                tempInput.setSelectionRange(0, 99999); // For mobile devices
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                this.querySelector(".share__option-text").textContent = "Copied"
            })
        }
    });
    document.querySelector(".hover__share-modal-container").addEventListener("mouseover", () => document.querySelector('[data-gfg-action="share-article"]').classList.add("hover_share_menu"));
}
function toggleLikeElementVisibility(selector, show) {
    document.querySelector(`.${selector}`).style.display = show ? "block" : "none";
}

function closeKebabMenu(){
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>
<!-- Script for the new design of similar read  -->
<script>
$(document).ready(function() {

    $("#showMoreTagsBtn").click(function() {
        $('.articles-hidden-tags').show();
        $(this).hide();
    });

    $("#showMorePracticeTagsBtn").click(function() {
        $(".practice-tags li:nth-child(n+5)").show();
        $(this).hide();
    });
});
</script>
<!-- Script end for similar read -->
<style>
        .grecaptcha-badge {
            visibility: hidden !important;
        }
        .thank-you-message {
            height: 100%;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .thank-you-message-content {
            margin-top: 17px;
            font: 400 20px var(--font-secondary);
            color: var(--improve-modal-text);
            line-height: 180%;
            text-align: center;
        }
        .thank-you-message-content h2{
          font-family: var(--font-secondary);
        }
        .all-footer-information{
          width: 100% !important;;
        }
        .footer-wrapper_links-list{
           margin-block-start: 0em !important;
           width: 16% !important; 
           padding-inline-start: 18px !important;
        }
        .link-head{
               margin-bottom: 0px;
        }
        @media only screen and (max-width:1340px) {
              .footer-wrapper_links-list{
              overflow-wrap: break-word;
          }
        }
        @media screen and (min-width: 991px)  {
              .all-footer-information{
                padding-left:15px;
          }
        }
        @media only screen and (max-width:980px) {
          .footer-wrapper_branding-address{
               padding-top: 10px;
          }
        }
        @media (max-width: 750px) {
            .thank-you-message-content{
                font-size: 14px;
                line-height: 170%;
            }
        }

        /* CSS variable meant to handle the dark and light mode icon for three 90 event in header courses dropdown */
        :root{
          --three90headericon : url('https://media.geeksforgeeks.org/auth-dashboard-uploads/three90daylogocompressed.svg');
          --three90headericonposition : 0px -40px;
          --three90leftbarimggrid : url('https://media.geeksforgeeks.org/auth-dashboard-uploads/three90leftbarspritecompressed.svg');
          --three90leftbarimgposition : -5px -55px;
          --three90leftbarbgcolour : #b3abd0;
        }

        body[data-dark-mode="true"]{
          --three90leftbarimgposition : -6px 1px;
          --three90headericonposition : 0px 0px;
          --three90leftbarbgcolour: #8c82b9;
        }

        .three90leftbarimg{
          margin-left: -5px;
          height: 30px;
          background-image: var(--three90leftbarimggrid);
          background-repeat: no-repeat;
          background-position: var(--three90leftbarimgposition);
          background-size: 212px;
        }

        .courseTabShimmer{
          position: absolute;
          height: 110%;
          width: 0;
          opacity: .7;
          -webkit-animation: courseShimmer 2s cubic-bezier(0,0,.07,.61) infinite;
          animation: courseShimmer 2s cubic-bezier(0,0,.07,.61) infinite;
          box-shadow: 0 0 25px 5px #dddcdc;
          -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
          padding:0px !important;
          border:unset !important;
        }

        @keyframes courseShimmer{
          0% {
              left: 0;
          }
          55% {
              left: 100%;
          }
          99% {
              left: 110%;
          }
        }

</style>


	</div><!-- #main .wrapper -->
  <div id="displayModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- <div class="upper-box">
        <h3 style="font: normal normal bold 18px/31px var(--font-primary); color: var(--color-black);">Improve your Coding Skills with Practice</h3>
        <button class="upper-box-btn"><a style="color: white !important;" href="https://practice.geeksforgeeks.org/explore?page=1&sortBy=submissions&utm_source=gfg&utm_medium=search-bar&utm_campaign=practice-search">Try It!</a></button>
      </div> -->
      <div class="modal-content">
        <div class="error-message"></div>
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" data-modal="displayModal">&times;</button>
          <h2 class="modal-title" id="dmTitle"></h2>
        </div> -->
        <div class="modal-body" id="dmBody">
            <div id="modal-dm-content"></div>
              <div class="modal-overlay" aria-hidden=true>
                <span class="loader__animation"></span>
              </div>
            <!-- body -->
        </div>
      </div>
    </div>
  </div>  
  <div id="displayModalBackdrop" class="backdrop"></div>
  <!-- Footer start -->
  <footer class="gfg-footer" id="gfg-footer">
      <div class="footer-wrapper">
          <div class="footer-wrapper_branding">
              <a class="footer-wrapper_branding-anchor" aria-label="GeeksforGeeks Logo" href="https://www.geeksforgeeks.org/">
                <img style="height: 32px; width: 230px; max-width: fit-content;" class="footer-wrapper_branding-nlogo" src="https://media.geeksforgeeks.org/auth-dashboard-uploads/gfgFooterLogo.png" alt="geeksforgeeks-footer-logo"/>
              </a>
              <div class="footer-wrapper_branding-address">
                  <div class="address_section">
                    <div class="address-icon-wrapper">
                      <i class="gfg-icon gfg-icon_pin"></i> 
                    <div class="address_div">
                                          <div class="footer-address">
                      Corporate & Communications Address:- A-143, 9th Floor, Sovereign Corporate Tower, Sector- 136, Noida, Uttar Pradesh (201305) | Registered Address:- K 061, Tower K, Gulshan Vivante Apartment, Sector 137, Noida, Gautam Buddh Nagar, Uttar Pradesh, 201305                    </div>
                    </div>
                  </div>
                                      </div>
              </div>
              <div class="footer-wrapper_branding-social">
                  <a href="https://www.facebook.com/geeksforgeeks.org/" rel="noopener noreferrer" aria-label="GeeksforGeeks Facebook" target="_blank">
                      <div class="facebook"></div>
                  </a>
                  <a href="https://www.instagram.com/geeks_for_geeks/" rel="noopener noreferrer" aria-label="GeeksforGeeks Instagram" target="_blank">
                      <div class="instagram"></div>
                  </a>
                  <a href="https://in.linkedin.com/company/geeksforgeeks" rel="noopener noreferrer" aria-label="GeeksforGeeks LinkedIn" target="_blank">
                      <div class="linkedin"></div>
                  </a>
                  <a href="https://twitter.com/geeksforgeeks" rel="noopener noreferrer" aria-label="GeeksforGeeks Twitter" target="_blank">
                      <div class="twitter"></div>
                  </a>
                  <a href="https://www.youtube.com/geeksforgeeksvideos" rel="noopener noreferrer" aria-label="GeeksforGeeks YouTube" target="_blank">
                      <div class="youtube"></div>
                  </a>
              </div>
              <div class="footer-wrapper_branding-app">
                  <a aria-label="GeeksforGeeks App Link" href="https://geeksforgeeksapp.page.link/gfg-app" target="_blank" ><img src="https://media.geeksforgeeks.org/auth-dashboard-uploads/googleplay.png" alt="GFG App on Play Store" id="gplay" loading="lazy"></a>
                  <a aria-label="GeeksforGeeks App Link" href="https://geeksforgeeksapp.page.link/gfg-app" target="_blank"><img src="https://media.geeksforgeeks.org/auth-dashboard-uploads/appstore.png" alt="GFG App on App Store" id="appstore" loading="lazy"></a>
              </div>
          </div> 
        <div class="all-footer-information">
          <div class="footer-wrapper_links" style="justify-content: space-between; text-align: -webkit-left;"><ul class="footer-wrapper_links-list" ><li>Company</li><li><a href=https://www.geeksforgeeks.org/about/?ref=footer>About Us</a></li><li><a href=https://www.geeksforgeeks.org/legal/?ref=footer>Legal</a></li><li><a href=https://geeksforgeeks.zohorecruit.in/careers?ref=footer>Careers</a></li><li><a href=https://www.geeksforgeeks.org/press-release/?ref=footer>In Media</a></li><li><a href=https://www.geeksforgeeks.org/about/contact-us/?ref=footer>Contact Us</a></li><li><a href=https://www.geeksforgeeks.org/advertise-with-us/?ref=footer>Advertise with us</a></li><li><a href=https://www.geeksforgeeks.org/gfg-corporate-solution/?ref=footer>GFG Corporate Solution</a></li><li><a href=https://www.geeksforgeeks.org/campus-training-program/?ref=footer>Placement Training Program</a></li></ul><ul class="footer-wrapper_links-list" ><li>Explore</li><li><a href=https://practice.geeksforgeeks.org/events/rec/job-a-thon/?ref=footer>Job-A-Thon Hiring Challenge</a></li><li><a href=https://www.geeksforgeeks.org/events/rec/gfg-hackathon/?ref=footer>Hack-A-Thon</a></li><li><a href=https://practice.geeksforgeeks.org/events/rec/gfg-weekly-coding-contest?utm_source=geeksforgeeks&utm_medium=footer&utm_campaign=gfgweekly/?ref=footer>GfG Weekly Contest</a></li><li><a href=https://www.geeksforgeeks.org/courses/category/all?courseType=offline&courseFeeType=all/?ref=footer>Offline Classes (Delhi/NCR)</a></li><li><a href=https://www.geeksforgeeks.org/courses/dsa-self-paced?utm_source=geeksforgeeks&utm_medium=footer&utm_campaign=course/?ref=footer>DSA in JAVA/C++</a></li><li><a href=https://www.geeksforgeeks.org/courses/mastering-system-design-low-level-to-high-level-solutions?utm_source=geeksforgeeks&utm_medium=footer&utm_campaign=course/?ref=footer>Master System Design</a></li><li><a href=https://www.geeksforgeeks.org/courses/competitive-programming-cp?utm_source=geeksforgeeks&utm_medium=footer&utm_campaign=course>Master CP</a></li><li><a href=https://www.geeksforgeeks.org/videos/?ref=footer>GeeksforGeeks Videos</a></li><li><a href=https://www.geeksforgeeks.org/community/?ref=footer>Geeks Community</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/introduction-to-programming-languages/?ref=footer>Languages</a></li><li><a href=https://www.geeksforgeeks.org/python-programming-language/?ref=footer>Python</a></li><li><a href=https://www.geeksforgeeks.org/java/?ref=footer>Java</a></li><li><a href=https://www.geeksforgeeks.org/c-plus-plus/?ref=footer>C++</a></li><li><a href=https://www.geeksforgeeks.org/php-tutorials/?ref=footer>PHP</a></li><li><a href=https://www.geeksforgeeks.org/golang/?ref=footer>GoLang</a></li><li><a href=https://www.geeksforgeeks.org/sql-tutorial/?ref=footer>SQL</a></li><li><a href=https://www.geeksforgeeks.org/r-tutorial/?ref=footer>R Language</a></li><li><a href=https://www.geeksforgeeks.org/android-tutorial/?ref=footer>Android Tutorial</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/learn-data-structures-and-algorithms-dsa-tutorial/?ref=footer>DSA</a></li><li><a href=https://www.geeksforgeeks.org/data-structures/?ref=footer>Data Structures</a></li><li><a href=https://www.geeksforgeeks.org/fundamentals-of-algorithms/?ref=footer>Algorithms</a></li><li><a href=https://www.geeksforgeeks.org/complete-guide-to-dsa-for-beginners/?ref=footer>DSA for Beginners</a></li><li><a href=https://www.geeksforgeeks.org/basic-coding-problems-in-dsa-for-beginners/?ref=footer>Basic DSA Problems</a></li><li><a href=https://www.geeksforgeeks.org/complete-roadmap-to-learn-dsa-from-scratch/?ref=footer>DSA Roadmap</a></li><li><a href=https://www.geeksforgeeks.org/top-100-data-structure-and-algorithms-dsa-interview-questions-topic-wise/?ref=footer>DSA Interview Questions</a></li><li><a href=https://www.geeksforgeeks.org/competitive-programming-a-complete-guide/?ref=footer>Competitive Programming</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/ai-ml-ds/?ref=footer>Data Science & ML</a></li><li><a href=https://www.geeksforgeeks.org/data-science-tutorial/?ref=footer>Data Science With Python</a></li><li><a href=https://www.geeksforgeeks.org/data-science-for-beginners/?ref=footer>Data Science For Beginner</a></li><li><a href=https://www.geeksforgeeks.org/machine-learning/?ref=footer>Machine Learning</a></li><li><a href=https://www.geeksforgeeks.org/machine-learning-mathematics/?ref=footer>ML Maths</a></li><li><a href=https://www.geeksforgeeks.org/python-data-visualization-tutorial/?ref=footer>Data Visualisation</a></li><li><a href=https://www.geeksforgeeks.org/pandas-tutorial/?ref=footer>Pandas</a></li><li><a href=https://www.geeksforgeeks.org/numpy-tutorial/?ref=footer>NumPy</a></li><li><a href=https://www.geeksforgeeks.org/natural-language-processing-nlp-tutorial/?ref=footer>NLP</a></li><li><a href=https://www.geeksforgeeks.org/deep-learning-tutorial/?ref=footer>Deep Learning</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/web-technology/?ref=footer>Web Technologies</a></li><li><a href=https://www.geeksforgeeks.org/html/?ref=footer>HTML</a></li><li><a href=https://www.geeksforgeeks.org/css/?ref=footer>CSS</a></li><li><a href=https://www.geeksforgeeks.org/javascript/?ref=footer>JavaScript</a></li><li><a href=https://www.geeksforgeeks.org/typescript/?ref=footer>TypeScript</a></li><li><a href=https://www.geeksforgeeks.org/learn-reactjs/?ref=footer>ReactJS</a></li><li><a href=https://www.geeksforgeeks.org/nextjs/?ref=footer>NextJS</a></li><li><a href=https://www.geeksforgeeks.org/nodejs/?ref=footer>NodeJs</a></li><li><a href=https://www.geeksforgeeks.org/bootstrap/?ref=footer>Bootstrap</a></li><li><a href=https://www.geeksforgeeks.org/tailwind-css/?ref=footer>Tailwind CSS</a></li></ul></div><div class="footer-wrapper_links" style="justify-content: space-between; text-align: -webkit-left;"><ul class="footer-wrapper_links-list" style="margin-block-start: 0em; width:16%; padding-inline-start: 18px;"><li><a class="link-head" href=https://www.geeksforgeeks.org/python-programming-language/?ref=footer>Python Tutorial</a></li><li><a href=https://www.geeksforgeeks.org/python-programming-examples/?ref=footer>Python Programming Examples</a></li><li><a href=https://www.geeksforgeeks.org/django-tutorial/?ref=footer>Django Tutorial</a></li><li><a href=https://www.geeksforgeeks.org/python-projects-beginner-to-advanced/?ref=footer>Python Projects</a></li><li><a href=https://www.geeksforgeeks.org/python-tkinter-tutorial/?ref=footer>Python Tkinter</a></li><li><a href=https://www.geeksforgeeks.org/python-web-scraping-tutorial/?ref=footer>Web Scraping</a></li><li><a href=https://www.geeksforgeeks.org/opencv-python-tutorial/?ref=footer>OpenCV Tutorial</a></li><li><a href=https://www.geeksforgeeks.org/python-interview-questions/?ref=footer>Python Interview Question</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/gate-cs-notes-gq/?ref=footer>Computer Science</a></li><li><a href=https://www.geeksforgeeks.org/gate-cs-notes-gq/?ref=footer>GATE CS Notes</a></li><li><a href=https://www.geeksforgeeks.org/operating-systems/?ref=footer>Operating Systems</a></li><li><a href=https://www.geeksforgeeks.org/computer-network-tutorials/?ref=footer>Computer Network</a></li><li><a href=https://www.geeksforgeeks.org/dbms/?ref=footer>Database Management System</a></li><li><a href=https://www.geeksforgeeks.org/software-engineering/?ref=footer>Software Engineering</a></li><li><a href=https://www.geeksforgeeks.org/digital-electronics-logic-design-tutorials/?ref=footer>Digital Logic Design</a></li><li><a href=https://www.geeksforgeeks.org/engineering-mathematics-tutorials/?ref=footer>Engineering Maths</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/devops-tutorial/?ref=footer>DevOps</a></li><li><a href=https://www.geeksforgeeks.org/git-tutorial/?ref=footer>Git</a></li><li><a href=https://www.geeksforgeeks.org/aws-tutorial/?ref=footer>AWS</a></li><li><a href=https://www.geeksforgeeks.org/docker-tutorial/?ref=footer>Docker</a></li><li><a href=https://www.geeksforgeeks.org/kubernetes-tutorial/?ref=footer>Kubernetes</a></li><li><a href=https://www.geeksforgeeks.org/microsoft-azure/?ref=footer>Azure</a></li><li><a href=https://www.geeksforgeeks.org/google-cloud-platform-tutorial/?ref=footer>GCP</a></li><li><a href=https://www.geeksforgeeks.org/devops-roadmap/?ref=footer>DevOps Roadmap</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/system-design-tutorial/?ref=footer>System Design</a></li><li><a href=https://www.geeksforgeeks.org/what-is-high-level-design-learn-system-design/?ref=footer>High Level Design</a></li><li><a href=https://www.geeksforgeeks.org/what-is-low-level-design-or-lld-learn-system-design/?ref=footer>Low Level Design</a></li><li><a href=https://www.geeksforgeeks.org/unified-modeling-language-uml-introduction/?ref=footer>UML Diagrams</a></li><li><a href=https://www.geeksforgeeks.org/system-design-interview-guide/?ref=footer>Interview Guide</a></li><li><a href=https://www.geeksforgeeks.org/software-design-patterns/?ref=footer>Design Patterns</a></li><li><a href=https://www.geeksforgeeks.org/object-oriented-analysis-and-design/?ref=footer>OOAD</a></li><li><a href=https://www.geeksforgeeks.org/system-design-interview-bootcamp-guide/?ref=footer>System Design Bootcamp</a></li><li><a href=https://www.geeksforgeeks.org/most-commonly-asked-system-design-interview-problems-questions/?ref=footer>Interview Questions</a></li></ul><ul class="footer-wrapper_links-list" ><li>School Subjects</li><li><a href=https://www.geeksforgeeks.org/maths/?ref=footer>Mathematics</a></li><li><a href=https://www.geeksforgeeks.org/physics/?ref=footer>Physics</a></li><li><a href=https://www.geeksforgeeks.org/chemistry/?ref=footer>Chemistry</a></li><li><a href=https://www.geeksforgeeks.org/biology/?ref=footer>Biology</a></li><li><a href=https://www.geeksforgeeks.org/social-science/?ref=footer>Social Science</a></li><li><a href=https://www.geeksforgeeks.org/english-grammar/?ref=footer>English Grammar</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/commerce/?ref=footer>Commerce</a></li><li><a href=https://www.geeksforgeeks.org/accountancy/?ref=footer>Accountancy</a></li><li><a href=https://www.geeksforgeeks.org/business-studies/?ref=footer>Business Studies</a></li><li><a href=https://www.geeksforgeeks.org/economics/?ref=footer>Economics</a></li><li><a href=https://www.geeksforgeeks.org/management/?ref=footer>Management</a></li><li><a href=https://www.geeksforgeeks.org/human-resource-management-hrm/?ref=footer>HR Management</a></li><li><a href=https://www.geeksforgeeks.org/finance/?ref=footer>Finance</a></li><li><a href=https://www.geeksforgeeks.org/income-tax/?ref=footer>Income Tax</a></li></ul></div><div class="footer-wrapper_links" style="justify-content: space-between; text-align: -webkit-left;"><ul class="footer-wrapper_links-list" style="margin-block-start: 0em; width:16%; padding-inline-start: 18px;"><li><a class="link-head" href=https://www.geeksforgeeks.org/getting-started-with-database-management-system/?ref=footer>Databases</a></li><li><a href=https://www.geeksforgeeks.org/sql-tutorial/?ref=footer>SQL</a></li><li><a href=https://www.geeksforgeeks.org/mysql-tutorial/?ref=footer>MYSQL</a></li><li><a href=https://www.geeksforgeeks.org/postgresql-tutorial/?ref=footer>PostgreSQL</a></li><li><a href=https://www.geeksforgeeks.org/pl-sql-tutorial/?ref=footer>PL/SQL</a></li><li><a href=https://www.geeksforgeeks.org/mongodb-tutorial/?ref=footer>MongoDB</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/technical-interview-preparation/?ref=footer>Preparation Corner</a></li><li><a href=https://www.geeksforgeeks.org/company-wise-recruitment-process/?ref=footer>Company-Wise Recruitment Process</a></li><li><a href=https://www.geeksforgeeks.org/free-resume-templates/?ref=footer>Resume Templates</a></li><li><a href=https://www.geeksforgeeks.org/aptitude-questions-and-answers/?ref=footer>Aptitude Preparation</a></li><li><a href=https://www.geeksforgeeks.org/puzzles/?ref=footer>Puzzles</a></li><li><a href=https://www.geeksforgeeks.org/company-preparation/?ref=footer>Company-Wise Preparation</a></li><li><a href=https://www.geeksforgeeks.org/companies/?ref=footer>Companies</a></li><li><a href=https://www.geeksforgeeks.org/colleges/?ref=footer>Colleges</a></li></ul><ul class="footer-wrapper_links-list" ><li>Competitive Exams</li><li><a href=https://www.geeksforgeeks.org/jee-advanced/?ref=footer>JEE Advanced</a></li><li><a href=https://www.geeksforgeeks.org/ugc-net-exam/?ref=footer>UGC NET</a></li><li><a href=https://www.geeksforgeeks.org/upsc-2024-study-materials-and-notes/?ref=footer>UPSC</a></li><li><a href=https://www.geeksforgeeks.org/ssc-cgl-syllabus/?ref=footer>SSC CGL</a></li><li><a href=https://www.geeksforgeeks.org/sbi-po-syllabus-2024/?ref=footer>SBI PO</a></li><li><a href=https://www.geeksforgeeks.org/sbi-clerk-syllabus/?ref=footer>SBI Clerk</a></li><li><a href=https://www.geeksforgeeks.org/ibps-po-syllabus/?ref=footer>IBPS PO</a></li><li><a href=https://www.geeksforgeeks.org/detailed-syllabus-of-ibps-clerk/?ref=footer>IBPS Clerk</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/geeksforgeeks-online-tutorials-free/?ref=footer>More Tutorials</a></li><li><a href=https://www.geeksforgeeks.org/software-development/?ref=footer>Software Development</a></li><li><a href=https://www.geeksforgeeks.org/software-testing-tutorial/?ref=footer>Software Testing</a></li><li><a href=https://www.geeksforgeeks.org/product-management/?ref=footer>Product Management</a></li><li><a href=https://www.geeksforgeeks.org/project-management-tutorial/?ref=footer>Project Management</a></li><li><a href=https://www.geeksforgeeks.org/linux-tutorial/?ref=footer>Linux</a></li><li><a href=https://www.geeksforgeeks.org/excel-tutorial/?ref=footer>Excel</a></li><li><a href=https://www.geeksforgeeks.org/geeksforgeeks-master-sheet-list-of-all-cheat-sheets/?ref=footer>All Cheat Sheets</a></li><li><a href=https://www.geeksforgeeks.org/page/1/?ref=footer>Recent Articles</a></li></ul><ul class="footer-wrapper_links-list" ><li>Free Online Tools</li><li><a href=https://www.geeksforgeeks.org/free-typing-test/?ref=footer>Typing Test</a></li><li><a href=https://www.geeksforgeeks.org/online-image-editor/?ref=footer>Image Editor</a></li><li><a href=https://www.geeksforgeeks.org/online-code-formatter/?ref=footer>Code Formatters</a></li><li><a href=https://www.geeksforgeeks.org/online-file-converters/?ref=footer>Code Converters</a></li><li><a href=https://www.geeksforgeeks.org/currency-converter/?ref=footer>Currency Converter</a></li><li><a href=https://www.geeksforgeeks.org/random-number-generator/?ref=footer>Random Number Generator</a></li><li><a href=https://www.geeksforgeeks.org/random-password-generator/?ref=footer>Random Password Generator</a></li></ul><ul class="footer-wrapper_links-list" ><li>Write & Earn</li><li><a href=https://write.geeksforgeeks.org/?ref=footer>Write an Article</a></li><li><a href=https://www.geeksforgeeks.org/how-to-improve-an-article/?ref=footer>Improve an Article</a></li><li><a href=https://write.geeksforgeeks.org/pick-article/?ref=footer>Pick Topics to Write</a></li><li><a href=https://www.geeksforgeeks.org/share-your-experiences-on-geeksforgeeks/?ref=footer>Share your Experiences</a></li><li><a href=https://write.geeksforgeeks.org/internship/?ref=footer>Internships</a></li></ul></div><div class="footer-wrapper_links" style="justify-content: space-between; text-align: -webkit-left;"><ul class="footer-wrapper_links-list" style="margin-block-start: 0em; width:16%; padding-inline-start: 18px;"><li><a class="link-head" href=https://www.geeksforgeeks.org/courses/category/dsa-placements?ref=footer>DSA/Placements</a></li><li><a href=https://www.geeksforgeeks.org/courses/dsa-self-paced?ref=footer>DSA - Self Paced Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/data-structures-and-algorithms-in-javascript?ref=footer>DSA in JavaScript - Self Paced Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/Data-Structures-With-Python?ref=footer>DSA in Python - Self Paced</a></li><li><a href=https://www.geeksforgeeks.org/courses/c-Programming-basic-to-advanced?ref=footer>C Programming Course Online - Learn C with Data Structures</a></li><li><a href=https://www.geeksforgeeks.org/courses/complete-interview-preparation?ref=footer>Complete Interview Preparation</a></li><li><a href=https://www.geeksforgeeks.org/courses/competitive-programming-cp?ref=footer>Master Competitive Programming</a></li><li><a href=https://www.geeksforgeeks.org/courses/core-computer-science-for-interview-preparation?ref=footer>Core CS Subject for Interview Preparation</a></li><li><a href=https://www.geeksforgeeks.org/courses/mastering-system-design-low-level-to-high-level-solutions?ref=footer>Mastering System Design: LLD to HLD</a></li><li><a href=https://www.geeksforgeeks.org/courses/interviewe-101-data-structures-algorithm-system-design?ref=footer>Tech Interview 101 - From DSA to System Design [LIVE]</a></li><li><a href=https://www.geeksforgeeks.org/courses/dsa-to-development-coding-guide?ref=footer>DSA to Development [HYBRID]</a></li><li><a href=https://www.geeksforgeeks.org/courses/placement-prep-live?ref=footer>Placement Preparation Crash Course [LIVE]</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/courses/category/development-testing?ref=footer>Development/Testing</a></li><li><a href=https://www.geeksforgeeks.org/courses/javascript?ref=footer>JavaScript Full Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/react-js-beginner-to-advance?ref=footer>React JS Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/react-native-course-online?ref=footer>React Native Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/mastering-django-framework-beginner-to-advance?ref=footer>Django Web Development Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/bootstrap?ref=footer>Complete Bootstrap Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/full-stack-node?ref=footer>Full Stack Development - [LIVE]</a></li><li><a href=https://www.geeksforgeeks.org/courses/Java-backend-live?ref=footer>JAVA Backend Development - [LIVE]</a></li><li><a href=https://www.geeksforgeeks.org/courses/software-testing-course-online?ref=footer>Complete Software Testing Course [LIVE]</a></li><li><a href=https://www.geeksforgeeks.org/courses/android-by-kotlin?ref=footer>Android Mastery with Kotlin [LIVE]</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/courses/search?query=data science?ref=footer>Machine Learning/Data Science</a></li><li><a href=https://www.geeksforgeeks.org/courses/data-science-live?ref=footer>Complete Machine Learning & Data Science Program - [LIVE]</a></li><li><a href=https://www.geeksforgeeks.org/courses/data-analytics-training-program-excel-sql-python-powerbi?ref=footer>Data Analytics Training using Excel, SQL, Python & PowerBI - [LIVE]</a></li><li><a href=https://www.geeksforgeeks.org/courses/full-stack-applied-data-science-program?ref=footer>Data Science Training Program - [LIVE]</a></li><li><a href=https://www.geeksforgeeks.org/courses/mastering-generative-ai-and-chat-gpt?ref=footer>Mastering Generative AI and ChatGPT</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/courses/category/programming-languages?ref=footer>Programming Languages</a></li><li><a href=https://www.geeksforgeeks.org/courses/c-Programming-basic-to-advanced?ref=footer>C Programming with Data Structures</a></li><li><a href=https://www.geeksforgeeks.org/courses/cpp-programming-basic-to-advanced?ref=footer>C++ Programming Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/java-online-course-complete-beginner-to-advanced?ref=footer>Java Programming Course</a></li><li><a href=https://www.geeksforgeeks.org/courses/master-python-complete-beginner-to-advanced?ref=footer>Python Full Course</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/courses/category/cloud-devops?ref=footer>Clouds/Devops</a></li><li><a href=https://www.geeksforgeeks.org/courses/devops-live?ref=footer>DevOps Engineering</a></li><li><a href=https://www.geeksforgeeks.org/courses/AWS-solutions-architect-certification-training-program-live?ref=footer>AWS Solutions Architect Certification</a></li><li><a href=https://www.geeksforgeeks.org/courses/salesforce-certified-administrator?ref=footer>Salesforce Certified Administrator Course</a></li></ul><ul class="footer-wrapper_links-list" ><li><a class="link-head" href=https://www.geeksforgeeks.org/courses/search?query=gate?ref=footer>GATE</a></li><li><a href=https://www.geeksforgeeks.org/courses/test-series-2025?ref=footer>GATE CS & IT Test Series - 2025</a></li><li><a href=https://www.geeksforgeeks.org/courses/gate-da-testseries-2025?ref=footer>GATE DA Test Series 2025</a></li><li><a href=https://www.geeksforgeeks.org/courses/gate-cs-self-paced?ref=footer>GATE CS & IT Course - 2025</a></li><li><a href=https://www.geeksforgeeks.org/courses/gate-ds-ai-self-paced?ref=footer>GATE DA Course 2025</a></li></ul></div>        </div> 
      </div>
            <!-- Jobs Fair 2024 related CSS changes -->

<style>
  :root{
    --home-jobs-section-jf-logo: url('https://media.geeksforgeeks.org/auth-dashboard-uploads/JobFair2024Logo.svg');
  }

  body[data-dark-mode="true"]
  {
    --home-jobs-section-jf-logo: url('https://media.geeksforgeeks.org/auth-dashboard-uploads/JobFair2024LogoDark.svg');
  }

  .hp_job_section_jf_logo, .job-a-thon-jf-sticky-header-logo{
    background: var(--home-jobs-section-jf-logo);
    height: 50px;
    background-repeat: no-repeat;
    width: 105px;
    background-size: 100px;
  }

  @keyframes challenge {
	0%{
		transform: scale(1);
	}
	50%{
		transform: scale(1.03);
	}
	100%{
		transform: scale(1);
	}
  }

  .job-a-thon-jf-sticky-header-logo{
    height: 45px;
  }

</style>

<!-- ---------------------------------- -->
      <div class="footer-strip" >
          <div class="copyright">
              <a href="https://www.geeksforgeeks.org/" rel="noopener noreferrer" target="_blank">@GeeksforGeeks, Sanchhaya Education Private Limited</a><span>, <a href="https://www.geeksforgeeks.org/copyright-information/">All rights reserved</a></span>
          </div>
          <div class="social-links">
          </div>
      </div>
  </footer>
</div><!-- #page -->
<script type='text/javascript' src='https://www.geeksforgeeks.org/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>

<!-- Cookie Consent Div-->
<div class="cookie-consent hide-consent">
    <span class="cookie-text">
        We use cookies to ensure you have the best browsing experience on our website. By using our site, you
        acknowledge that you have read and understood our
        <a href="https://www.geeksforgeeks.org/cookie-policy/" target="_blank"><u>Cookie Policy</u></a> &
        <a href="https://www.geeksforgeeks.org/privacy-policy/" target="_blank"><u>Privacy Policy</u></a>
            </span>
    <button class="consent-btn">
        Got It !
    </button>
</div>
<!-- Cookie Consent Div ends -->

<!--Light Box Div starts-->
<div class="lightbox-target">
   <img id="lightbox-image" src="" alt="Lightbox"/>
   <span class="lightbox-close"></span>
</div>
<!--Light Box Div ends-->

<!-- <link rel="stylesheet" href="https://use.typekit.net/mrg0hpc.css"/> -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
<script>
  if(post_slug.includes('premium-plans-payment/') || post_slug.includes('premium-plans/')){
    $('.darkMode-wrap').remove();
    $('.toggle-darkMode').remove();
  }

function setGoogleRecaptcha() {
    var captchaSiteKey = '6LdMFNUZAAAAAIuRtzg0piOT-qXCbDF-iQiUi9KY';
    grecaptcha.ready(function() {
        grecaptcha.execute(captchaSiteKey).then(function(token) {
            document.getElementById('g-recaptcha-response-suggestion-form').value = token;
            suggestionCall();
        });
    });
}

</script>

        <div class="improve-modal--overlay" style="display: none;">
            <div class="improve-modal--improvement" status="locked">
                <div class="improve-modal--improve-header">
                    <div class="improve-header-fst-child">Improvement</div>
                    <div class="improve-header-sec-child">
                        <i class="gfg-icon improve-cross-icon"></i>
                    </div>
                </div>
                <div class="locked-status--impove-modal">
                    <div class="improve-modal--improve-content error-message"></div>                    
                    <div class="improve-modal--improve-bottom">
                        <button class="improve-bottom-btn" type="button">Suggest changes</button>
                    </div>
                </div>
                <div class="unlocked-status--improve-modal-content">
                  <div class="suggest-change_wrapper">
                    <div class="suggest-change-content_wrapper">
                      <div class="suggest-change">Suggest Changes</div>
                      <div class="suggest-changes-about">Help us improve. Share your suggestions to enhance the article. Contribute your expertise and make a difference in the GeeksforGeeks portal.</div>
                    </div>
                    <div class="suggest-change-icon_wrapper">
                      <img class="suggest-change-icon" src="https://media.geeksforgeeks.org/auth-dashboard-uploads/suggestChangeIcon.png" alt="geeksforgeeks-suggest-icon"/>
                    </div>
                  </div>
                  <div class="create-improvement_wrapper">
                    <div class="create-improvement-content_wrapper">
                      <div class="create-improvement">Create Improvement</div>
                      <div class="create-improvements-about">Enhance the article with your expertise. Contribute to the GeeksforGeeks community and help create better learning resources for all.</div>
                    </div>
                    <div class="create-improvement-icon_wrapper">
                    <img class="create-improvement-icon" src="https://media.geeksforgeeks.org/auth-dashboard-uploads/createImprovementIcon.png" alt="geeksforgeeks-improvement-icon"/>
                    </div>
                  </div>
                  <div class="error-status"></div>
                </div>
            </div>
            <div class="improve-modal--suggestion" style="display: none;">
                <!-- Header of improve-modal--improvement and improve-modal--suggestion have same CSS rule that's why I use same class name -->
                <div class="improve-modal--improve-header">
                  <div class="left-arrow-icon_suggest_wrapper">
                    <div class="left-arrow-icon_wrapper">
                      <i class="gfg-icon improve-left-arrow-icon"></i>
                    </div>
                    <div class="improve-header-fst-child">Suggest Changes</div>
                  </div>
                  <div class="improve-header-sec-child">
                        <i class="gfg-icon improve-cross-icon"></i>
                  </div>
                </div>
                <div class="suggestion-modal-section">
                    <form>
                        <label for="suggestion-section">min 4 words, max CharLimit:2000</label>
                        <textarea id="suggestion-section-textarea" name="suggestion-section" placeholder="Write your suggestions here"></textarea>
                        <input type="hidden" name="g-recaptcha-suggestion-response" id="g-recaptcha-response-suggestion-form">
                    </form>
                </div> 
                <!-- Button of improve-modal--improvement and improve-modal--suggestion have same CSS rule that's why I use same class name -->
                <div class="improve-modal--improve-bottom suggestion-btn">
                    <p><span id="suggestion-modal-alert" style="display: none;"></span></p>
                    <button class="suggest-bottom-btn" type="button"></button>
                </div>
            </div>
            <a href="#" style="visibility:hidden" class="create-improvement-redirection-to-write" target="_blank"></a>
        </div>
        <script>
            var lockedCasesHtml = `<span class="improve-modal--improve-content-modified"></span><span>You can suggest the changes for now and it will be under 'My Suggestions' Tab on Write.</span><br><br><span>You will be notified via email once the article is available for improvement. Thank you for your valuable feedback!</span>`;
            var badgesRequiredHtml = `<span>It seems that you do not meet the eligibility criteria to create improvements for this article, as only users who have earned specific badges are permitted to do so.</span><br><br><span>However, you can still create improvements through the <a href="https://write.geeksforgeeks.org/pick-improvements/pick" target='_blank'>Pick for Improvement</a> section.</span>`;
            jQuery('.improve-header-sec-child').on('click', function(){
                jQuery('.improve-modal--overlay').hide();
                $('.improve-modal--suggestion').hide();
            });

            $('.suggest-change_wrapper, .locked-status--impove-modal .improve-bottom-btn').on('click',function(){ // when suggest changes option is clicked
              $('#suggestion-section-textarea').val("");
              $('.suggest-bottom-btn').html("Suggest changes");
              $('.improve-modal--improvement').hide();
              $('.improve-modal--suggestion').show();
            });
            $('.create-improvement_wrapper').on('click',function(){  // when create improvement option clicked then improvement reason will be shown
              if(loginData && loginData.isLoggedIn) {
                $('body').append('<div class="spinner-loading-overlay"></div>');
                $('.spinner-loading-overlay').show();
                jQuery.ajax({
                  url: writeApiUrl + 'create-improvement-post/?v=1',
                  type: "POST",
                  contentType: 'application/json; charset=utf-8',
                  dataType: 'json',
                  xhrFields: {
                    withCredentials: true
                  },
                  data: JSON.stringify({
                    gfg_id: post_id
                  }),
                  success:function(result) {
                    $('.spinner-loading-overlay:eq(0)').remove();
                    $('.improve-modal--overlay').hide();
                    $('.unlocked-status--improve-modal-content').css("display","none");
                    $('.create-improvement-redirection-to-write').attr('href',writeUrl + 'improve-post/' + `${result.id}` + '/', '_blank');
                    $('.create-improvement-redirection-to-write')[0].click();
                  },
                  error:function(e) {
                    showErrorMessage(e.responseJSON,e.status)
                  },
                });
              }
              else {
               if(loginData && !loginData.isLoggedIn) {
                   $('.improve-modal--overlay').hide();
                if ($('.header-main__wrapper').find('.header-main__signup.login-modal-btn').length) {
                $('.header-main__wrapper').find('.header-main__signup.login-modal-btn').click();
                 }
                return;
                }
              }
            });
            $('.left-arrow-icon_wrapper').on('click',function(){
              if($('.improve-modal--suggestion').is(":visible"))
              $('.improve-modal--suggestion').hide();
              else{
              }

              $('.improve-modal--improvement').show();
            });
            const showErrorMessage = (result,statusCode) => {
                if(!result)
                return;
                $('.spinner-loading-overlay:eq(0)').remove();
                if(statusCode == 403) {
                    $('.improve-modal--improve-content.error-message').html(result.message);
                    jQuery('.improve-modal--overlay').show();
                    jQuery('.improve-modal--improvement').show();
                    $('.locked-status--impove-modal').css("display","block");
                    $('.unlocked-status--improve-modal-content').css("display","none");
                    $('.improve-modal--improvement').attr("status","locked");
                    return;
                }
                            }
            function loadScript(src, callback) {
                var script = document.createElement('script');
                script.src = src;
                script.onload = callback;
                document.head.appendChild(script);
            }
            function suggestionCall() {              
                var suggest_val = $.trim($("#suggestion-section-textarea").val());
                var array_String= suggest_val.split(" ") 
                var gCaptchaToken = $("#g-recaptcha-response-suggestion-form").val();
                var error_msg = false;
                if(suggest_val != "" && array_String.length >=4){
                    if(suggest_val.length <= 2000){
                        var payload = {
                                    "gfg_post_id" : `${post_id}`,
                                    "suggestion" : `<p>${suggest_val}</p>`,
                                }
                        if(!loginData || !loginData.isLoggedIn)                  // User is not logged in
                        payload["g-recaptcha-token"] = gCaptchaToken

                        jQuery.ajax({
                            type:'post',
                            url:  "https://apiwrite.geeksforgeeks.org/suggestions/auth/create/",
                            xhrFields: {
                                withCredentials: true
                            },
                            crossDomain: true,
                            contentType:'application/json',
                            data: JSON.stringify(payload),
                            success:function(data) {
                                jQuery('.spinner-loading-overlay:eq(0)').remove();
                                jQuery('#suggestion-section-textarea').val("");
                                jQuery('.suggest-bottom-btn').css("display","none");
                                
                                // Update the modal content
                                const modalSection = document.querySelector('.suggestion-modal-section');
                                modalSection.innerHTML = `
                                    <div class="thank-you-message" style="text-align: center;">
                                      <h2>Thank You!</h2>
                                      <div class="thank-you-message-content">Your suggestions are valuable to us.</div>
                                    </div>
                                `;

                            },
                            error:function(data) {
                                jQuery('.spinner-loading-overlay:eq(0)').remove();
                                jQuery('#suggestion-modal-alert').html("Something went wrong.");
                                jQuery('#suggestion-modal-alert').show();
                                error_msg = true;
                            }
                        });
                    }
                    else{
                        jQuery('.spinner-loading-overlay:eq(0)').remove();
                        jQuery('#suggestion-modal-alert').html("Minimum 5 Words and Maximum Character limit is 2000.");
                        jQuery('#suggestion-modal-alert').show();
                        jQuery('#suggestion-section-textarea').focus();
                        error_msg = true;
                    }
                }
                else{
                    jQuery('.spinner-loading-overlay:eq(0)').remove();
                    jQuery('#suggestion-modal-alert').html("Enter atleast four words !");
                    jQuery('#suggestion-modal-alert').show();
                    jQuery('#suggestion-section-textarea').focus();
                    error_msg = true;
                }
                if(error_msg){
                    setTimeout(() => {
                        jQuery('#suggestion-section-textarea').focus();
                        jQuery('#suggestion-modal-alert').hide();
                    }, 3000);
                }
            }
            
            document.querySelector('.suggest-bottom-btn').addEventListener('click', function(){
              jQuery('body').append('<div class="spinner-loading-overlay"></div>');
              jQuery('.spinner-loading-overlay').show();
              if(loginData && loginData.isLoggedIn) {
                 suggestionCall();
                 return;
              }
              // load the captcha script and set the token
              loadScript('https://www.google.com/recaptcha/api.js?render=6LdMFNUZAAAAAIuRtzg0piOT-qXCbDF-iQiUi9KY',[], function() {
                setGoogleRecaptcha();
              });
            });
            
            $('.improvement-bottom-btn.create-improvement-btn').click(function() {  //create improvement button is clicked
              $('body').append('<div class="spinner-loading-overlay"></div>');
              $('.spinner-loading-overlay').show();
              // send this option via create-improvement-post api
              jQuery.ajax({
                url: writeApiUrl + 'create-improvement-post/?v=1',
                type: "POST",
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                xhrFields: {
                  withCredentials: true
                },
                data: JSON.stringify({
                  gfg_id: post_id
                }),
                success:function(result) {
                  $('.spinner-loading-overlay:eq(0)').remove();
                  $('.improve-modal--overlay').hide();
                  $('.create-improvement-redirection-to-write').attr('href',writeUrl + 'improve-post/' + `${result.id}` + '/', '_blank');
                  $('.create-improvement-redirection-to-write')[0].click();
                },
                error:function(e) {
                  showErrorMessage(e.responseJSON,e.status);
                },
              });
            });
        </script>
    <script>
var AdblockPlus = new function() {
     this.detect = function(px, callback) {
         var detected = false;
         var checksRemain = 2;
         var error1 = false;
         var error2 = false;
         if (typeof callback != "function") return;
         px += "?ch=*&rn=*";

         function beforeCheck(callback, timeout) {
             if (checksRemain == 0 || timeout > 1E3) callback(checksRemain == 0 && detected);
             else setTimeout(function() {
                 beforeCheck(callback, timeout * 2)
             }, timeout * 2)
         }

         function checkImages() {
             if (--checksRemain) return;
             detected = !error1 && error2
         }
         var random = Math.random() * 11;
         var img1 = new Image;
         img1.onload = checkImages;
         img1.onerror = function() {
             error1 = true;
             checkImages()
         };
         img1.src = px.replace(/\*/, 1).replace(/\*/, random);
         var img2 = new Image;
         img2.onload = checkImages;
         img2.onerror = function() {
             error2 = true;
             checkImages()
         };
         img2.src = px.replace(/\*/, 2).replace(/\*/, random);
         beforeCheck(callback, 250)
     }
 };

/*
AdblockPlus.detect("https://cdnads.geeksforgeeks.org/res/px.gif", function(abp){
    window.googletag = window.googletag || {cmd: []};
    window.abp=abp;
    var elms = [...document.querySelectorAll('div[id^=_GFG_ABP_]')];
    const units=elms.map(elem=>elem.id)
    if(abp) {
        for(let curr_unit of units) {
            const iframe = document.createElement('iframe');
            iframe.setAttribute('src',"https://aa.geeksforgeeks.org/iframe.html?code="+curr_unit.substr(1))
            const elem = document.getElementById(curr_unit)
            const div = document.createElement('div');
            div.setAttribute('id',curr_unit.substr(1))
            let sizes = curr_unit.split("_");
            sizes = sizes.filter(val => val.includes('x'));
            let [width, height] = sizes[0].split("x");
            iframe.style.width = `${+width+20}px`
            iframe.style.height = `${+height+20}px`
            if(elem) {
                elem.appendChild(iframe);
            }
        }
        var gfgAdDivs = [...document.querySelectorAll('div[id^=GFG_AD_]')];
        gfgAdDivs.forEach(gfgDiv => document.getElementById(gfgDiv.id).removeAttribute("style"));
        jQuery('#secondary .widget_text:last-child').css({"position": "unset"});
    }
});*/
    AdblockPlus.detect("https://cdnads.geeksforgeeks.org/res/px.gif", function(abp){
    window.googletag = window.googletag || {cmd: []};
    window.abp=abp;
    var elms = [...document.querySelectorAll('div[id^=_GFG_ABP_]')];
    //const units=elms.map(elem=>elem.id)
    const units = elms
      .filter(elem => !(window.innerWidth < 1500 && elem.id === "_GFG_ABP_Incontent_728x90"))
      .map(elem => elem.id);
    if(abp) {
        isAdBlockerPresent = true;
        for(let curr_unit of units) {
            const iframe = document.createElement('iframe');
            iframe.addEventListener("load", () => {
              iframe.contentWindow.postMessage(JSON.stringify({host: window.location.host,category: window.arrPostCatName,parentWidth: window.innerWidth}),'https://aa.geeksforgeeks.org');
            });
            iframe.setAttribute('src',"https://aa.geeksforgeeks.org/iframe.html?code="+curr_unit.substr(1))
            const elem = document.getElementById(curr_unit)
            const div = document.createElement('div');
            div.setAttribute('id',curr_unit.substr(1))
            let sizes = curr_unit.split("_");
            sizes = sizes.filter(val => val.includes('x'));
            let [width, height] = sizes[0].split("x");
            iframe.style.width = `${+width+20}px`
            iframe.style.height = `${+height+20}px`
            if(elem) {
                elem.appendChild(iframe);
            }
        }
        var gfgAdDivs = [...document.querySelectorAll('div[id^=GFG_AD_]')];
        gfgAdDivs.forEach(gfgDiv => document.getElementById(gfgDiv.id).removeAttribute("style"));
        jQuery('#secondary .widget_text:last-child').css({"position": "unset"});
    }
    else{
      try {
        var isAdblockEnabled = t =>
            fetch(
                new Request('https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js', {
                    method: 'HEAD',
                    mode: 'no-cors'
                })
            ).catch(t);
          isAdblockEnabled(() => {
            // here goes modal pop-up code
            isAdBlockerPresent = true;
          });
      } catch (err) {console.log(err);}
    }
});

  function closeAdBlockPopupModal(){
    const modal = document.getElementById("adBlockerModal");
    $('body').removeClass('body-for-ad-blocker');
    $('#adBlockerModal').remove()
    localStorage.setItem('gfgAdBlockPopup',new Date())
  }
  function showAdblockerModal(){
    let randomNumberForButtonText = Math.round(Math.random()); 
    let currTime = new Date();
    let lastTime = new Date(localStorage.getItem('gfgAdBlockPopup'));
    if(((currTime-lastTime)/(1000*60*60))<1)
    {
      return;
    }
    const adBlockerModal = `<div id="adBlockerModal" class="ad-blocker-modal">
      <div id="ad-blocker-modal-overlay">
        <div id="ad-blocker-outer-div">
          <div id="ad-blocker-div">
          <p id="ad-blocker-div-warning" style="margin-bottom: 30px;">It seems that you are using an ad blocker.<br><span style="font-size: 22px;font-weight: normal;">Please disable it to support us!</span></p>
              <div id="ad-blocker-div-btns">
                  <button id="ad-blocker-div-button1" onclick="handleAdBlockerClick('disabled')">
                      I disabled my ad blocker
                  </button>
                  <a href="https://www.geeksforgeeks.org/geeksforgeeks-premium-subscription${randomNumberForButtonText === 1 ? "/?itm_source=geeksforgeeks&itm_medium=adblocker&itm_campaign=premium1" : "/?itm_source=geeksforgeeks&itm_medium=adblocker&itm_campaign=premium2"}" target="_blank">
                      <button
                          id="ad-blocker-div-button2"
                          style="
                              background: linear-gradient(45deg, #f0bd36, #bf873f);
                              border: 1px solid transparent;
                              color: white;
                          "
                      >
                          ${randomNumberForButtonText === 1 ? "Go Ad-Free with Premium" : "Upgrade for No Ads"}
                      </button>
                  </a>
              </div>
              <div id="ad-blocker-div-continue-premium-promo-text">
                  "For an ad-free experience and exclusive features, subscribe to our Premium Plan!"<br>
              </div>
              <div id="ad-blocker-div-continue-btn-div">
                  <a id="ad-blocker-div-continue-btn" href="#" onclick="closeAdBlockPopupModal()">Continue without supporting</a>
              </div>
          </div>
        </div>
      </div>
    </div>`;
    $('body').append(adBlockerModal);
    $('body').addClass('body-for-ad-blocker');
    const modal = document.getElementById("adBlockerModal");
    modal.style.display = "block";
  }
  function handleAdBlockerClick(type){
      if(type == 'disabled'){
        window.location.reload();
      }
      else if(type == 'info'){
        document.getElementById("ad-blocker-div").style.display = "none";
        document.getElementById("ad-blocker-info-div").style.display = "flex";
        handleAdBlockerIconClick(0);
      }
  }
  var lastSelected= null;
  //Mapping of name and video URL with the index.
  const adBlockerVideoMap = [
    ['Ad Block Plus','https://media.geeksforgeeks.org/auth-dashboard-uploads/abp-blocker-min.mp4'],
    ['Ad Block','https://media.geeksforgeeks.org/auth-dashboard-uploads/Ad-block-min.mp4'],
    ['uBlock Origin','https://media.geeksforgeeks.org/auth-dashboard-uploads/ub-blocke-min.mp4'],
    ['uBlock','https://media.geeksforgeeks.org/auth-dashboard-uploads/U-blocker-min.mp4'],
  ]
  function handleAdBlockerIconClick(currSelected){
    const videocontainer = document.getElementById('ad-blocker-info-div-gif');
    const videosource = document.getElementById('ad-blocker-info-div-gif-src');
    if(lastSelected != null){
      document.getElementById("ad-blocker-info-div-icons-"+lastSelected).style.backgroundColor = "white";  
      document.getElementById("ad-blocker-info-div-icons-"+lastSelected).style.borderColor = "#D6D6D6";
    }
    document.getElementById("ad-blocker-info-div-icons-"+currSelected).style.backgroundColor = "#D9D9D9";
    document.getElementById("ad-blocker-info-div-icons-"+currSelected).style.borderColor = "#848484";
    document.getElementById('ad-blocker-info-div-name-span').innerHTML = adBlockerVideoMap[currSelected][0]
    videocontainer.pause();
    videosource.setAttribute('src', adBlockerVideoMap[currSelected][1]);
    videocontainer.load();
    videocontainer.play();
    lastSelected = currSelected;
  }
</script>
<!-- <script async src="https://www.googleoptimize.com/optimize.js?id=OPT-5PGZ8MN"></script> -->

<style>
/* Temporary CSS for Three90 pop up modal (START)*/
    .three90popup__container {
      width: 100vw;
      height: 100vh; 
      position: fixed;
      top:0px;
      background: var(--job-tab-faded-background);
      z-index: 1024;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .three90modal__wrapper{
      background-color: white;
      max-width: 350px;
      display: flex;
      flex-direction: column;
      border-radius: 10px;
      overflow: hidden;

    }
    .three90modal__message-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: var(--font-primary);
    }
    .three90modal__subheading {
      margin-top: 20px;
      font-size: 22px;
      font-weight: 600;
    }
    .three90modal__text-message {
      margin-top: 20px;
      font-size: 15px;
      font-weight: 400;
      text-align: center;
      padding: 0 5px;
    }
    .three90__modal__button-wrapper {
      width: 100%;
      padding: 20px 0px;
      display: flex;
      justify-content: space-evenly;
    }
    .three90__modal__button-wrapper > button {
      width: 105px;
      height: 35px;
      border-radius: 13px;
      border:none;
      font-weight: 600;
      cursor: pointer;
    } 
    #three90__modal-close-btn:hover {
      background-color: #cacbcd;
    }
    #three90__modal-explore-btn {
      background-color: #0a0727;
      color: white
    }

    @media screen and (max-width: 441px) {
      .three90modal__wrapper {
        max-width: 300px;
      }
    }

  /* Temporary CSS for Three90 pop up modal (END)*/
</style>

<script type="text/javascript" >
    const coursePromotionCities = JSON.parse(`{"NCR":{"LOCATIONS":["Noida","Greater Noida","Ghaziabad","Faridabad","Delhi","New Delhi"],"COURSES":[{"name":"GATE CS 2025 Classroom Program","url":"https:\/\/www.geeksforgeeks.org\/courses\/gate-cs-self-paced"},{"name":"MERN Full Stack Development","url":"https:\/\/www.geeksforgeeks.org\/courses\/mern-full-stack-development-classroom"},{"name":"DSA For Interview Preparation","url":" https:\/\/www.geeksforgeeks.org\/courses\/dsa-interview-preparation-classroom"},{"name":"JAVA Backend Development","url":"https:\/\/www.geeksforgeeks.org\/courses\/complete-java-backend-development-program"},{"name":"Data Analytics Programme","url":"https:\/\/www.geeksforgeeks.org\/courses\/complete-data-analytics-program"},{"name":"AWS Solutions Architect Certification","url":"https:\/\/www.geeksforgeeks.org\/courses\/aws-solutions-architect-certification-classroom-training"},{"name":"Explore All","url":"https:\/\/www.geeksforgeeks.org\/courses\/offline-courses"}]},"NON_NCR":{"Bengaluru":[{"name":"Data Science Classroom Program","url":"https:\/\/www.geeksforgeeks.org\/courses\/data-science-classroom-program"},{"name":"System Design Classroom Program","url":"https:\/\/www.geeksforgeeks.org\/courses\/system-design-classroom-program"},{"name":"MERN Full Stack Development","url":"https:\/\/www.geeksforgeeks.org\/courses\/mern-full-stack-development-classroom"},{"name":"DSA For Interview Preparation","url":"https:\/\/www.geeksforgeeks.org\/courses\/dsa-interview-preparation-classroom"},{"name":"JAVA Backend Development","url":"https:\/\/www.geeksforgeeks.org\/courses\/complete-java-backend-development-program"},{"name":"Data Analytics Programme","url":"https:\/\/www.geeksforgeeks.org\/courses\/complete-data-analytics-program"},{"name":"AWS Solutions Architect Certification","url":"https:\/\/www.geeksforgeeks.org\/courses\/aws-solutions-architect-certification-classroom-training"},{"name":"Explore All","url":"https:\/\/www.geeksforgeeks.org\/courses\/offline-courses"}],"Pune":[{"name":"MERN Full Stack Development","url":"https:\/\/www.geeksforgeeks.org\/courses\/mern-full-stack-development-classroom"},{"name":"DSA For Interview Preparation","url":"https:\/\/www.geeksforgeeks.org\/courses\/dsa-interview-preparation-classroom"},{"name":"Complete Data Analytics Program","url":"https:\/\/www.geeksforgeeks.org\/courses\/complete-data-analytics-program"},{"name":"Explore All","url":"https:\/\/www.geeksforgeeks.org\/courses\/offline-courses"}]}}`);
    const offlineCourseTermMapper = JSON.parse(`{"ALL_TERMIDS":["2058","6263","2628","1745","1789","2601","2057","5037","2971","2023","2162","2795"],"COURSE_TERMID_MAP":{"JAVA":["2058"],"DATA_ANALYTICS":["1745","1789","2601","2057","5037","2971","2023","2162","2795"],"DSA":["6263"],"MERN":["2628"]}}`);
</script>

<script async src="https://www.geeksforgeeks.org/wp-content/themes/iconic-one/js/event-promotion.min.js?ver=3.5"></script>
  
<!-- gfg tabs compatablity bundled js -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KDVRCT5');</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DWCCJLKX3X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
//  gtag('config', 'AW-474915276');
  gtag('config', 'G-DWCCJLKX3X');
  gtag('config', 'AW-796001856');
</script>

<!-- fancybar ad code start -->
<div id="GFG_AD_Desktop_Stickyunit_1x1"></div>
<!-- fancybar ad code ends -->
<!-- <div id="GFG_AD_gfg_mobile_320x50"></div> -->
<style>
    :root {
        --com-extra-icons-mobile-image: url(https://media.geeksforgeeks.org/auth-dashboard-uploads/Com-Extra-Icons13.svg);
        --write-experience-card-1: #ECF5F5;
        --write-experience-card-icon-1: #21898C;
        --write-experience-card-2: #EAF2F7;
        --write-experience-card-icon-2: #3079AC;
        --write-experience-card-3: #FDEFE6;
        --write-experience-card-icon-3: #F5A572;
        --write-experience-card-4: #F1F8F5;
        --write-experience-card-icon-4: #91C4AD;
        --write-experience-card-5: #EEE7FF;
        --write-experience-card-icon-5: #8B72C9;
        --write-experience-card-6: #F2F8E6;
        --write-experience-card-icon-6: #78C57F;
        --editor-button-text-color: #6E6E73;
        --write-modal-background: #fefefe;
        --experience-sidebar: #000;
        --left-bar-background: #FFFFFF;
        --write-redirect-container:#EAF2F7;
        --write-redirect-container-hover:#d6e7f2;
        
    }

    /* Dark Mode */
    body[data-dark-mode="true"] {
        --write-modal-background: #161c23;
        --experience-sidebar: #000;
        --left-bar-background: #F0F3F5;
    }

    .popup-main {
        padding: 20px 18px 20px 18px;
        border-radius: 8px;
    }

    .popup-main .popup-heading {
        display: flex;
        align-items: center;
        color: #E9E9EA;
        margin-bottom: 10px;
        justify-content: space-between;
    }

    .popup-main .close-icon {
        background-image: var(--com-extra-icons-mobile-image);background-position: -15px -1651px;height: 22px;width: 22px;transform: scale(1);
        margin-bottom: 12px;
        cursor: pointer;
    }

    .popup-main .experience-card {
        color: #000;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
        /* margin-bottom:10px; */
    }

    .popup-main a:hover,
    .popup-main a:active,
    .popup-main a:visited {
        color: inherit;
        text-decoration: none;
    }

    .popup-main .exp-card1,
    .popup-main .exp-card2,
    .popup-main .exp-card3,
    .popup-main .exp-card4,
    .popup-main .exp-card5,
    .popup-main .exp-card6 {
        display: flex;
        align-items: center;
        border-radius: 10px;
        cursor: pointer;
    }

    .popup-main .exp-card1 .icon1,
    .popup-main .exp-card2 .icon2,
    .popup-main .exp-card3 .icon3,
    .popup-main .exp-card4 .icon4,
    .popup-main .exp-card5 .icon5,
    .popup-main .exp-card6 .icon6 {
        width: 80px;
        height: 80px;
        border-radius: 10px 0px 0px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--write-experience-card-icon-1);
    }

    .popup-main .exp-card1 .icon1,
    .popup-main .exp-card2 .icon2,
    .popup-main .exp-card3 .icon3,
    .popup-main .exp-card4 .icon4,
    .popup-main .exp-card5 .icon5,
    .popup-main .exp-card6 .icon6 {
        width: 80px;
        height: 80px;
        border-radius: 10px 0px 0px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .popup-main .exp-card1 .icon1 {
        background: var(--write-experience-card-icon-1);
    }

    .popup-main .exp-card2 .icon2 {
        background: var(--write-experience-card-icon-2);
    }

    .popup-main .exp-card3 .icon3 {
        background: var(--write-experience-card-icon-3);
    }

    .popup-main .exp-card4 .icon4 {
        background: var(--write-experience-card-icon-4);
    }

    .popup-main .exp-card5 .icon5 {
        background: var(--write-experience-card-icon-5);
    }

    .popup-main .exp-card6 .icon6 {
        background: var(--write-experience-card-icon-6);
    }

    .popup-main .exp-card6 .icon6-image {
        background-image: url(https://media.geeksforgeeks.org/auth-dashboard-uploads/compass.svg);
        width: 46px;
        height: 30px;
        background-size: 30px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .popup-main .exp-card1 .icon1-image {
        background-image: var(--com-extra-icons-mobile-image);
        width: 46px;
        height: 28px;
        background-position: -4px -812px;
    }

    .popup-main .exp-card2 .icon2-image {
        background-image: var(--com-extra-icons-mobile-image);
        width: 46px;
        height: 28px;
        background-position: -4px -888px;
    }

    .popup-main .exp-card3 .icon3-image {
        background-image: var(--com-extra-icons-mobile-image);
        width: 46px;
        height: 28px;
        background-position: -4px -848px;
    }

    .popup-main .exp-card4 .icon4-image {
        background-image: url(https://media.geeksforgeeks.org/auth-dashboard-uploads/competitive.svg);
        width: 46px;
        height: 30px;
        background-size: 30px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .popup-main .exp-card5 .icon5-image {
        background-image: var(--com-extra-icons-mobile-image);
        width: 46px;
        height: 33px;
        background-position: -4px -1217px;
    }


    .popup-main .exp-card1 .exp-card1-text,
    .popup-main .exp-card2 .exp-card2-text,
    .popup-main .exp-card3 .exp-card3-text,
    .popup-main .exp-card4 .exp-card4-text,
    .popup-main .exp-card5 .exp-card5-text,
    .popup-main .exp-card6 .exp-card6-text {
        display: flex;
        align-items: center;
        border-radius: 0px 10px 10px 0px;
        height: 80px;
        width: calc(100% - 80px);
    }

    .popup-main .exp-card1 {
        justify-content: flex-start;
        background: var(--write-experience-card-1);
    }

    .popup-main .exp-card2 {
        justify-content: flex-start;
        background: var(--write-experience-card-2);
    }

    .popup-main .exp-card3 {
        justify-content: flex-start;
        background: var(--write-experience-card-3);
    }

    .popup-main .exp-card4 {
        justify-content: flex-start;
        background: var(--write-experience-card-4);
    }

    .popup-main .exp-card5 {
        justify-content: flex-start;
        background: var(--write-experience-card-5);
    }

    .popup-main .exp-card6 {
        justify-content: flex-start;
        background: var(--write-experience-card-6);
    }

    .popup-main span {
        font-family: var(--font-primary);
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-left: 5px;
        padding-right: 5px;
    }

    #popup {
        display: none;
        background-color: var(--write-modal-background);
        padding: 20px;
        text-align: center;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1026;
        width: min(650px, calc(100% - 20px));
    }
    .link-container-write{
        display:flex;
        flex-direction:column;
    }
    .link-container-write > a {
        margin:7px 0px;
    }
    .phrase__container{
        color:var(--color-gfg);
        border-radius: 6px;
        width: 100%;
        background-color:var(--write-redirect-container);
        padding: 15px;
        text-align: justify;
        font-size:14px;
    }
    .phrase__container:hover {
        color:var(--color-gfg) !important;
        background-color:var(--write-redirect-container-hover);
    }
</style>
<div class="popup-container">
        <div id="popup" accesskey="" class="popup-main">
            <div class="popup-heading">
                <h2>What kind of Experience do you want to share?</h2>
                <div class="close-icon share-experience-modal-close"></div>
            </div>
            <!-- <span class="description"style="color: #BEBEC2;">Tell us your type of experiences which can help other fellow Geeks for their future events and preparations.</span> -->
            <div class="experience-card">
                <a class="exp-card5" href= "https://write.geeksforgeeks.org/posts-new?cid=e8fc46fe-75e7-4a4b-be3c-0c862d655ed0" target="_blank">
                    <div class="icon5">
                        <div class="icon5-image"></div>
                    </div>
                    <div class="exp-card5-text">
                        <span style="color: #000;">Interview Experiences</span>
                    </div>
                </a>
                <a class="exp-card1" href="https://write.geeksforgeeks.org/posts-new?cid=82536bdb-84e6-4661-87c3-e77c3ac04ede" target="_blank">
                    <div class="icon1">
                        <div class="icon1-image"></div>
                    </div>
                    <div class="exp-card1-text">
                        <span style="color: #000;">Admission Experiences</span>
                    </div>
                </a>
                <a class="exp-card6" href= "https://write.geeksforgeeks.org/posts-new?cid=5219b0b2-7671-40a0-9bda-503e28a61c31" target="_blank">
                    <div class="icon6">
                        <div class="icon6-image"></div>
                    </div>
                    <div class="exp-card6-text">
                        <span style="color: #000;">Career Journeys</span>
                    </div>
                </a>
                <a class="exp-card2" href="https://write.geeksforgeeks.org/posts-new?cid=22ae3354-15b6-4dd4-a5b4-5c7a105b8a8f" target="_blank">
                    <div class="icon2">
                        <div class="icon2-image"></div>
                    </div>
                    <div class="exp-card2-text">
                        <span style="color: #000;">Work Experiences</span>
                    </div>
                </a>
                <a class="exp-card3" href= "https://write.geeksforgeeks.org/posts-new?cid=c5e1ac90-9490-440a-a5fa-6180c87ab8ae" target="_blank">
                    <div class="icon3">
                        <div class="icon3-image"></div>
                    </div>
                    <div class="exp-card3-text">
                        <span style="color: #000;">Campus Experiences</span>
                    </div>
                </a>
                <a class="exp-card4" href= "https://write.geeksforgeeks.org/posts-new?cid=5ebb8fe9-b980-4891-af07-f2d62a9735f2" target="_blank">
                    <div class="icon4">
                        <div class="icon4-image"></div>
                    </div>
                    <div class="exp-card4-text">
                        <span style="color: #000;">Competitive Exam Experiences</span>
                    </div>
                </a>
            </div>
        <!--    <div class="link-container-write">
                <a href="https://write.geeksforgeeks.org/pick-article?taxonomy=10261&page=1">
                    <div role="span" class="phrase__container">
                        Can't choose a topic to write? click here for suggested topics
                    </div>
                </a>
                <a href="https://write.geeksforgeeks.org/posts-new">
                    <div role="span" class="phrase__container">
                       Write and publish your own Article
                    </div>
                </a>
            </div> -->
        </div>
        <div id="overlay" onclick="toggleExperiencePopup()" style="display: block;min-height: 100vh;min-width: 100vw;position: fixed;top: 0;bottom: 0;right: 0;left: 0;display: none;justify-content: center;align-items: center;background: rgba(0,0,0,.702);z-index: 1025 !important;backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);word-break: keep-all;"></div>
    </div>

    <script>
        $('.share-experience-modal').click(function(e){
            e.preventDefault();
            var link = $(this).attr('href');
            toggleExperiencePopup(link);
        });
        function toggleExperiencePopup(link) {
            var popup = document.getElementById("popup");
            var overlay = document.getElementById("overlay");

            if (window.innerWidth < 992) {
                window.location.href = link;
            } else {
                popup.style.display = (popup.style.display === "block") ? "none" : "block";
                overlay.style.display = (overlay.style.display === "block") ? "none" : "block";
            }
        }
        $('.share-experience-modal-close').click(function(e){
            var popup = document.getElementById("popup");
            popup.style.display = 'none';
            var overlay = document.getElementById("overlay");
            overlay.style.display = 'none';
        });
</script>
</div><script type="text/javascript">
    $(window).on('load', function() {
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "ayc7ypwwuk");
    });
</script>
<!-- Chat bot is being shown for these category articles (8 -> linked-list 9172 -> AI-ML-DS, 1789 -> python  4667 -> math)  -->

   <!--script to load push notification related js-->
   <script defer src="https://www.geeksforgeeks.org/wp-content/themes/iconic-one/js/gfgnotification.min.js?ver=1.0"></script>
  <!--loading push notification css-->
  <link rel='stylesheet' href="https://www.geeksforgeeks.org/wp-content/themes/iconic-one/css/gfgnotification.min.css?ver=1.0" type='text/css' >
</body>
</html>


<!-- Dynamic page generated in 3.111 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2024-12-03 15:10:11 -->

<!-- Compression = gzip -->
<!-- super cache -->
