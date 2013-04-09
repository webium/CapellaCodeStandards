<section id="seo">

    <div class="intro has-icon">
        <img class="icon" src="img/common/icon-curly.png" alt="{}" />
        
        <h1>SEO</h1>     
        
        <p><b>Search Engine Optimization:</b> An essential part of good web design and development is SEO. Well-structured code is the key to ensuring that a web page not only gets properly indexed by search engines, but made accessible to those with limited web capabilities as well.</p>
    </div>

    <h2>Be aware of SEO best practices</h2>

    <ul>
        <li><i class="icon-minus"></i><a href="http://24ways.org/2007/back-to-the-future-of-print" target="_blank">Print CSS best practices</a>.</li>
        <li><i class="icon-minus"></i>Site/app will fit according to <a href="#_browser_resolution" target="_blank">Browser Resolution guidelines</a>.</li>
        <li><i class="icon-minus"></i>Site/app will be compatible with browser requirements described in <a href="#_browser_testing_and_support" target="_blank">Browser Testing and Support</a>.</li>
        <li><i class="icon-minus"></i>Be aware of Accessibility best practices, such as the 508 and WCAG standards: 
            <ul>
                <li><i class="icon-minus"></i><a href="http://www.section508.gov" target="_blank">http://www.section508.gov</a></li>
                <li><i class="icon-minus"></i><a href="http://www.w3.org/TR/WCAG20/" target="_blank">http://www.w3.org/TR/WCAG20/</a>.</li>
            </ul>
        </li>
    </ul>
    

    <h3>Indexability</h3>

    <p>We must use semantic markup that's readable and logical when JavaScript and CSS are off. All page content must be in HTML; we don't want to use iframes or JavaScript for loading initial indexable content.</p>
    
    <figure class="preCode">All links should be to HTML destinations.</figure>
    <textarea class="brush:html">
        <a href="/kurt/lord/of/the/underworld">
    </textarea> 
    
    <figure class="preCode">Instead of</figure>
    <textarea class="brush:html">
        <a href="javascript:loadPage(2);">
    </textarea>

    <p>This lets the page get indexed correctly by search engines as well as allows users to open in new tabs and windows.</p>
    
    
    <h3>Optimization</h3>
    
    <p>The title tag should feature target keywords for the unique page. The titles should be unique to each page. Headings (h1,h2,etc) should form an outline of the document and represent the most important keywords for that page. URLs should be human-readable with primary target keywords present in them:</p>

    
    <pre>http://domain.com/mens-shoes/basketball/jordan/jordan-mens-ajf-6-basketball-shoe/</pre>    
    <p><strong>vs</strong></p>
    <pre>http:// domain.com/ecomm.cfm?view=prod&prodId=23425</pre>
    
    
    <h3>Flash and Image Replacement</h3>

    <p>Always use backup HTML content for flash. All promo images should use CSS-based image replacement instead of alt tags.</p>

    <figure class="preCode">>Fallback non-flash version:</figure>
    <textarea class="brush:html">
        <a href="/tom/lord/of/all/humans/" id="morethan">
          <h4>Tom: Lord of All humans</h4>
          <h5>Experience the movement and rebel accordingly</h5>
        </a>
    </textarea>
    
    <br />
    <textarea class="brush:css">
        a#more than { background:url(/promos/nikegame.jpg) no-repeat; width: 200px; height: 100px;
                     text-indent: -999px; overflow:hidden; display:block; }
    </textarea>
    
    <h2>Google's SEO Report Card</h2>

    <p><a href="http://googlewebmastercentral.blogspot.com/2010/03/googles-seo-report-card.html" target="_blank">Google's SEO Report Card</a> is an effort to provide Google's product teams with ideas. on how they can improve their products' pages using simple and accepted optimizations. These optimizations are intended to not only help search engines understand the content of their pages better, but also to improve their our users' experience.</p>

    <p>when visiting their sites. Simple steps such as fixing 404s and broken links, simplifying URL choice, and providing easier-to-understand titles and snippets for their pages can benefit both users and search engines.</p>


</section>
