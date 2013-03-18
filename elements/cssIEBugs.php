<article id="cssIEBugs">
    <h3>Internet Explorer Bugs</h3>
    
    <p>Inevitably, when all other browsers appear to be working correctly, any and all versions of Internet Explorer will introduce a few nonsensical bugs, delaying time to deployment. While we encourage troubleshooting and building code that will work in all browsers without special modifications, sometimes it is necessary to use conditional <code>if IE</code> comments for CSS hooks we can use in our stylesheets. <a href="http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/">Read more on paulirish.com</a></p>
    
    
    <figure class="preCode">Fixing IE</figure>
    <textarea class="brush:html">
        <!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
        <!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
        <!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
        <!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
        <!--[if !IE]><!--> <body> <!--<![endif]-->
    </textarea>
    
    <textarea class="brush:css">
        .box { float: left; margin-left: 20px; }
        .ie6 .box { margin-left: 10px; }
    </textarea>
    
    <p>If you're using HTML5 (and the <a href="#h5bp">HTML5 Boilerplate</a>) we encourage the use of the <a href="http://www.modernizr.com/">Modernizer</a> JavaScript library and this pattern:</p>
     
    <textarea class="brush:html">
        <!--[if lt IE 7]> <html class="no-js ie ie6" lang="en"> <![endif]-->
        <!--[if IE 7]>    <html class="no-js ie ie7" lang="en"> <![endif]-->
        <!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
        <!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
        <!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    </textarea>
</article>