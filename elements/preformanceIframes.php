<article id="preformanceIframes">
    <h2>Avoid IFRAMEs</h2><!-- Because they suck more than being covered by leaches after swiming in a pond -->
    
    <p>Iframes are the most costly element to add to a given page. They block the page from firing the onload event until they are complete. Sometimes they are useful to let another agency handle tracking scripts. For example the Doubleclick floodlight tag is an iframe, and the admin can add tracking pixels into it from their dashboard. In any case where an iframe is added, it should be appended to the DOM dynamically after window onload has fired. <a href="http://developer.yahoo.com/performance/rules.html#iframes" target="_blank">More detail at Yahoo's Performance site.</a></p>
</article>    
