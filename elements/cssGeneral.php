<article id="cssGeneral">
    <h2>General Coding Principles</h2>
    
    <ul>
        <li><i class="icon-minus"></i>Add CSS through external files, minimizing the # of files, if possible. It should always be in the HEAD of the document.</li>
        <li><i class="icon-minus"></i>Use the LINK tag to include, <a href="http://blog.amodernfable.com/2008/01/21/thoughts-on-linking-to-stylesheets/">never the @import.</a>
    
            <figure class="preCode">Including a stylesheet</figure>
            <textarea class="brush:html">
                <link rel="stylesheet" type="text/css" href="myStylesheet.css" />
            </textarea>
    
            <figure class="preCode">Don't use inline styling</figure>
            <textarea class="brush:html">
                <p style="font-size: 12px; color: #FFFFFF">This is poor form, I say</p>
            </textarea>
            
            </li>

        <li><i class="icon-minus"></i>Don't include styles inline in the document, either in a style tag or on the elements. It's harder to track down style rules.</li>  
        <li><i class="icon-minus"></i>Use <a href="http://necolas.github.com/normalize.css/">normalize.css</a> to make rendering more consistent across browsers.</li>
        <li><i class="icon-minus"></i>Use a font-normalization file like <a href="http://developer.yahoo.com/yui/fonts/">YUI fonts.css</a></li>   
        <li><i class="icon-minus"></i>Elements that occur only once inside a document should use IDs, otherwise, use classes.</li>
        <li><i class="icon-minus"></i>Understand <a href="http://www.stuffandnonsense.co.uk/archives/css_specificity_wars.html">cascading and selector specificity</a> so you can write very terse and effective code.</li>
        <li><i class="icon-minus"></i>Write selectors that are optimized for speed. Where possible, avoid expensive CSS selectors. For example, avoid the * wildcard selector and don't qualify ID selectors (e.g. <code>div#myid</code>) or class selectors (e.g. <code>table.results</code>.)  This is especially important with web applications where speed is paramount and there can be thousands or even tens of thousands of DOM elements. More on <a href="https://developer.mozilla.org/en/Writing_Efficient_CSS">writing efficient CSS on the MDC</a>.</li>
    </ul>


    <h3>General Text and Font Styling</h3>
    
    <h4>Headings</h4>
    
    <ul>
        <li><i class="icon-minus"></i>Define default styling for <code>h1-h6</code> headings including headings as links. It's helpful to declare these at the top of your CSS document, and modify them with as necessary for consistency across the site.</li>
        <li><i class="icon-minus"></i>Headings should show a hierarchy indicating different levels of importance from the top down starting with h1 having the largest font size.</li>
        <li><i class="icon-minus"></i>SEO: To get a rough idea of how your page hierarchy is organized and read, use your Developer Toolbar to disable CSS. You'll end up with a text-based view of all your <code>h1-h6</code> tags, <code>strong</code>, <code>em</code>, etc. If you use FireFox use your developer toolbar to display the document outline information.</li>
    </ul>
    
    <h4>Links</h4>
    
    <ul>
        <li><i class="icon-minus"></i>Default styles for links should be declared and different from the main text styling, and with differing styles for hover state.</li>
    </ul>

</article>