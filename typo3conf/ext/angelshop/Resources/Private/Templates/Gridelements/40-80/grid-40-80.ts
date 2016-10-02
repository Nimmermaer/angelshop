tt_content.gridelements_pi1.20.10.setup.grid-40-80 {
    columns {
        20 {
            renderObj =< tt_content
            wrap = <div class="col-md-4">|</div>
        }

        21 {
            renderObj =< tt_content
            wrap = <div class="col-md-8">|</div>
        }
    }

    wrap = <div class="row row-eq-height">|</div>
    prepend < lib.stdheader
}