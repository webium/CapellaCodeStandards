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
