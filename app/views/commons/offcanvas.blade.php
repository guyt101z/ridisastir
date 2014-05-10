<div class="off-canvas-wrap pagepanel" data-offcanvas>
    <div class="inner-wrap pagepanel">
        <nav class="tab-bar">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon" href="#">
                    <span></span>
                </a>
            </section>
            <section class="middle tab-bar-section">
                <a href="{{ URL::to('/') }}">
                     <h1>
                        Ridisastir
                     </h1> 
                </a>
            </section>
        </nav>
        <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list">
                <li><label>Ridisastir</label></li>
                <li>
                    <a href="#" style="color:#2ba6cb;">
                        Request
                        <span class="fa fa-flag fa-fw right"></span>
                    </a>
                </li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Something</a></li>
            </ul>
        </aside>
        <section class="main-section pagepanel">
            @yield('content')
        </section>
        <a class="exit-off-canvas"></a> 
    </div>
</div>
