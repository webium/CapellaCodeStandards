<article id="cssMeasurements">
    <h3>Pixels vs. Ems</h3>
    
    <p>We use the <code>px</code> unit of measurement to define <code>font size</code>, because it offers absolute control over text. We realize that using the <code>em</code> unit for font sizing used to be popular, to accommodate for Internet Explorer 6 not resizing pixel based text. However, all major browsers (including <abbr title="Internet Explorer 7">IE7</abbr> and <abbr title="Internet Explorer 8">IE8</abbr>) now support text resizing of pixel units and/or full-page zooming. Since <abbr title="Internet Explorer 6">IE6</abbr> is largely considered deprecated, pixels sizing is preferred. Additionally, unit-less <code>line-height</code> is preferred because it does not inherit a percentage value of its parent element, but instead is based on a multiplier of the <code>font-size</code>.</p>
    
    
    <figure class="preCode">Correct</figure>
    <textarea class="brush:css">
        #selector {
            font-size: 13px;
            line-height: 1.5;  /*  13 * 1.5 = 19.5 ~ Rounds to 20px. */
        }
    </textarea>
    
    <figure class="preCode">Incorrect</figure>
    <textarea class="brush:css">
        /*  Equivalent to 13px font-size and 20px line-height, but only if the browser default text size is 16px. */
        #selector {
            font-size: 0.813em;
            line-height: 1.25em;
        }
    </textarea>
</article>