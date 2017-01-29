mod.web_layout.BackendLayouts.Newsletter {
    title = LLL:EXT:angelshop/Resources/Private/Language/BackendLayouts/locallang.xlf:Newsletter.title
    config {
        backend_layout {
            colCount = 1
            rowCount = 1
            rows {
                1 {
                    columns {
                        1 {
                            name = LLL:EXT:angelshop/Resources/Private/Language/BackendLayouts/locallang.xlf:Newsletter.col.0
                            colPos = 0
                            allowed = tx_newsletter_textpic,tx_newsletter_image,tx_newsletter_text
                            allowedGridTypes >
                        }
                    }
                }
            }
        }
    }
}