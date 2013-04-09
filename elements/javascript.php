<section id="js">

    <div class="intro has-icon">
        <img class="icon" src="img/common/icon-curly.png" alt="{}" />
        
        <h1>JavaScript</h1>
    
        <p>JavaScript is the third major component of a web page. JavaScript code, when properly applied to a web page, enhances the overall user and browser-based experience through attaching to events and controlling the overall behavior layer.</p>

        <p>JavaScript has seen an explosion in popularity in recent years as powerful new browser implementations have finally empowered the creation of full on browser-based web applications. Additionally, careful use of JavaScript allows for full manipulation and control over the other two components of web page authoring, <a href="#markup">HTML Markup</a> and <a href="#css">CSS</a>. Today the structure of pages and the visual styles of pages can be manipulated real time without full web page refreshes.</p>
    </div>

<article id="jsLibraries">
    <h2>JavaScript Libraries</h2>

        <p class="normalize">We primarily develop new applications in <a href="http://api.jquery.com/" target="_blank">jQuery</a>, though we have expertise in plain JavaScript as well as all major modern javascript libraries.</p>
</article>    

<article id="jsGeneral">
    <h2>General Coding Principles</h2>
    
    <ul>
        <li><i class="icon-minus"></i>99% of code should be housed in external javascript files. They should be included at the END of the BODY tag for maximum page performance.</li>
        <li><i class="icon-minus"></i>Don't rely on the user-agent string. Do proper feature detection. (More at <a href="http://diveintohtml5.info/detect.html" target="_blank">Dive Into HTML5: Detection</a> &amp; <a href="http://api.jquery.com/jQuery.support/" target="_blank">jQuery.support docs</a>)</li>
        <li><i class="icon-minus"></i>Don't use document.write().</li>
        <li><i class="icon-minus"></i>All Boolean variables should start with "is".
            <figure class="preCode">Test for positive conditions</figure>
            <textarea class="brush:js">
            isValid = (test.value >= 4 && test.success);
            </textarea>
        </li>
        <li><i class="icon-minus"></i>Name variables and functions logically: For example: <code>popUpWindowForAd</code> rather than <code>myWindow</code>.</li>
        <li><i class="icon-minus"></i>Don't manually minify. With the exception of the traditional <code>i</code>, etc. for <code>for</code> loops, variables should be long enough to be meaningful.</li>
        <li><i class="icon-minus"></i>Documentation should follow <a href="http://www.naturaldocs.org/documenting.html" target="_blank">NaturalDocs</a> structure.</li>
        <li><i class="icon-minus"></i>Constants or configuration variables (like animation durations, etc.) should be at the top of the file.</li>

        <li><i class="icon-minus"></i>Strive to create functions which can be generalized, take parameters, and return values. This allows for substantial code reuse and, when combined with includes or external scripts, can reduce the overhead when scripts need to change. For example, instead of hard coding a pop-window with window size, options, and url, consider creating a function which takes size, url, and options as variables.
        </li>
        <li><i class="icon-minus"></i>Comment your code! It helps reduce time spent troubleshooting JavaScript functions.</li>
        <li><i class="icon-minus"></i>Don't waste your time with <code>&lt;!-- --&gt;</code> comments surrounding your inline javascript, unless you care about Netscape 4.&nbsp;:)</li>
        <li><i class="icon-minus"></i>Organize your code as an <a href="http://kaijaeger.com/articles/the-singleton-design-pattern-in-javascript.html" target="_blank">Object Literal/Singleton</a>, in the <a href="http://www.yuiblog.com/blog/2007/06/12/module-pattern/" target="_blank">Module Pattern</a>, or as an <a href="http://mckoss.com/jscript/object.htm" target="_blank">Object with constructors</a></a>.</li>
    
      <li><i class="icon-minus"></i>Minimize global variables - the less globals you create, the better. Generally one, for your application namespace, is a good number. 
            <figure class="preCode">When specifying any global variable, clearly identify it</figure>       
            <textarea class="brush:js">
            window.globalVar = { ... }
            </textarea>
        </li>
    </ul>
</article>    
    
<article id="jsWhiteSpace">
    <h3>White-space</h3>
    
    <p>In general, the use of whitespace should follow longstanding English reading conventions. Such that, there will be one space after each comma and colon (and semi-colon where applicable), but no spaces immediately inside the right and left sides of parenthesis. In short, we advocate readability within reason. Additionally, braces should always appear on the same line as their preceding argument.</p>
    
    <p>Consider the following examples of a JavaScript for-loop...</p>
    
    
    <figure class="preCode">Correct</figure>
    <textarea class="brush:js">
        for (var i = 0, j = arr.length; i < j; i++) {
            // Do something.
        }
    </textarea>
    
    <figure class="preCode">Incorrect</figure>
    <textarea class="brush:js">
        for ( var i = 0, j = arr.length; i < j; i++ )
        {
            // Do something.
        }
    </textarea>
    
    <figure class="preCode">Also incorrect</figure>
    <textarea class="brush:js">
        for(var i=0,j=arr.length;i<j;i++){
            // Do something.
        }
    </textarea>
</article>


<article id="jsFiles">
    <h3>plugins.js and script.js</h3>
    
    <p>Starting with H5BP we're presented with two files, plugins.js and script.js. This section outlines basic usage of these two files.</p>
    
    <h4>plugins.js</h4>
    
    <p>Plugins.js is meant to hold all of a sites plugin code. Instead of linking to many different files, we can improve performance by including plugin code directly in this one file. There can and should be exceptions to this usage. An extremely large plugin only used on one rarely visited page, for example, might be better off in a separate download, only accessed on the target page. Most of the time, however, it's safe to just paste in minified versions of all your plugins here for easy access. </p>
    
    <p>Here's what an example file might looks like, including a small table of contents. This can serve as a handy guide for what plugins are in use, including URLs for documentation, rationale for use and the like.</p>
    
    <textarea class="brush:js">
    /* PLUGIN DIRECTORY
    What you can find in this file [listed in order they appear]
    
           1.) Animate Background Position - http://plugins.jquery.com/project/backgroundPosition-Effect
           2.) jQuery Easing Plugin - http://gsgd.co.uk/sandbox/jquery/easing/
           3.) jQuery Ajax Form plugin - http://jquery.malsup.com/form/#download            
           4.) jQuery validation plugin (form validation) - http://docs.jquery.com/Plugins/Validation
               -password strength
           5.) Styled Selects (lightweight) - http://code.google.com/p/lnet/wiki/jQueryStyledSelectOverview
    */
    
    /**
    * 1.) Animate Background Position - http://plugins.jquery.com/project/backgroundPosition-Effect
    * @author Alexander Farkas
    * v. 1.21
    */
    (function($) {
       if(!document.defaultView || !document.defaultView.getComputedStyle){ // IE6-IE8
       //SNIPPED
       };
    })(jQuery);
    
    
    /**
    * 2.) jQuery Easing Plugin (we're not using jQuery UI as of yet) - http://gsgd.co.uk/sandbox/jquery/easing/
    */
    
    // t: current time, b: begInnIng value, c: change In value, d: duration
    jQuery.easing['jswing'] = jQuery.easing['swing'];
    
    jQuery.extend( jQuery.easing,
    {
       //SNIPPED
       
    });
    ;(function($) {
       $.fn.ajaxSubmit = function(options) {
       //SNIPPED
       }
    })(jQuery);
    
    /*
    * jQuery Styled Select Boxes
    * version: 1.1 (2009/03/24)
    * @requires jQuery v1.2.6 or later
    *
    * Examples and documentation at: http://code.google.com/p/lnet/wiki/jQueryStyledSelectOverview
    *
    * Copyright (c) 2008 Lasar Liepins, liepins.org, liepins@gmail.com
    *
    * Permission is hereby granted, free of charge, to any person obtaining a copy
    * of this software and associated documentation files (the "Software"), to deal
    * in the Software without restriction, including without limitation the rights
    * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    * copies of the Software, and to permit persons to whom the Software is
    * furnished to do so, subject to the following conditions:
    *
    * The above copyright notice and this permission notice shall be included in
    * all copies or substantial portions of the Software.
    *
    * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
    * THE SOFTWARE.
    *
    */
    
    jQuery.fn.styledSelect = function(settings) {
    //SNIPPED
           return this;
    };
    </textarea>


    <h4>Script.js</h4>

    <p>Script.js is meant to hold your site or application code. Again, this isn't always the best solution as larger teams and or larger, more feature rich projects can really benefit from breaking out application code into module or feature specific files. For smaller sites, simpler applications, and initial prototyping, however, dropping your work into scripts.js makes sense.</p>
    
    <p>A simplified example, using the <a href='http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/' target="_blank">Markup-based unobtrusive comprehensive DOM-ready execution</a> pattern, might look something like the following:</p>

    <textarea class="brush:js">     
    /* Name: Demo
    Author: Demo King */
    /*demo namespace*/
    demo = {
     common : {
       init     : function(){
           //initialize
       },
       finalize : function(){
           //finalize
       },
       config : {
           prop : "my value",
           constant : "42"
       }
     },
     mapping : {
       init     : function(){
           //create a map
       },
       geolocate    : function(){
           //geolocation is cool
       },
       geocode : function(){
           //look up an address or landmark
       },
       drawPolylines : function(){
           //draw some lines on a map
       },
       placeMarker : function(){
           //place markers on the map
       }
     }
    }
    </textarea>
</article>
    

<article id="jsVars">
    <h2>Variables, ID &amp; Class</h2>
    
    <p>All JavaScript variables shall be written in either completely lowercase letter or camelCase. The one exception to this are Constructor functions, which are capitalized by tradition. All <code>id</code> and <code>class</code> declarations in CSS shall be written in only lowercase. Neither dashes nor underscores shall be used. </p>
</article>    
    
<article id="jsDelegation">
    <h3>Event Delegation</h3>
    
    <p>When assigning unobtrusive event listeners, it is typically acceptable to assign the event listener directly to the element(s) which will trigger some resulting action. However, occasionally there may be multiple elements which match the criteria for which you are checking, and attaching event listeners to each one might negatively impact performance. In such cases you should use event delegation instead.</p>
    
    <p>jQuery's <a href="http://api.jquery.com/delegate" target="_blank">delegate()</a> is preferred over <a href="http://api.jquery.com/live" target="_blank">live()</a> for performance reasons.</p>
</article>    
    
<article id="jsDebugging">
    <h3>Debugging</h3>
    
    <p>Even with the best of validators, inevitably browser quirks will cause issues. There are several invaluable tools which will help to refine code integrity and loading speed. It is important that you have all of these tools available to you, despite the browser you primarily use for development. We recommend developing for Firefox and Safari first, then Google Chrome and Opera, with additional tweaks via conditional comments just for Internet Explorer. The following is a list of helpful debuggers and speed analyzers...</p>
    
    <ul>
        <li><i class="icon-minus"></i><strong>Firefox</strong>: <a href="http://getfirebug.com/" target="_blank">Firebug</a>, <a href="http://code.google.com/speed/page-speed/" target="_blank">Page Speed</a>, <a href="http://developer.yahoo.com/yslow/" target="_blank">YSlow</a></li>
        <li><i class="icon-minus"></i><strong>Safari</strong>: <a href="http://developer.apple.com/safari/library/documentation/AppleApplications/Conceptual/Safari_Developer_Guide/UsingtheWebInspector/UsingtheWebInspector.html" target="_blank">Web Inspector</a></li>
        <li><i class="icon-minus"></i><strong>Google Chrome</strong>: <a href="http://google.com/chrome/intl/en/webmasters-faq.html#tools" target="_blank">Developer Tools</a></li>
        <li><i class="icon-minus"></i><strong>Opera</strong>: <a href="http://opera.com/dragonfly/" target="_blank">Dragonfly</a></li>
        <li><i class="icon-minus"></i><strong>Internet Explorer 6-7</strong>: <a href="http://microsoft.com/downloads/details.aspx?familyid=E59C3964-672D-4511-BB3E-2D5E1DB91038" target="_blank">Developer Toolbar</a></li>
        <li><i class="icon-minus"></i><strong>Internet Explorer 8-10</strong>: <a href="http://msdn.microsoft.com/en-us/library/dd565625(v=VS.85).aspx" target="_blank">Developer Tools</a></li>  
    </ul>
</article>   

<article id="jsPatterns">
    <h3>Patterns for better JavaScript</h3>

    <ul>
        <li><i class="icon-minus"></i>Writing Maintainable Code</li>
        <li><i class="icon-minus"></i>Single var Pattern</li>
        <li><i class="icon-minus"></i>Hoisting: A Problem with Scattered vars</li>
        <li><i class="icon-minus"></i>(Not) Augmenting Built-in Prototypes</li>
        <li><i class="icon-minus"></i>Avoiding Implied Typecasting</li>
        <li><i class="icon-minus"></i>Avoiding eval()</li>
        <li><i class="icon-minus"></i>Number Conversions with parseInt()</li>
        <li><i class="icon-minus"></i>Opening Brace Location</li>
        <li><i class="icon-minus"></i>Capitalizing Constructors</li>
        <li><i class="icon-minus"></i>Writing Comments</li>
        <li><i class="icon-minus"></i>Avoid void</li>
        <li><i class="icon-minus"></i>Avoid with Statement</li>
        <li><i class="icon-minus"></i>Avoid continue Statement</li>
        <li><i class="icon-minus"></i>Avoid Bitwise Operators if possible</li>
    </ul>
    
    <p>Stoyan Stefanov covers these and more <a href="http://net.tutsplus.com/tutorials/javascript-ajax/the-essentials-of-writing-high-quality-javascript/" target="_blank">in detail here</a>.</p>
</article>
   
</section>
