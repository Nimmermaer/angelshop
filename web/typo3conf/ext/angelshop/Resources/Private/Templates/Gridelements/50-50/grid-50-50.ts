tt_content.gridelements_pi1.20.10.setup.grid-50-50 {
    columns {
        20 {
            renderObj =< tt_content
            wrap = <div class=" col-md-6">|</div>
        }

        21 {
            renderObj =< tt_content
            wrap = <div class=" col-md-6">|</div>
        }
    }

    wrap = <div class="row">|</div>
    prepend < lib.stdheader
}