<article id="preformanceImpact">
    <h2>Communicating the performance impact during design phase</h2>

    <strong>Internally</strong>

    <p>During IA, IxD, and visual design, it is the front end engineer's role to communicate the performance impact of interactive features or certain visual techniques on the target browsers. Give the designers constraints: "If we're using Cufon, we cannot have more than 10 elements of custom font per page."</p>

    <strong>Externally</strong>

    <p>Expectations need to be set that <strong>all browsers will not have the same experience</strong>. They won't perform as well as each other, nor may it make sense to have feature parity. It may be sensible to drop a few features from the IE7 experience. Features that could be considered to be dropped are: <em>shadows, transitions, rounded corners, opacity, gradients.</em></p>
    
    <strong>When communicating the impact of something:</strong>

    <ul>
        <li><i class="icon-minus"></i>Clarify the impact with as much detail as possible: "it will hurt page load" vs "it will add 2 seconds to page load in IE"</li>
        <li><i class="icon-minus"></i>Provide a quick POC (proof of concept) if it's reasonable: "This similar-looking page without siFR loads in 2 seconds, with siFR it loads in 8 and has a delay to show during scrolling"</li>
    </ul>
</article>    
