<article id="cssImages">
    <h3>Images</h3>
    
    <ul>
        <li>For repeating images, use <a href="http://www.iandevlin.com/blog/2010/03/webdev/fading-issue-with-repeating-background-transparent-image-in-internet-explorer">something larger than 1x1 pixels</a></li>
        <li>You should never be using spacer images.</li>
        <li>Use <a href="#_leverage_css_sprites">CSS sprites generously</a>. They make hover states easy, improve page load time, and reduce carbon dioxide emissions.</li>

        <li>Typically, all images should be sliced with a transparent background (PNG8). All should be cropped tightly to the image boundaries.
            <ul>
                <li>However, the logo should always have a background matte and have padding before the crop. (so other people can hotlink to the file)</li>
            </ul>
        </li>
    </ul>
</article>