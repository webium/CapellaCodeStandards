<article id="preformanceImages">
    <h2>Image formats</h2>
    
    <p>There are four main image formats that should be used, detailed here:</p>
    
    <ol>
        <li><p><strong>JPEG.</strong> - This will cover all photography-based images, such as homepage and category page promo images, or anything with a very high color count.</p></li>
        <li>
            <p><strong>PNG24.</strong> This format, easily accessible in Photoshop, outputs high-color count imagery and fully supports graded opacity by pixel. Relatively, it's quite a heavy format as far as kilobyte weight. It is the only format that IE6 needs to execute a pngfix on. In that case, Capella University recommends the <a href="http://www.dillerdesign.com/experiment/DD_belatedPNG/" target="_blank">DD_belatedPNG script</a> (A pngfix fixes the issue where PNG24's appear to have a gray or light-blue background in IE6. They are not always compatible with background-position).</p>
            <p>In many cases, you can use a GIF fallback for IE6, in place of a PNG24. This is especially true if any sprites need to be done in PNG24. All pngfixes are very slow and expensive, so it's best to avoid using them.</p>
        </li>
        <li><p><strong>PNG8.</strong> - A surprising diversity of color can be captured inside 256 colors, so it's worth trying PNG before heading JPG. PNG also is a lot more compressible than GIF (using tools like pngcrush and pngquant). This format allows graded opacity in nearly all browsers, but in IE6, those semi-opaque pixels are just shown 100% transparent. In many cases this is sufficient. It also does not require a pngfix script to be run, so it's optimized for speed.</p>
            <p>Photoshop cannot output these semi-opaque files correctly but Fireworks can. More detail here: <a href="http://www.sitepoint.com/png8-the-clear-winner/" target="_blank">http://www.sitepoint.com/png8-the-clear-winner/</a></p>
        </li>
        <li><p><strong>Transparent GIF 89a.</strong> - GIF 89a offers the flexibility of transparency and wide browser support, but the constraints of no graded opacity nor a color depth above 256. In our experience, color depths of 64 still provide very good quality thumbnails, and keep the file size comparably very small.</p>
            <p>All low-color count imagery such as icons or thematic graphics should be done in PNG8, as it's the most size-efficient of these four. PNG8 is our primary recommendation for most site graphics.</p>
        </li>
    </ol>
    
    <p>Detailed information on the PNG format, browser support, and the pros and cons of each can be <a href="http://calendar.perfplanet.com/2010/png-that-works/" target="_blank">found in this excellent article</a>.</p>
    
    <p>For further optimization all of these formats, taking them through <a href="http://developer.yahoo.com/yslow/smushit/" target="_blank">Yahoo's Smush.It</a> will reveal how they can be smaller.</p>
</article>    
