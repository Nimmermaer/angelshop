tt_content.gridelements_pi1.20.10.setup.accordionItem {
    columns {
        20 {
            renderObj =< tt_content
            wrap (
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a aria-expanded="true" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-{field:uid}">{field:header}</a>
                </h4>
           </div>
            <div style="" aria-expanded="true" id="collapse-{field:uid}" class="panel-collapse collapse">
                        <div class="panel-body">|</div>
             </div>

            )
            wrap.insertData = 1

        }
    }

    wrap =    <div class="panel panel-default">|</div>

}
