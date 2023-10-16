<div id="geolocation-loading" class="geolocation-loading">
    <svg width="250px" height="200px" viewBox="-20 -50 700 400">
        <desc>
            A short loading animation picturing a geolocation icon hopping
            over a loading bar-ball
        </desc>
        <defs>
            <!-- circles at the top -->
            <g id="svg-geo">
                <!-- triange at the bottom -->
                <g id="svg-geo-triangle">
                    <path d="m 220 100 l 80 200 l 80 -200 l 100 0 z"
                          fill="var(--background-color-dark-2)" />
                </g>
                <!-- circles at the top -->
                <g id="svg-geo-circle">
                    <circle cx="300" cy="83" r="81" fill="var(--background-color-dark-2)" />
                    <circle cx="300" cy="83" r="60" fill="var(--background-color)" />
                    <circle cx="300" cy="83" r="30" fill="var(--background-color-dark-2)" />
                </g>
            </g>
        </defs>

        <!-- path for 'jump' of geo icon-->
        <path d="m 0 0 l 0 -25 z" id="jump" stroke="" stroke-width="7"/>

        <!-- geo icon -->
        <use xlink:href="#svg-geo">
            <!-- jump calcMode = "discrete | linear | paced | spline" -->
            <animateMotion dur="1.5s" repeatCount="indefinite" fill="remove" calcMode = "linear">
                <mpath xlink:href="#jump"/>
            </animateMotion>
        </use>

        <!-- line below -->
        <path d="M 600 320 L 0 320 L 600 320" id="bar" stroke="var(--background-color--2)" stroke-width="7"/>
        <circle cx="0" cy="0" r="17" fill="var(--background-color-dark-2)">
            <!-- move circle on loading bar -->
            <animateMotion dur="3s" repeatCount="indefinite" fill="remove">
                <mpath xlink:href="#bar"/>
            </animateMotion>
        </circle>
    </svg>

</div>
