<article id="preformanceCSS">
    <h2>Leverage CSS Sprites</h2>
    
    <p>CSS Sprites basically take a number of image assets and merge them together into a singular image file. Each part of it is revealed using CSS background-position. Some typical CSS would look like:</p>
    
    <textarea class="brush:css">
    a.expandbox { display:block; width: 75px; height: 15px; text-indent: -999px; overflow:hidden;
                 background: url(../img/sprite.png) no-repeat -50px -5px;  }
    </textarea>
    
    <p>It's quite common to leverage sprites for :hover states. In that case you'll see something like:</p>
    
    <textarea class="brush:css">
    a.expandbox:hover { background-position: -50px -20px; }
    </textarea>
    
    <p>Using sprites reduces total page weight and reduces HTTP connections which speeds up page load. <a href="http://css-tricks.com/css-sprites/" target="_blank">More on the general technique and overview at css-tricks.com</a>.  It is just an overall best practice to make use of CSS sprite images whenever you can.</p>
    
    <p>Many developers use a vertically-oriented sprite in addition to the primary sprite. This vertical sprite will be <strong>less than or equal to 100px wide</strong> (and tall) and contain icons that are typically placed next to text, such as list item bullets or call to action links and buttons. Yahoo uses a few <a href="http://l.yimg.com/a/i/ww/sp/pa-icons3.gif" target="_blank">such as this one</a>.</p>
    
    <p>The one consideration is to not make sprites too large, something over 1000px in either direction will end up using a sizeable amount of memory. Read more on <a href="http://blog.vlad1.com/2009/06/22/to-sprite-or-not-to-sprite/" target="_blank">when to use sprites and memory usage here</a>, and for more general tips and techniques on creating sprites check out the <a href="http://blog.mozilla.com/webdev/2009/03/27/css-spriting-tips/" target="_blank">Mozilla Dev Blog</a>.</p>

    <p>Some general <a href="http://blog.mozilla.com/webdev/2009/03/27/css-spriting-tips/" target="_blank">tips and techniques</a> in sprite creation can be found on the <a href="http://blog.mozilla.com/webdev/2009/03/27/css-spriting-tips/" target="_blank">Mozilla Dev Blog</a>.</p>
</article>
