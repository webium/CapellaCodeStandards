<article id="cssTypography">
    <h2>Web Typography</h2>

    <p>The use of custom fonts and typefaces on the web has been growing more popular the past few years. with native browser support on the rise and several supporting services and APIs now available there is real momentum in this space. Each of these approaches have their own pros and cons. Before a project kicks off it's best to do research into technology and licensing limitations to choose the proper approach for the specific project.</p>

    <p>All of these approaches have drawbacks in code overhead, development time and performance (clock and perceived). Familiarizing yourself with these issues and communicating them to the other members of the team and to the client will save significant problems later on in the project.</p>

    <p>Listed here are some popular methods of embed custom fonts, list in the order of our preference for implementation.</p>
    
    <h3>@font-face</h3>
    
    <p>The <a href="http://www.w3.org/TR/2011/WD-css3-fonts-20110324/#font-face-rule" target="_blank">@font-face at-rule</a> allows you to define custom fonts. It was first defined in the CSS2 specification, but was removed from CSS2.1. Currently, it's a draft recommendation for CSS3.</p>
    
    <p>Our first and most preferred choice for customizing fonts on the web is @font-face, simply because it is part of the CSS Fonts Module working draft which means it will continue to grow in popularity as browser support grows, and ease of use for it improves as it becomes more stable.</p>
    
    <p>For now, when using <code>@font-face</code> it's recommended to declare the source for each font format. This is important if you want it to work in the most number of browsers, though it is not a requirement for use.</p>
    
    <p class="normalize">The font formats included in the specification are:</p>
    
    <ul>
        <li><i class="icon-minus"></i><strong>woff</strong>: WOFF (Web Open Font Format)</li>
        <li><i class="icon-minus"></i><strong>ttf</strong>: TrueType</li>
        <li><i class="icon-minus"></i><strong>ttf</strong>, <strong>otf</strong>: OpenType</li>
        <li><i class="icon-minus"></i><strong>eot</strong>: Embedded OpenType</li>
        <li><i class="icon-minus"></i><strong>svg</strong>, <strong>svgz</strong>: SVG Font</li>
    </ul>
    
    <h4>Bulletproof @font-face</h4>
    
    <p>For full cross-browser compatibility use Fontsprings' new <a href="http://www.fontspring.com/blog/further-hardening-of-the-bulletproof-syntax" target="_blank">bulletproof @font-face syntax</a> (<em>latest version as of 2/21/11</em>).</p>
    
    <textarea class="brush:css">
        @font-face {
            font-family: 'MyFontFamily';
            src: url('myfont-webfont.eot');                     /* IE9 Compat Modes */
            src: url('myfont-webfont.eot?iefix') format('eot'), /* IE6-IE8 */
               url('myfont-webfont.woff') format('woff'),       /* Modern Browsers */
               url('myfont-webfont.ttf') format('truetype'),        /* Safari, Android, iOS */
               url('myfont-webfont.svg#svgFontName') format('svg'); /* Legacy iOS */
            font-weight: <font-weight>;
            font-style: <font-style>;
            // etc.
        }
    </textarea>
    
    <p>Here's a <a href="http://www.thecssninja.com/demo/css_fontface/" target="_blank">working demo</a> using this version of implementation.</p>
    
    <h4>Cross-Browser Compatibility</h4>
    
    <p>Safari, <abbr title="Internet Explorer version 6-9">IE 6-9</abbr>, <abbr title="Internet Explorer Compatibility Modes">IE 9 Compatibility Modes</abbr>, Firefox, Chrome, iOS, Android, Opera</p>
    
    <h4>Prevent Compatibility Mode</h4>
    
    <p>Sometimes <abbr title="Internet Explorer">IE</abbr> can have a mind of its own and will switch to compatibility mode without you knowing. Include the following in the site <code>&lt;head&gt;</code> to prevent your site from defaulting to compatibility mode:</p>
    
    <textarea class="brush:html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </textarea>
    
    <hr />
    
    <h4>Tips for @font-face</h4>
    
    <ul>
        <li><i class="icon-minus"></i>IE 6–8 will only accept a TrueType font packaged as an EOT.</li>
        <li><i class="icon-minus"></i>font-weight and font-style have different meanings within <code>@font-face</code>. 
            Declarations where <code>font-weight:bold;</code> means this is the bold version of this typeface, rather than apply bold to this text</li>
        <li><i class="icon-minus"></i><a href="http://paulirish.com/2010/font-face-gotchas/" target="_blank">@font-face gotchas</a></li>
    </ul>
    
    <strong>Pros</strong>
    
    <ul>
        <li><i class="icon-minus"></i>Easy to implement</li>
        <li><i class="icon-minus"></i>Large variety of APIs</li>
        <li><i class="icon-minus"></i>Customizable</li>
        <li><i class="icon-minus"></i>Easy to add to elements</li>
        <li><i class="icon-minus"></i>Nothing required besides CSS</li>
        <li><i class="icon-minus"></i>Is currently part of the working draft of CSS Fonts Module 3</li>
    </ul>
    
    <strong>Cons</strong>
    
    <ul>
        <li><i class="icon-minus"></i>Limited browser support if used improperly</li>
        <li><i class="icon-minus"></i>Some older versions of modern browsers (Chrome, Opera) don't always render well. Text can have rough edges. <em>**I have not been able to confirm whether this is still an issue now or not.</em></li>
    </ul>
    
    <hr />  
    
    <h3>Fast Fonts</h3>
    
    <p>Using <a href="https://fonts.com" target="_blank">Fast Fonts</a> has its advantages and shouldn't be completely disregarded when choosing which method to use for adding custom fonts to a web site. It has strong platform integration and is a scalable and popular service. It can be used with Google Webfonts and is easily added to WordPress, Posterous, Typepad, and other similar CMS powered sites.</p>
    
    <p>However, full use of Fast Fonts doesn't come without a cost</a>. If you need to use it on a project you will have to get permission. Send the request to Kurt along with the domain names you'll be using it on (including local development urls), and total page views for your site for the past 30 days.</p>
    
        
    <hr />

    <h3>Google WebFonts API &amp; Font Loader</h3>
    
    <p>There are two options available with <a href="https://code.google.com/apis/webfonts/" target="_blank">Google Webfonts</a>. Both options have their downsides of course but they can be just as good to use as <code>@font-face</code>, it all depends on a projects needs.</p>
    
    <h4>Webfonts API</h4>
    
    <p><a href="https://code.google.com/apis/webfonts/docs/getting_started.html" target="_blank">Google's Webfonts API</a> essentially does the same thing as <code>@font-face</code>, it just does all the hard work for you, providing wider browser support.The major drawback to this method is the very small font library it uses. To make it work all you need to do is include the stylesheet + the font name.</p>
    
    <textarea class="brush:html">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Font+Name" target="_blank">
    </textarea>
    
    <p class="normalize">Then define a style for the selector you want to apply the font to:</p>
    
    <textarea class="brush:css">
        CSS selector {
            font-family: 'Font Name', serif;
        }
    </textarea>


    <h3>Webfont Loader</h3>
    
    <p>Another option Google offers is the <a href="https://code.google.com/apis/webfonts/docs/webfont_loader.html" target="_blank">Webfont Loader</a> which is a JavaScript library that allows for more control than the font API does. You can also use multiple webfont providers like Typekit. To use it include the script in your page:</p>
    
    <textarea class="brush:javascript">
        <script type="text/javascript">
            WebFontConfig = { google: { families: [ 'Tangerine', 'Cantarell' ]} };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + 
                          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>
    </textarea>
    
    <p class="normalize">Including the webfont.js file this way is faster if not already using the Ajax APIs. Otherwise you should use this:</p>
    
    <textarea class="brush:javascript">
        <script type="text/javascript" src="https://www.google.com/jsapi" target="_blank"></script>
        <script type="text/javascript">
            google.load("webfont", "1");
            google.setOnLoadCallback(function() {
                WebFont.load({ google: { families: [ 'Tangerine', 'Cantarell' ]} });
            });
        </script>
    </textarea>
    
    <p>By using the Webfont Loader you have more ability to customize things including the use of more fonts, not just those in the Google Webfont library which is not large. However, it then requires you to load JavaScript, sacrificing one thing for another.</p>
    
    <strong>Pros</strong>
    
    <ul>
        <li><i class="icon-minus"></i>Very easy to implement</li>
        <li><i class="icon-minus"></i>Wide browser support</li>
        <li><i class="icon-minus"></i>Can be combined with Typekit</li>
        <li><i class="icon-minus"></i>Customizable when using the font loader</li>
        <li><i class="icon-minus"></i>API does the same thing as <code>@font-face</code></li>
    </ul>
    
    <strong>Cons</strong>
    
    <ul>
        <li><i class="icon-minus"></i>Very small font library if using the font API</li>
        <li><i class="icon-minus"></i>Using the Webfont Loader requires the use of JavaScript to work</li>
        <li><i class="icon-minus"></i>Most browsers will load the rest of the page first, leaving a blank space where the text would be, or otherwise show the fallback option if one exists, until the page fully loads.</li>
        <li><i class="icon-minus"></i>Some fonts in the webfont library render poorly on Windows</li>
    </ul>
    
    <hr />        
    
    <h3>Font Licensing</h3>
    
    <p>Even though you can transform just about any font into a web font file, you should still make sure it is legally okay for you to do so. Many foundries have updated their conditions to specify how their fonts can be used on the web. View <a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&item_id=UNESCO_Font_Lic" target="_blank">Font Licensing and Protection Details</a> for more information.</p>
    
    <hr />
    
    <h3>Specifications &amp; Font File Formats</h3>
    
    <ul>
        <li><i class="icon-minus"></i><a href="http://www.w3.org/TR/1998/REC-CSS2-19980512/fonts.html#font-descriptions" target="_blank">CSS 2 Fonts</a> &ndash; May 1998 (Obsolete)</li>
        <li><i class="icon-minus"></i><a href="http://www.w3.org/TR/css3-fonts/" target="_blank">CSS 3 Fonts</a> &ndash; Working Draft 2009 </li>
        <li><i class="icon-minus"></i><a href="http://www.w3.org/TR/css3-fonts/" target="_blank">CSS Fonts Module</a> &ndash; W3C Working Draft March 2011</li>
        <li><i class="icon-minus"></i><a href="http://www.w3.org/TR/WOFF/" target="_blank">WOFF Font Format</a> &ndash; Working Draft 2010</li>
        <li><i class="icon-minus"></i><a href="http://www.w3.org/TR/SVG/fonts.html" target="_blank">SVG Font Format</a></li>
        <li><i class="icon-minus"></i><a href="http://www.w3.org/Submission/EOT/" target="_blank">Embedded Open Type (EOT) File Format</a></li>
        <li><i class="icon-minus"></i><a href="http://www.microsoft.com/typography/otspec/" target="_blank">Microsoft Open Type Specification</a></li>
        <li><i class="icon-minus"></i><a href="http://www.adobe.com/devnet/opentype/afdko/topic_feature_file_syntax.html#9.e" target="_blank">OpenType Feature File Specification</a> </li>
        <li><i class="icon-minus"></i><a href="http://developer.apple.com/fonts/TTRefMan/" target="_blank">Apple True Type Reference</a> </li>
    </ul>
</article>