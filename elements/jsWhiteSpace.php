<article id="jsWhiteSpace">
    <h3>White-space</h3>
    
    <p>In general, the use of whitespace should follow longstanding English reading conventions. Such that, there will be one space after each comma and colon (and semi-colon where applicable), but no spaces immediately inside the right and left sides of parenthesis. In short, we advocate readability within reason. Additionally, braces should always appear on the same line as their preceding argument.</p>
    
    <p>Consider the following examples of a JavaScript for-loop...</p>
    
    
    <figure class="preCode">Correct</figure>
    <textarea class="brush:js">
        for (var i = 0, j = arr.length; i < j; i++) {
            // Do something.
        }
    </textarea>
    
    <figure class="preCode">Incorrect</figure>
    <textarea class="brush:js">
        for ( var i = 0, j = arr.length; i < j; i++ )
        {
            // Do something.
        }
    </textarea>
    
    <figure class="preCode">Also incorrect</figure>
    <textarea class="brush:js">
        for(var i=0,j=arr.length;i<j;i++){
            // Do something.
        }
    </textarea>
</article>
