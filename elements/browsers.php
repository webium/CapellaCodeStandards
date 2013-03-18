<section id="browserTesting">

    <div class="intro has-icon">
        <img class="icon" src="img/common/icon-curly.png" alt="{}" />
        
        <h1>Browser Testing and Support</h1>
        
        <p>Today's audience can choose from quite a large pool of web browsers, each providing a slightly (or dramatically) different experience. As developers, it is our responsibility to choose just how the web pages we build are displayed to those users. This section describes how we, at Capella University, make some of these key decisions.</p>
    </div>
    

<article id="browserSupport">
   <h2>What we support</h2>

    <figure>
        <img src="img/common/browsers1.jpg" alt="Browsers" />
    </figure>
    
    <p><strong>Capella University supports any browser with an A-Grade in <a href="http://developer.yahoo.com/yui/articles/gbs/">Yahoo's Graded Browser Support</a>, with the exception of Opera. There may be exceptions to this, given regional markets and their particular metrics</strong>.</p>
</article>    

    
<article id="browserHow">
    <h2>How we test</h2>
    
    <p>Comprehensive browser testing is a must on every Capella University web project. Considerable effort must be made to test across browsers and platforms to ensure a quality and consistent user experience. Setting up a testing environment can be a challenge but can be well worth it.</p>

    <h3>On Microsoft Windows</h3>
    
    <h4 id="vhds">IE Testing</h4>
    
    <p>Since it's impossible to have more than a single copy of Microsoft Internet Explorer installed on a PC, testing for IE is a challenge. Fortunately, Microsoft has finally made available development versions of older Internet Explorer's available for downloading. These Virtual Hard Drives (VHD's) run stripped down versions of Microsoft Windows that expire (time out) over time. Setting them up again after a few months is typically required. Development copies of Microsoft Windows from your MSDN license (if available) may also be an option depending on what you have access to.</p>

    <ul>
        <li><a href="http://www.microsoft.com/windows/virtual-pc/default.aspx">Virtual PC</a> - Virtual PC must be installed on your computer, and if you are on Windows 7, you must use "XP Mode".</li>
        <li><a href="http://www.microsoft.com/downloads/en/details.aspx?FamilyID=21eabb90-958f-4b64-b5f1-73d0a413c8ef&displaylang=en">Microsoft Windows VPC Images</a> - Several varieties are available of the virtual hard drive images. You may need to install several to have a comprehensive test suite, depending on your project.</li>
    </ul>

    <p>Additionally, other less effective IE Testing options (not typically recommended) include <a href="http://www.my-debugbar.com/wiki/IETester/HomePage">IETester</a>, which is still better than <a href="http://tredosoft.com/Multiple_IE">Multiple_IE</a> and <a href="http://tredosoft.com/IE7_standalone">IE7 standalone</a>.</p>
    
    <h4>Firefox</h4>
    
    <ul>
        <li><a href="http://www.mozilla.com/en-US/firefox/all-older.html">Firefox 3.6+</a> should be installed natively as well - with version 3.0 available through a <a href="http://portableapps.com/">portable apps</a> version. </li>
        <li>If you're up to it, <a href="https://wiki.molecular.com/wiki/Install_Firefox_3">Install Firefox 3, 3.5, and/or 3.6 side-by-side with FF4</a>. The Firefox Profile Manager allows you to install to different directories and <a href="http://lifehacker.com/5481213/master-multiple-firefox-profiles-for-more-productive-browsing">maintain different profiles for each</a>.</li>
    </ul>

    <h4>Safari for the PC</h4>

    <ul>
        <li>Use <a href="http://www.apple.com/safari/">the newest release of Safari for the PC</a>. It is 98% consistent with Safari on OS X, but not completely, so test there if its a required platform.</li>
    </ul>

    <h4>Opera</h4>

    <ul>
        <li>You can download <a href="http://arc.opera.com/pub/opera/win/">old versions from their archive</a>. Install in different folders to run multiple versions</li>
    </ul>

    <h4>Google Chrome and Chrome Versions</h4>
    
    <p>Google Chrome updates itself and as luck would have it, most all users have the most recent version more often than not. If only every browser were this easy. No worries about old browsers based on Google Chrome.</p>

    <h3>On Mac OS X</h3>

    <p>For the core Mac OS X browsers, Mozilla Firefox, Google Chrome and Apple Safari offer virtually identical browser experiences to their Windows counterparts. That said, some OS level differences can be present and web sites should be tested on both platforms. Typical differences are around font rendering and thus spacing issues sometimes arise.</p>
    
    <h4>Testing for Windows on a Mac</h4>
    
    <p>There are a number of options for testing Windows-based browsers on the Mac OS. First, Mac computers offer a "<a href="http://en.wikipedia.org/wiki/Boot_Camp_(software)">boot camp</a>" partition which allow you to boot the Mac into a Microsoft Windows partition. This is a complex yet thorough testing environment. Once you've booted to Windows, the normal <a href="#vhds">Windows options exist</a>.</p>
    
    <p>Other options include virtualization of Windows inside Mac OS X, which allows you to literally run Windows inside of the Mac OS.</p>
    
    <p><a href="#vhds">The Microsoft VHD's</a> can be opened or converted on most of these options, therefore enabling the same degree of testing prowess that Windows users have available to them. Though since you can also test on the Mac simultaneously, some might argue you have more flexibility...</p>
    
    <ul>
        <li><a href="http://www.parallels.com/products/desktop/">Parallels</a> - Parallels is available and may already be installed by the Capella University IT department on your Mac.</li>
        <li><a href="http://www.vmware.com/products/fusion/overview.html">VMWare Fusion</a> - VMWare Fusion offers the same level of Windows virtualization through their Fusion product.</li>
    </ul>

    <h4>Mozilla Firefox</h4>

    <p>Just like on Windows, you can install and run multiple copies of Mozilla Firefox on a Mac, though it is a bit trickier to set up multiple profiles via the Profile Manager. That said, there are some tricks you can use with <a href="http://sonnygill.net/mac/mac-multiple-firefox-profiles/">Automator to make separate profiles and run them nicely</a>.</p>
</article>

<article id="browserIE">
    <h3>Bugs in standalone IE versions</h3>

    <p>Note: The IE6 standalone has a buggy implementation of opacity in some cases. This will result in any opacity applied with a CSS filter, like alpha opacity or a 24-bit PNG, to fail. In the case that opacity must be tested, you will need a native IE6 installation.</p>

    <p>It has been noticed that IE 7 using the Vista platform does have differences from IE 7 on Windows XP, therefore, you might want to make sure that someone on your team has this configuration as well. <a href="http://www.my-debugbar.com/wiki/IETester/HomePage">IETester</a> is known to fix a number of these issues, as do the Xenocode browsers.</p>
</article>


<article id="browserResolution">
    <h2>Browser Resolution</h2>
        <p>Along with catering to browsers, developers must stay conscious of the screen resolutions of their audience. As monitor screens get larger, the breadth of resolutions grows as well. Below are some guidelines to help you in working with resolutions.</p>
    
    <p><strong>1024px resolution</strong></p>
    
    <ul>
        <li>Fold estimated at 570px.</li>
        <li>Optimal width: 960px - Has comfortable padding on both sides, is divisible by many numbers, and also plays well with <a href="http://www.iab.net/iab_products_and_industry_services/1421/1443/1452">IAB ad standard widths</a></li>
        <li>Larger width: 970px - Still has some padding on both sides in most browsers. The math plays well with the <a href="http://en.wikipedia.org/wiki/Golden_ratio">Golden Ratio</a></li>
        <li>Maximum width: 996px - Without incurring any horizontal scrollbars in the major browsers. <a href="http://www.nealgrosskopf.com/tech/thread.php?pid=43">Based on the research here</a> the maximum is 1003 px wide if you don't want a horizontal scrollbar.</li>
    </ul>
    
    
    <p><strong>Current stats on window sizes</strong></p>
    
    <ul>
        <li><a href="http://www.cameronmoll.com/archives/001220.html">Authentic Boredom - Optimal width for 1024px resolution?</a></li>
        <li><a href="http://marketshare.hitslink.com/report.aspx?qprid=17&qpmr=100&qpdt=1&qpct=3&qptimeframe=M">Market share for browsers, operating systems and search engines</a></li><li><a href="http://www.w3counter.com/globalstats.php">Global Web Stats</a></li>
    </ul>
    
    
    <p><strong>System resolution is not, however, the same as browser size</strong></p>
    
    <ul>
        <li><a href="http://mentalized.net/journal/2006/10/24/browser_size_does_matter_actual_numbers/">Browser size does matter - Actual numbers | mentalized</a></li>
        <li><a href="http://www.baekdal.com/reports/actual-browser-sizes/abs-sizes/">What size do i need to support | baekdal</a></li>
        <li><a href="http://www.456bereastreet.com/archive/200704/poll_results_504_of_respondents_maximise_windows/">Poll results: 50.4% of respondents maximise windows</a></li>
        <li><a href="http://www.useit.com/alertbox/screen_resolution.html">Screen Resolution and Page Layout</a></li>
    </ul>
</article>
    
</section>
