<article id="cssFormatting">
    <h3>CSS Formatting</h3>
    
    <p>At minimum, format CSS with selectors on one line and each property on its own line. The declarations are indented. </p>
    <p>As an enhancement to that style, related or child styles and additional 2 or 4 spaces. That allows for hierarchical scanning and organization and makes (for some people) an easier-to-read style sheet.</p>
    <p>Also, if you specify multiple selectors, it's a good idea to start each on new line. This prevents lines from growing long and improves readability as well as version control workflow.</p>
    <textarea class="brush:css">
    .post-list li a{
        color:#A8A8A8;
    }
        .post-list li a:hover{
            color:#000;
            text-decoration:none;
        }
        .post-list li .author a, 
        .post-list li .author a:hover{
             color:#F30;
             text-transform:uppercase;
        }
    </textarea>
    <p>For multiple author environments, single line CSS should be avoided because it can cause issues with version control. </p>
    <h4>Alphabetize</h4>
    <p>If you're performance obsessed <a href="http://www.barryvan.com.au/2009/08/css-minifier-and-alphabetiser/">alphabetizing CSS properties increases the odds of larger repeatable patterns being present to aid in GZIP compression</a>. </p> 
<h3>Classes vs. IDs</h3>
    
    <p>You should only give elements an ID attribute if they are unique. They should be applied to that element only and nothing else. Classes can be applied to multiple elements that share the same style properties. Things that should look and work in the same way can have the same class name.</p>
    
    <textarea class="brush:html">
        <ul id="categories">
            <li class="item">Category 1</li>
            <li class="item">Category 2</li>
            <li class="item">Category 3</li>
        </ul>
    </textarea>
</article>