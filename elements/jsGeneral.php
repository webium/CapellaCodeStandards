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
