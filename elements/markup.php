<section id="markup">

    <div class="intro has-icon">
        <img class="icon" src="img/common/icon-curly.png" alt="{}" />
        <h1>Markup</h1>
        
        <p>The first component of any web page is the tag-based markup language of <abbr title="HypterText Markup Language">HTML</abbr>. The Hyper Text Markup Language (HTML) has a sordid history but has come into its own in the last few years. After a lengthy experimentation with the XML-based  XHTML variant the industry has accepted that HTML is the future of the web.</p>
        
        <p>Markup defines the structure and outline of a document and offers a structured content. Markup is not intended to define the look and feel of the content on the page beyond rudimentary concepts such as headers, paragraphs, and lists. The presentation attributes of HTML have all been deprecated and style should be contained in <a href="#css">style sheets</a>. (Inline styling is strictly prohibited.)</p>
    </div>
    
<article id="markupHTML5">
    <h2>HTML5</h2>
    
    <p><a href="http://www.ibm.com/developerworks/library/wa-webstandards/index.html">HTML5</a> is a new version of HTML and XHTML. The <a href="http://www.w3.org/TR/html5/">HTML5 draft</a> specification defines a single language that can be written in HTML and XML. It attempts to solve issues found in previous iterations of HTML and addresses the needs of <em>web applications</em>, an area previously not adequately covered by HTML. (<a href="http://html5.org/">source</a>).</p>
    
    <p>We will use the HTML5 Doctype and HTML5 features when appropriate.</p>
    
    <p>We will test our markup against the <a href="http://validator.w3.org/">W3C validator</a>, to ensure that the markup is well formed. 100% valid code is not a goal, but validation certainly helps to write more maintainable sites as well as debugging code. <b>We do not guarantee code is 100% valid, but instead assures the cross-browser experience is fairly consistent</b>.</p>

    <h2 id="h5bp">Template</h2>
    
    <p>For HTML5 Documents we use a modified version of <a href="http://html5boilerplate.com/">H5BP</a> modified for our own project needs. <a href="https://github.com/webium/CapellaBoilerPlate">Fork the Github repository</a>.</p>
</article>
    
<article id="markupDoctype">
    <h2>Doctype</h2>
    
    <p>A proper Doctype which triggers standards mode in your browser should always be used. Quirks mode should always be avoided.</p>
    
    <p>A nice aspect of HTML5 is that it streamlines the amount of code that is required. Meaningless attributes have been dropped, and the <code>DOCTYPE</code> declaration has been simplified significantly. Additionally, there is no need to use <code>CDATA</code> to escape inline JavaScript, formerly a requirement to meet XML strictness in XHTML.</p>
    
    <figure class="preCode">HTML5 Doctype</figure>
    <textarea class="brush:html">
        <!DOCTYPE html>
    </textarea>
</article>
    
<article id="markupEncoding">
    <h3>Character Encoding</h3>

    <p>All markup should be delivered as UTF-8, as its the most friendly for internationalization. It should be designated in both the HTTP header and the head of the document.</p>
    
    <p>Setting the character set using &lt;meta&gt; tags.</p>
    <textarea class="brush:html">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </textarea>
    
    <p>In HTML5, just do:</p>
    <textarea class="brush:html">
        <meta charset="utf-8">
    </textarea>
</article>

<article id="markupSemantics">
    <h3>Use of new semantic elements</h3>
    
    <p>Elements such as <code>header, footer, section, article</code>, and others, can be used multiple times on a page, and more than once within one or the other even. In cases where there will be more than one of the same element, that is used for the same thing such as using <code>article</code> for each blog post of a page and each article having a <code>header</code> and <code>footer</code>, adding a class to them can help separate them from any other places you may use these elements on the page. That way you can target the elements more specifically in your CSS. However this is not always necessary, depending on the structure of the page and the way you define your selectors.</p>
    
    <textarea class="brush:html">
        <header>
            <h1>Our Blog</h1>
        </header>
        
        <article>
            <header>
                <h1>This is the best blog title ever</h1>           
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </article>
        <article>
            <header>
                <h1>This is the second best blog title</h1>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </article>
    </textarea>
    
    <p>Structuring pages cleanly allows for simplified selectors which keep the specificity level low making it easier to override selectors later on as the stylesheet grows.</p>
    
    <textarea class="brush:css">
    header h1 { color: red; }
    article header h1 { color: blue; }
    </textarea>
</article>

<article id="markupGeneral">
    <h2>General Markup Guidelines</h2>

    <p>The following are general guidelines for structuring your HTML markup. Authors are reminded to always use markup which represents the semantics of the content in the document being created.</p>
    
    <ul>
        <li>Use actual P elements for paragraph delimiters as opposed to multiple BR tags.</li>
        <li>Make use of DL (definition lists) and BLOCKQUOTE, when appropriate.</li>
        <li>Items in list form should always be housed in a UL, OL, or DL, never a set of DIVs or Ps.</li>
        <li>Use <code>label</code> fields to label each form field, the <code>for</code> attribute should associate itself with the input field, so users can click the labels. 
            <code>cursor:pointer;</code> on the label is wise, as well. <sup><a href="http://www.accessifyforum.com/viewtopic.php?t=1926#14178">note 1</a> 
            <a href="http://www.accessifyforum.com/viewtopic.php?t=6738">note 2</a></sup>
        </li>
        <li>Do not use the size attribute on your input fields. The size attribute is relative to the font-size of the text inside the input. Instead use css width.</li>
        <li>Place an html comment on some closing div tags to indicate what element you're closing. It will help when there is lots of nesting and indentation.</li>
        <li>Tables shouldn't be used for page layout.</li>
        <li>Use <a href="http://en.wikipedia.org/wiki/Microformat">microformats</a> and/or Microdata where appropriate, specifically hCard and adr.</li>
        <li>Make use of THEAD, TBODY, and TH tags (and Scope attribute) when appropriate.

            <figure class="preCode">Table markup with proper syntax (THEAD,TBODY,TH [scope])</figure>
            <textarea class="brush:html">
                <table summary="This is a chart of year-end returns for 2005.">
                    <thead>
                        <tr>
                            <th scope="col">Table header 1</th>
                            <th scope="col">Table header 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Table data 1</td>
                            <td>Table data 2</td>
                        </tr>
                    </tbody>
                </table>
            </textarea>
        </li>
    
        <li>Always use title-case for headers and titles. Do not use all caps or all lowercase titles in markup, instead apply the CSS property <code>text-transform:uppercase/lowercase</code>.</li>
    </ul>   
</article>

<article id="markupQuoting">
    <h3>Quoting Attributes</h3>
    
    <p>The HTML5 specification defines quotes around attributes as optional. For consistency with attributes that accept whitespace, all attributes should be quoted. </p> 
    
    <textarea class="brush:html">
        <p class="line note" data-attribute="106">This is my paragraph of special text.</p>
    </textarea>
</article>
    
</section>
