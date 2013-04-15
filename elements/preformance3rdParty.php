<article id="preformance3rdParty">
    <h2>3rd Party Integration</h2>
    
    <h3>Omniture</h3>
    
    <p>We recommend to add the Omniture JavaScript code to the DOM using JavaScript after the page has loaded (either a DOM ready event or window's load event). Using this technique, there is no external domain script dependency, which can slow down (and potentially hang) a page load.</p>
    
    
    <h3>Flash</h3>
    
    <p>Backup HTML content should be in place of the flash in all cases to maximize SEO value. For XML-driven flash, the backup HTML content should be leveraging the exact same XML file, to ensure data consistency.</p>
    
    <p>All replacements should be done using SWFObject but without inline script tags. SWFObject initialization should fire after the DOM Ready event. Minimum player version should be set to minimum v9, to ensure AS3 compatibility.</p>
    
</article>
