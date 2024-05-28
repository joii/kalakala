<div class="navbar-slider">
    <div class="header">
        <div class="container-fluid">
            <button class="btn btn-icon navbar-toggle" type="button">
                <span class="group">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>

    <ul class="nav nav-main">
        <li class="{{ $pagename=='home'?'active':'' }}"><a href="/">Home <span class="line-animate"></span></a></li>
        <li class="{{ $pagename=='book'?'active':'' }}"><a href="/book-a-session">Book a session <span class="line-animate"></span></a></li>
        <li class="{{ $pagename=='about'?'active':'' }}"><a href="/about">About <span class="line-animate"></span></a></li>
        <li class="{{ $pagename=='meet'?'active':'' }}"><a href="/meet-your-colourist">Meet Your Colourist <span class="line-animate"></span></a></li>
        <li class="{{ $pagename=='service'?'active':'' }}"><a href="/service">Service <span class="line-animate"></span></a></li>
        <li class="{{ $pagename=='contact'?'active':'' }}"><a href="/contact">Contact <span class="line-animate"></span></a></li>
        <li class="{{ $pagename=='press'?'active':'' }}"><a href="/press">Press <span class="line-animate"></span></a></li>
    </ul>
</div>
