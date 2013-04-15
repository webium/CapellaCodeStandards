<article id="browserHow">
    <h2>How we test</h2>
    
    <p>Comprehensive browser testing is a must on every Capella University web project. Considerable effort must be made to test across browsers and platforms to ensure a quality and consistent user experience. Setting up a testing environment can be a challenge but can be well worth it.</p>

    <h3>On Microsoft Windows</h3>
    
    <h4 id="vhds">IE Testing</h4>
    
    <p>Since it's impossible to have more than a single copy of Microsoft Internet Explorer installed on a PC, testing for IE is a challenge. Fortunately, Microsoft has finally made available development versions of older Internet Explorer's available for downloading. These Virtual Hard Drives (VHD's) run stripped down versions of Microsoft Windows that expire (time out) over time. Setting them up again after a few months is typically required. Development copies of Microsoft Windows from your MSDN license (if available) may also be an option depending on what you have access to.</p>

    <ul>
        <li><i class="icon-minus"></i><a href="http://www.microsoft.com/windows/virtual-pc/default.aspx" target="_blank">Virtual PC</a> - Virtual PC must be installed on your computer, and if you are on Windows 7, you must use "XP Mode".</li>
        <li><i class="icon-minus"></i><a href="http://www.microsoft.com/downloads/en/details.aspx?FamilyID=21eabb90-958f-4b64-b5f1-73d0a413c8ef&displaylang=en" target="_blank">Microsoft Windows VPC Images</a> - Several varieties are available of the virtual hard drive images. You may need to install several to have a comprehensive test suite, depending on your project.</li>
    </ul>

    <p>Additionally, other less effective IE Testing options (not typically recommended) include <a href="http://www.my-debugbar.com/wiki/IETester/HomePage" target="_blank">IETester</a>, which is still better than <a href="http://tredosoft.com/Multiple_IE">Multiple_IE</a> and <a href="http://tredosoft.com/IE7_standalone" target="_blank">IE7 standalone</a>.</p>
    
    <h4>Firefox</h4>
    
    <ul>
        <li><i class="icon-minus"></i><a href="http://www.mozilla.com/en-US/firefox/all-older.html" target="_blank">Firefox 3.6+</a> should be installed natively as well - with version 3.0 available through a <a href="http://portableapps.com/" target="_blank">portable apps</a> version. </li>
        <li><i class="icon-minus"></i>If you're up to it, <a href="https://wiki.molecular.com/wiki/Install_Firefox_3" target="_blank">Install Firefox 3, 3.5, and/or 3.6 side-by-side with FF4</a>. The Firefox Profile Manager allows you to install to different directories and <a href="http://lifehacker.com/5481213/master-multiple-firefox-profiles-for-more-productive-browsing" target="_blank">maintain different profiles for each</a>.</li>
    </ul>

    <h4>Safari for the PC</h4>

    <ul>
        <li><i class="icon-minus"></i>Use <a href="http://www.apple.com/safari/" target="_blank">the newest release of Safari for the PC</a>. It is 98% consistent with Safari on OS X, but not completely, so test there if its a required platform.</li>
    </ul>

    <h4>Opera</h4>

    <ul>
        <li><i class="icon-minus"></i>You can download <a href="http://arc.opera.com/pub/opera/win/" target="_blank">old versions from their archive</a>. Install in different folders to run multiple versions</li>
    </ul>

    <h4>Google Chrome and Chrome Versions</h4>
    
    <p>Google Chrome updates itself and as luck would have it, most all users have the most recent version more often than not. If only every browser were this easy. No worries about old browsers based on Google Chrome.</p>

    <h3>On Mac OS X</h3>

    <p>For the core Mac OS X browsers, Mozilla Firefox, Google Chrome and Apple Safari offer virtually identical browser experiences to their Windows counterparts. That said, some OS level differences can be present and web sites should be tested on both platforms. Typical differences are around font rendering and thus spacing issues sometimes arise.</p>
    
    <h4>Testing for Windows on a Mac</h4>
    
    <p>There are a number of options for testing Windows-based browsers on the Mac OS. First, Mac computers offer a "<a href="http://en.wikipedia.org/wiki/Boot_Camp_(software)" target="_blank">boot camp</a>" partition which allow you to boot the Mac into a Microsoft Windows partition. This is a complex yet thorough testing environment. Once you've booted to Windows, the normal <a href="#vhds">Windows options exist</a>.</p>
    
    <p>Other options include virtualization of Windows inside Mac OS X, which allows you to literally run Windows inside of the Mac OS.</p>
    
    <p><a href="#vhds">The Microsoft VHD's</a> can be opened or converted on most of these options, therefore enabling the same degree of testing prowess that Windows users have available to them. Though since you can also test on the Mac simultaneously, some might argue you have more flexibility...</p>
    
    <ul>
        <li><i class="icon-minus"></i><a href="http://www.parallels.com/products/desktop/" target="_blank">Parallels</a> - Parallels is available and may already be installed by the Capella University IT department on your Mac.</li>
        <li><i class="icon-minus"></i><a href="http://www.vmware.com/products/fusion/overview.html" target="_blank">VMWare Fusion</a> - VMWare Fusion offers the same level of Windows virtualization through their Fusion product.</li>
    </ul>

    <h4>Mozilla Firefox</h4>

    <p>Just like on Windows, you can install and run multiple copies of Mozilla Firefox on a Mac, though it is a bit trickier to set up multiple profiles via the Profile Manager. That said, there are some tricks you can use with <a href="http://sonnygill.net/mac/mac-multiple-firefox-profiles/" target="_blank">Automator to make separate profiles and run them nicely</a>.</p>
</article>

<article id="browserIE">
    <h3>Bugs in standalone IE versions</h3>

    <p>Note: The IE6 standalone has a buggy implementation of opacity in some cases. This will result in any opacity applied with a CSS filter, like alpha opacity or a 24-bit PNG, to fail. In the case that opacity must be tested, you will need a native IE6 installation.</p>

    <p>It has been noticed that IE 7 using the Vista platform does have differences from IE 7 on Windows XP, therefore, you might want to make sure that someone on your team has this configuration as well. <a href="http://www.my-debugbar.com/wiki/IETester/HomePage" target="_blank">IETester</a> is known to fix a number of these issues, as do the Xenocode browsers.</p>
</article>
