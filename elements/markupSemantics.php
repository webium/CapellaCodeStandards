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
