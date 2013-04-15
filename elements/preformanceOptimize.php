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
