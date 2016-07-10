tt_content.gridelements_pi1.20.10.setup.accordion {
    columns {
        20 {
            renderObj =< tt_content
            wrap = <div class="panel-group" id="accordion-{field:uid}">|</div>
            allowedGridTypes  = accordionItem
            allowed = ''
        }
    }

    wrap = <div class="row"><div class="col-lg-12">|</div></div>
    prepend < lib.stdheader
}
