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
