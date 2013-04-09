<section id="performance">

    <div class="intro has-icon">
        <img class="icon" src="img/common/icon-curly.png" alt="{}" />
        <h1>Performance</h1>
        <p>As we continue to push the limits of what the web can do, it remains just as important a web page can be used with minimal effort or wait time. The following section explains how web pages can be optimized to keep all audiences happy.</p>
    </div>
    
<article id="preformanceOptimize">
    <h2>Optimize Delivery of CSS and JavaScript</h2>
    
    <p>There are many optimizations that should be done for serving CSS and javascript in Production:</p>
    
    <ul>
        <li><i class="icon-minus"></i>Follow the <a href="http://developer.yahoo.com/performance/" target="_blank">Yahoo Performance Guidelines</a></li>
        <li><i class="icon-minus"></i>Smush images using <a href="http://developer.yahoo.com/yslow/smushit/" target="_blank">smush.it</a>. Also using <a href="http://developer.yahoo.com/yslow/" target="_blank">YSlow</a> can autosmush all your images for you.</li>
        
        <li><i class="icon-minus"></i>Set caching headers appropriately.</li>
        <li><i class="icon-minus"></i>Consider a cookie-less subdomain for static assets</li>
        <li><i class="icon-minus"></i>Avoid inline &lt;script&gt; blocks.</li>
        
        <li><i class="icon-minus"></i>CSS should be located in the <code>&lt;head></code> of the document, Javascript should be right before the <code>&lt;/body></code> tag.</li>
        <li><i class="icon-minus"></i>Both CSS and JavaScript should be served minified. Most people use the <a href="http://developer.yahoo.com/yui/compressor/" target="_blank">YUI Compressor</a> for this.</li>
    
        <li><i class="icon-minus"></i>Both should be <a href="http://code.google.com/speed/page-speed/docs/payload.html#GzipCompression" target="_blank">served using gzip on the wire</a></li>
        <li><i class="icon-minus"></i>CSS should be concatenated together. Obviously this can only be done for files that share the same media type (e.g. screen or print). The general goal here is to reduce the number of HTTP connections to dependencies during the loading of the page.</li>
    
        <li><i class="icon-minus"></i>JavaScript should be concatenated. While a ajax script dependency manager would be ideal (similar to the YUI 3 Loader), it's rather complicated to implement. In its place I'd recommend a singular download of most of the script used on the site. (Of course, proper caching should be used to retain the file as long as is reasonable).</li>
    
        <li><i class="icon-minus"></i>Concatenation and minification typically occur during an automated build process, when packaging the code for deployment on stage or production. Many use tools like <a href="http://ant.apache.org/" target="_blank">Ant</a> or <a href="http://maven.apache.org/" target="_blank">Maven</a> for this.</li>
        <li><i class="icon-minus"></i>Avoid inline <code>&lt;script></code> blocks within the HTML. They block rendering and are quite devastating to page load time.</li>
    </ul>
</article>    
    

<article id="preformanceJS">
    <h2>Optimize JavaScript execution</h2>
    
    <p>During a page load, there is typically a lot of script waiting to execute, but you can prioritize it. This order prioritizes based on user response:</p>
    
    <ol>
        <li>Script that changes the visible nature of the page needs to fire absolutely first. This includes any font adjustment, box layout, or IE6 pngfixes.</li>
        <li>Page content initialization</li>
        <li>Page header, topnav and footer initialization</li>
        <li>Attaching event handlers</li>
        <li>Omniture, Doubleclick, and other 3rd party scripts</li>
    </ol>
</article>    
    
<article id="preformanceCSS">
    <h2>Leverage CSS Sprites</h2>
    
    <p>CSS Sprites basically take a number of image assets and merge them together into a singular image file. Each part of it is revealed using CSS background-position. Some typical CSS would look like:</p>
    
    <textarea class="brush:css">
    a.expandbox { display:block; width: 75px; height: 15px; text-indent: -999px; overflow:hidden;
                 background: url(../img/sprite.png) no-repeat -50px -5px;  }
    </textarea>
    
    <p>It's quite common to leverage sprites for :hover states. In that case you'll see something like:</p>
    
    <textarea class="brush:css">
    a.expandbox:hover { background-position: -50px -20px; }
    </textarea>
    
    <p>Using sprites reduces total page weight and reduces HTTP connections which speeds up page load. <a href="http://css-tricks.com/css-sprites/" target="_blank">More on the general technique and overview at css-tricks.com</a>.  It is just an overall best practice to make use of CSS sprite images whenever you can.</p>
    
    <p>Many developers use a vertically-oriented sprite in addition to the primary sprite. This vertical sprite will be <strong>less than or equal to 100px wide</strong> (and tall) and contain icons that are typically placed next to text, such as list item bullets or call to action links and buttons. Yahoo uses a few <a href="http://l.yimg.com/a/i/ww/sp/pa-icons3.gif" target="_blank">such as this one</a>.</p>
    
    <p>The one consideration is to not make sprites too large, something over 1000px in either direction will end up using a sizeable amount of memory. Read more on <a href="http://blog.vlad1.com/2009/06/22/to-sprite-or-not-to-sprite/" target="_blank">when to use sprites and memory usage here</a>, and for more general tips and techniques on creating sprites check out the <a href="http://blog.mozilla.com/webdev/2009/03/27/css-spriting-tips/" target="_blank">Mozilla Dev Blog</a>.</p>

    <p>Some general <a href="http://blog.mozilla.com/webdev/2009/03/27/css-spriting-tips/" target="_blank">tips and techniques</a> in sprite creation can be found on the <a href="http://blog.mozilla.com/webdev/2009/03/27/css-spriting-tips/" target="_blank">Mozilla Dev Blog</a>.</p>
</article>

<article id="preformanceImages">
    <h2>Image formats</h2>
    
    <p>There are four main image formats that should be used, detailed here:</p>
    
    <ol>
        <li><p><strong>JPEG.</strong> - This will cover all photography-based images, such as homepage and category page promo images, or anything with a very high color count.</p></li>
        <li>
            <p><strong>PNG24.</strong> This format, easily accessible in Photoshop, outputs high-color count imagery and fully supports graded opacity by pixel. Relatively, it's quite a heavy format as far as kilobyte weight. It is the only format that IE6 needs to execute a pngfix on. In that case, Capella University recommends the <a href="http://www.dillerdesign.com/experiment/DD_belatedPNG/" target="_blank">DD_belatedPNG script</a> (A pngfix fixes the issue where PNG24's appear to have a gray or light-blue background in IE6. They are not always compatible with background-position).</p>
            <p>In many cases, you can use a GIF fallback for IE6, in place of a PNG24. This is especially true if any sprites need to be done in PNG24. All pngfixes are very slow and expensive, so it's best to avoid using them.</p>
        </li>
        <li><p><strong>PNG8.</strong> - A surprising diversity of color can be captured inside 256 colors, so it's worth trying PNG before heading JPG. PNG also is a lot more compressible than GIF (using tools like pngcrush and pngquant). This format allows graded opacity in nearly all browsers, but in IE6, those semi-opaque pixels are just shown 100% transparent. In many cases this is sufficient. It also does not require a pngfix script to be run, so it's optimized for speed.</p>
            <p>Photoshop cannot output these semi-opaque files correctly but Fireworks can. More detail here: <a href="http://www.sitepoint.com/png8-the-clear-winner/" target="_blank">http://www.sitepoint.com/png8-the-clear-winner/</a></p>
        </li>
        <li><p><strong>Transparent GIF 89a.</strong> - GIF 89a offers the flexibility of transparency and wide browser support, but the constraints of no graded opacity nor a color depth above 256. In our experience, color depths of 64 still provide very good quality thumbnails, and keep the file size comparably very small.</p>
            <p>All low-color count imagery such as icons or thematic graphics should be done in PNG8, as it's the most size-efficient of these four. PNG8 is our primary recommendation for most site graphics.</p>
        </li>
    </ol>
    
    <p>Detailed information on the PNG format, browser support, and the pros and cons of each can be <a href="http://calendar.perfplanet.com/2010/png-that-works/" target="_blank">found in this excellent article</a>.</p>
    
    <p>For further optimization all of these formats, taking them through <a href="http://developer.yahoo.com/yslow/smushit/" target="_blank">Yahoo's Smush.It</a> will reveal how they can be smaller.</p>
</article>    
    
<article id="preformanceCaching">
    <h2>Caching</h2>
    
    <p>For static content, the browser should cache the file locally as long as is reasonable.
    Content that should have far future caching includes:</p>
    
    <ul>
        <li><i class="icon-minus"></i>CSS and JavaScript</li>
        <li><i class="icon-minus"></i>product images</li>
        <li><i class="icon-minus"></i>thematic graphics</li>
        <li><i class="icon-minus"></i>favicon.ico</li>
        <li><i class="icon-minus"></i>flash .swf's</li>
        <li><i class="icon-minus"></i>promo images (lighter caching likely)</li>
    </ul>
    
    <p>For the best caching, leverage the Expires http header. This is a far future Expires header, telling the browser that this response won't be stale until April 15, 2015.</p>
    
    <pre>Expires: Thu, 15 Apr 2015 20:00:00 GMT</pre>
    
    <p>If your server is Apache, use the ExpiresDefault directive to set an expiration date relative to the current date. This example of the ExpiresDefault directive sets the Expires date 1 year out from the time of the request.</p>
    
    <pre>ExpiresDefault "access plus 1 year"</pre>
    
    <p>Expires http header should be set to a value between one month from present to a year (far future) from present. Caching only applies to that exact URL, so a change in the filename of any asset will start a fresh copy. Many developers use a build process to add a version number or timestamp to their assets. Each subsequent build will start a brand new cached version, allowing you to use far future cache dates without worry. <a href="http://code.google.com/speed/page-speed/docs/caching.html#LeverageBrowserCaching" target="_blank">Google has a lot more detail on browser caching</a>.</p>
</article>    
    
<article id="preformanceShared">
    <h3>Shared resources across domains</h3>
    
    <p>Static content should certainly be served from a domain different than the one that serves HTML. This is optimal so that there are <a href="http://developer.yahoo.com/performance/rules.html#cookie_free" target="_blank">no extra cookies headers on all static content requests</a>. It's also much easier to write caching rules for the entire domain. (Also any subdomains of the current domain will inherit domain cookies, so it's worth using a completely new domain).</p>
    
    <p>However with enough assets (especially images) the number of requests grows enough to slow down the load of the page. Many browsers have a low constraint of how many assets they will download simultaneously per domain. (In IE6 and 7, it's only two). In this case, we can serve the assets from multiple subdomains such as:</p>
    
    <ul>
        <li><i class="icon-minus"></i>static1.otherdomain.com</li>
        <li><i class="icon-minus"></i>static2.otherdomain.com</li>
        <li><i class="icon-minus"></i>static3.otherdomain.com</li>
    </ul>

    <p><a href="http://code.google.com/speed/page-speed/docs/rtt.html#ParallelizeDownloads" target="_blank">More information on domain sharding on Google Speed</a></p>
</article>    
    
<article id="preformanceIframes">
    <h2>Avoid IFRAMEs</h2><!-- Because they suck more than being covered by leaches after swiming in a pond -->
    
    <p>Iframes are the most costly element to add to a given page. They block the page from firing the onload event until they are complete. Sometimes they are useful to let another agency handle tracking scripts. For example the Doubleclick floodlight tag is an iframe, and the admin can add tracking pixels into it from their dashboard. In any case where an iframe is added, it should be appended to the DOM dynamically after window onload has fired. <a href="http://developer.yahoo.com/performance/rules.html#iframes" target="_blank">More detail at Yahoo's Performance site.</a></p>
</article>    
    
<article id="preformance3rdParty">
    <h2>3rd Party Integration</h2>
    
    <h3>Omniture</h3>
    
    <p>We recommend to add the Omniture JavaScript code to the DOM using JavaScript after the page has loaded (either a DOM ready event or window's load event). Using this technique, there is no external domain script dependency, which can slow down (and potentially hang) a page load.</p>
    
    
    <h3>Flash</h3>
    
    <p>Backup HTML content should be in place of the flash in all cases to maximize SEO value. For XML-driven flash, the backup HTML content should be leveraging the exact same XML file, to ensure data consistency.</p>
    
    <p>All replacements should be done using SWFObject but without inline script tags. SWFObject initialization should fire after the DOM Ready event. Minimum player version should be set to minimum v9, to ensure AS3 compatibility.</p>
    
</article>

<article id="preformanceCrossBrowser">
        <h2 id="browserperformance">Cross-Browser Performance Strategy</h2>
        <p>There are two major truths when it comes to in-browser experience:</p>

        <ol>
            <li>Everyone wants the most responsive experience possible.</li>
            <li>Everything added to the page slows it down.</li>
        </ol>

        <p>So with these two facts of life, what steps do we need to take so everyone is happy?</p>
</article>    

<article id="preformanceSuccess">
    <h2>Create success metrics with the client</h2>

    <p>These should be customized to your client and project and done before the wireframing phase. These goals should be reasonable from a technical POV, as well as testable.</p>
    
    <strong>Some goals that would be appropriate:</strong>
    
    <ol>
        <li>The slowest browser supported must go from an empty cache to fully loaded and initialized within 5 seconds.</li>
        <li>Hover states (and other 'instant' changes) should respond within 100ms.</li>
        <li>Animations should appear smooth, with jumpiness occurring &lt; 15% of the time (across all browsers).</li>
    </ol>
    
    <p>For load-time based goals, it's important to define the benchmark system. Something like <a href="http://www.webpagetest.org/" target="_blank">PageTest</a> is a good option. Additionally, goals may be defined for multiple pages, for example: the two most popular landing pages (e.g. homepage and support).</p>
    
    <p>If the client has more aggressive goals than are reasonable with the intended design, expectations need to be set across the board, priming the team that performance goals are going to be paramount.</p>
</article>

<article id="preformanceImpact">
    <h2>Communicating the performance impact during design phase</h2>

    <strong>Internally</strong>

    <p>During IA, IxD, and visual design, it is the front end engineer's role to communicate the performance impact of interactive features or certain visual techniques on the target browsers. Give the designers constraints: "If we're using Cufon, we cannot have more than 10 elements of custom font per page."</p>

    <strong>Externally</strong>

    <p>Expectations need to be set that <strong>all browsers will not have the same experience</strong>. They won't perform as well as each other, nor may it make sense to have feature parity. It may be sensible to drop a few features from the IE7 experience. Features that could be considered to be dropped are: <em>shadows, transitions, rounded corners, opacity, gradients.</em></p>
    
    <strong>When communicating the impact of something:</strong>

    <ul>
        <li><i class="icon-minus"></i>Clarify the impact with as much detail as possible: "it will hurt page load" vs "it will add 2 seconds to page load in IE"</li>
        <li><i class="icon-minus"></i>Provide a quick POC (proof of concept) if it's reasonable: "This similar-looking page without siFR loads in 2 seconds, with siFR it loads in 8 and has a delay to show during scrolling"</li>
    </ul>
</article>    

<article id="preformancePractice">
    <h2>Develop according to best practices</h2>

    <p>Choose libraries and plugins that are performance optimized. Make wise architecture decisions based on performance goals. Also minimize DOM manipulation when possible, and write styles to <a href="http://paulirish.com/2009/avoiding-the-fouc-v3/" target="_blank">avoid visual changes</a> to the page as it loads and initializes.</p>
</article>

<article id="preformanceMeasure">
    <h2>Measure performance during QA</h2>

    <p>QA teams should also prioritize performance related tickets alongside visual, functional, and usability issues. Developers and QA should determine how that priority will be assigned. During QA, the success metrics should be tested regularly.</p>

    <strong>Tools to test with</strong>

    <ul>
        <li><i class="icon-minus"></i><a href="http://developer.yahoo.com/yslow/" target="_blank">YSlow</a>, <a href="http://code.google.com/speed/page-speed/" target="_blank">Page Speed</a>, <a href="http://stevesouders.com/hammerhead/" target="_blank">Hammerhead</a>, <a href="http://msfast.myspace.com/" target="_blank">MSFast</a>, <a href="http://www.webpagetest.org/" target="_blank">PageTest</a></li>
    </ul>

    <strong>When performance goals aren't met, there are three options:</strong>

    <ol>
        <li><em>Redevelop the code</em> - profile, discover bottlenecks, refactor code, optimize to target faster execution in the browser</li>
        <li><em>Drop the feature</em> - turn it off for slower browsers only</li>
        <li><em>Redesign approach of the UI</em> - perhaps the design could use a tweak which would bypass the issue entirely</li>
    </ol>

    <p>With this approach, we think all parties have a better chance of having aligned expectations heading in as well as a more sensible workflow in dealing with performance challenges.</p>
</article>

</section>
