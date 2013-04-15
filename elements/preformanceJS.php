<article id="preformanceJS">
    <h2>Optimize JavaScript execution</h2>
    
    <p>During a page load, there is typically a lot of script waiting to execute, but you can prioritize it. This order prioritizes based on user response:</p>
    
    <ol>
        <li>Script that changes the visible nature of the page needs to fire absolutely first. This includes any font adjustment, box layout, or IE6 pngfixes.</li>
        <li>Page content initialization</li>
        <li>Page header, topnav and footer initialization</li>
        <li>Attaching event handlers</li>
        <li>Omniture, Doubleclick, and other 3rd party scripts</li>
    </ol>
</article>    
