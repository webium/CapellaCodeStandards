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
